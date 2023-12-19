<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;
use App\Models\Product;

class OrderController extends BaseController
{
    protected $product;
    protected $order;

    function __construct()
    {
        $this->product = new Product();
        $this->order = new Order();
    }

    public function index()
    {
        if (session()->get('user_token') != 1) {
            return redirect('/')->with('error', 'Login sebagai karyawan terlebih dahulu untuk mengakses page tersebut!');
        }

        $data['orders'] = $this->order->getAllOrder();

        return view('order_list', $data);
    }

    public function show(int $id = null)
    {
        if (session()->get('user_token') != 1) {
            return redirect('/')->with('error', 'Login sebagai karyawan terlebih dahulu untuk mengakses page tersebut!');
        }
        
        $data['orders'] = $this->order->getOrderById($id);

        return view('order_item', $data);
    }
}
