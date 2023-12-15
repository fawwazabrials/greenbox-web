<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;
use App\Models\Product;

class OrderController extends BaseController
{
    function __construct()
    {
        $this->product = new Product();
        $this->order = new Order();
    }

    public function index()
    {
        $data['orders'] = $this->order->getAllOrder();

        return view('order_list', $data);
    }

    public function show(int $id = null)
    {
        $data['orders'] = $this->order->getOrderById($id);

        return view('order_item', $data);
    }
}
