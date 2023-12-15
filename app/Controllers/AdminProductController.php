<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class AdminProductController extends BaseController
{
    public function index()
    {
        $model = model(Product::class);
        $data = [
          'products' => $model->orderBy('stock', 'asc')->paginate(6),
          'pager' => $model->pager,
        ];
        
        return view('admin_product', $data);
    }
}
