<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;

class OrderController extends BaseController
{
    public function index()
    {
        //
    }

    public function submit_order() {        
        $customerName = $this->request->getPost('customerName');
        $deliveryAddress = $this->request->getPost('deliveryAddress');
        $totalAmount = $this->request->getPost('totalAmount');
        
        $model = model(Order::class);
        $model->createOrder($customerName, $deliveryAddress, $totalAmount);

        return redirect('/');
    }
}
