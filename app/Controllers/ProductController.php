<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{
    public function index()
    {
        $model = model(Product::class);
        $data['products'] = $model->getAllProduct();

        return view('product_list', $data);
    }

    public function show(int $id = null)
    {
        $model = model(Product::class);
        $data['product'] = $model->getProductById($id);

        return view('product_item', $data);
    }

    
}
