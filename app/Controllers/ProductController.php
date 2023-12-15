<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;
use App\Models\Product;

class ProductController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $model = model(Product::class);
        $data = [
            'products' => $model->paginate(6),
            'pager' => $model->pager,
        ];
        return view('product_list', $data);
    }

    public function show(int $id = null)
    {
        $model = model(Product::class);
        $product = $model->getProductById($id);

        if (!$this->request->is('post')) {
            return view('product_item', [
                'product' => $product
            ]);
        }

        $rules = [
            'customerName' => 'required',
            'deliveryAddress' => 'required',
            'totalAmount' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[' . $product['stock'] . ']',
        ];
        $errors = [
            'customerName' => [
                'required' => 'Kolom nama harus diisi!',
            ],
            'deliveryAddress' => [
                'required' => 'Kolom alamat harus diisi!',
            ],
            'totalAmount' => [
                'required' => 'Kolom kuantitas pembelian harus diisi!',
                'greater_than_equal_to' => 'Pembelian tidak boleh kurang dari 0!',
                'less_than_equal_to' => 'Pembelian tidak boleh melebihi stok!'
            ],
        ];

        if (!$this->validate($rules, $errors)) {
            return view('product_item', [
                'product' => $product,
            ]);
        }

        $validData = $this->validator->getValidated();
        model(Order::class)->placeOrder($id, $validData['customerName'], $validData['deliveryAddress'], $validData['totalAmount']);

        return redirect('/')->with('success', 'Order berhasil dipesan!');
    }
}
