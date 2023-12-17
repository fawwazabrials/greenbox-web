<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\User;
use CodeIgniter\RESTful\ResourceController;

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
}
