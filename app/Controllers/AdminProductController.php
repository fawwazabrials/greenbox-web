<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class AdminProductController extends BaseController
{
    protected $helpers = ['form'];

    public function index() {
        $model = model(Product::class);
        $data = [
          'products' => $model->orderBy('stock', 'asc')->paginate(6),
          'pager' => $model->pager,
        ];
        
        return view('admin_product_list', $data);
    }

    public function show(int $id = null) {
        $model = model(Product::class);
        $product = $model->getProductById($id);

        if (!$this->request->is('post')) {
            return view('admin_product_item', [
              'product' => $product
          ]);
        }
    }

    public function editProductDetail(int $id = null) {
        $model = model(Product::class);
        $product = $model->getProductById($id);

        $rules = [
            'price' => 'required',
            'description' => 'required',
            'description_kandungan' => 'required',
            'description_petunjuk_penyimpanan' => 'required',
        ];
        $errors = [
            'price' => [
                'required' => 'Kolom harga harus diisi!',
            ],
            'description' => [
                'required' => 'Kolom deskripsi harus diisi!',
            ],
            'description_kandungan' => [
                'required' => 'Kolom kandungan dan nutrisi harus diisi!',
            ],
            'description_petunjuk_penyimpanan' => [
                'required' => 'Kolom petunjuk penyimpanan harus diisi!',
            ],
        ];

        if (!$this->validate($rules, $errors)) {
            return view('admin_product_item', [
              'product' => $product
          ]);
        }

        $validData = $this->validator->getValidated();
        $model->changeDetail($id, $validData['price'], $validData['description'], $validData['description_kandungan'], $validData['description_petunjuk_penyimpanan']);

        return redirect('admin/product')->with('success', 'Produk berhasil diubah!');
    }

    public function requestPlant(int $id = null) {
        $model = model(Product::class);
        $product = $model->getProductById($id);

        $quantity = $this->request->getPost('quantity');

        // dd(getenv('TANAMANKU_API_URL').'TanamankuAPI/requests/'. getenv('TANAMANKU_API_SECRET_EMAIL').'/'. getenv('TANAMANKU_API_SECRET_PASSWORD'));
        $client = \Config\Services::curlrequest();
        $response = $client->request('POST', 
            getenv('TANAMANKU_API_URL').'TanamankuAPI/requests/'. getenv('TANAMANKU_API_SECRET_EMAIL').'/'. getenv('TANAMANKU_API_SECRET_PASSWORD'), 
            ['json' => [
                'nama_requester' => 'Greenbox',
                'quantity' => $quantity,
                'tanamanId' => 1,
            ]]);

        return redirect('admin/product')->with('success', 'Pesanan berhasil dipesan!');
    }
}
