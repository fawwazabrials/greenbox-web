<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;
use App\Models\Product;

class ReportController extends BaseController
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
        
        $data['orders'] = $this->order->getReport();

        return view('report', $data);
    }
}
