<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\User;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class ProductAPIController extends ResourceController
{
    protected $productModel;
    protected $userModel;

    public function __construct() {
        $this->productModel = model(Product::class);
        $this->userModel = model(User::class);
    }

    public function index() {
        $data = $this->productModel->getAllProduct();
        return $this->respond([
            'status' => 'success',
            'message' => 'All product data fetched succesfully',
            'data' => $data,
        ], 200);
    }

    public function show($id = null) {
        $data = $this->productModel->getProductById($id);
        if (is_null($data)) {
            return $this->respond([
                'status' => 'error',
                'message' => 'Data with id '. $id . ' does not exist',
            ], 400);
        }
        
        return $this->respond([
            'status' => 'success',
            'message' => 'Product with id '.$id.' fetched succesfully',
            'data' => $data,
        ], 200);
    }

    public function addStock() {
        $requestBody = json_decode(json_encode($this->request->getJSON()), true);

        try {
            $email = $requestBody['email'];
            $password = $requestBody['password'];

            if (!$this->userModel->validatePassword($email, $password)) {
                return $this->respond([
                    'status' => 'error',
                    'message' => 'You must be authenticated to access this resource',
                ], 403);
            }
        } catch (Exception $e) {
            return $this->respond([
                'status' => 'error',
                'message' => 'You must be authenticated to access this resource',
            ], 403);
        }
        
        try {
            $requestName = $requestBody['nama'];
            $requestTambahan = $requestBody['tambahan'];
        } catch (Exception $e) {
            return $this->respond([
                'status' => 'error',
                'message' => "'nama' and 'tambahan' must be present at body",
            ], 400);
        }

        $products = $this->productModel->getAllProduct();
        $id = null;

        foreach ($products as $product) {
            if ($product['name'] == $requestName) {
                $id = $product['id'];
                break;
            }
        }

        if (is_null($id)) {
            return $this->respond([
                'status' => 'error',
                'message' => 'Data does not exist',
            ], 400);
        }
        
        $this->productModel->addStock($id, $requestTambahan);

        $data = $this->productModel->getProductById($id);
        return $this->respond([
            'status' => 'success',
            'message' => 'Product with id '.$id.' updated succesfully',
            'data' => $data,
        ], 200);
    }
}
