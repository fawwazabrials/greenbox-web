<?php

namespace App\Controllers;

use App\Models\Order;
use App\Models\User;
use CodeIgniter\RESTful\ResourceController;

class OrderAPIController extends ResourceController
{

    protected $orderModel;
    protected $userModel;

    public function __construct() {
        $this->orderModel = model(Order::class);
        $this->userModel = model(User::class);
    }

    public function index() {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        if (!$this->userModel->validatePassword($email, $password)) {
            return $this->respond([
                'status' => 'error',
                'message' => 'You must be authenticated to access this resource',
            ], 403);
        }

        $data = $this->orderModel->getAllOrderWithoutDetail();
        return $this->respond([
            'status' => 'success',
            'message' => 'All order data fetched succesfully',
            'data' => $data,
        ], 200);
    }

    public function show($id = null) {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        if (!$this->userModel->validatePassword($email, $password)) {
            return $this->respond([
                'status' => 'error',
                'message' => 'You must be authenticated to access this resource',
            ], 403);
        }

        $data = $this->orderModel->getOrderByIdWithoutDetail($id);
        if (is_null($data)) {
            return $this->respond([
                'status' => 'error',
                'message' => 'Data with id '. $id . ' does not exist',
            ], 400);
        }
        
        return $this->respond([
            'status' => 'success',
            'message' => 'Order with id '.$id.' fetched succesfully',
            'data' => $data,
        ], 200);
    }

    public function showReport() {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        if (!$this->userModel->validatePassword($email, $password)) {
            return $this->respond([
                'status' => 'error',
                'message' => 'You must be authenticated to access this resource',
            ], 403);
        }

        $data = $this->orderModel->getReport();
        
        return $this->respond([
            'status' => 'success',
            'message' => 'Report of order fetched succesfully',
            'data' => $data,
        ], 200);
    }
}
