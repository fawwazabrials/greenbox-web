<?php

namespace App\Controllers;

use App\Models\Product;

class Home extends BaseController
{
    public function index(): string
    {
        $model = model(Product::class);
        $data['products'] = $model->getAllProduct();

        return view('landing', $data);
    }
}
