<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;
use Exception;

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
        // dd("dshkasdhadsh");
        $model = model(Product::class);
        $product = $model->getProductById($id);

        $client = \Config\Services::curlrequest();

        try {
            $response_tanaman = $client->request('GET',
                getenv('TANAMANKU_API_URL').'TanamankuAPI/plants/'. getenv('TANAMANKU_API_SECRET_EMAIL').'/'. getenv('TANAMANKU_API_SECRET_PASSWORD')
            )->getJSON();
            $response_tanaman = json_decode($response_tanaman);
            $response_tanaman = json_decode($response_tanaman, true);
            $tanamanId = null;
            foreach ($response_tanaman['plants'] as $plant) {
                if ($plant['namaTanaman'] == $product['name']) {
                    $tanamanId = $product['id'];
                }
            }
            if (is_null($tanamanId)) {
                $quality = 'unknown';
            } else {
                $response_detail_tanaman = $client->request('GET',
                getenv('TANAMANKU_API_URL').'TanamankuAPI/plants/'. getenv('TANAMANKU_API_SECRET_EMAIL').'/'. getenv('TANAMANKU_API_SECRET_PASSWORD').'/'.$tanamanId
                )->getJSON();
                $response_detail_tanaman = json_decode($response_detail_tanaman);
                $response_detail_tanaman = json_decode($response_detail_tanaman, true);
                $quality = 'unknown';
                $quality = $response_detail_tanaman['plants']['quality'];
            }
        } catch (Exception $e) {
            $quality = 'unknown';
        }


        if (!$this->request->is('post')) {
            return view('admin_product_item', [
              'product' => $product,
              'quality' => $quality
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

        try {
            $response_tanaman = $client->request('GET',
                getenv('TANAMANKU_API_URL').'TanamankuAPI/plants/'. getenv('TANAMANKU_API_SECRET_EMAIL').'/'. getenv('TANAMANKU_API_SECRET_PASSWORD')
            )->getJSON();
            $response_tanaman = json_decode($response_tanaman);
            $response_tanaman = json_decode($response_tanaman, true);
        } catch (Exception $e) {
            return redirect('admin/product')->with('error', 'Tidak bisa connect ke server Tanamanku. Pastikan Tanamanku sudah jalan!');
        }

        $tanamanId = null;
        foreach ($response_tanaman['plants'] as $plant) {
            if ($plant['namaTanaman'] == $product['name']) {
                $tanamanId = $product['id'];
            }
        }

        if (is_null($tanamanId)) {
            session()->setFlashdata('error', 'Tanaman ' . $product['name'] . ' tidak ada di Tanamanku.');
            return redirect('admin/product');
        }

        $response_request = $client->request('POST', 
            getenv('TANAMANKU_API_URL').'TanamankuAPI/requests/'. getenv('TANAMANKU_API_SECRET_EMAIL').'/'. getenv('TANAMANKU_API_SECRET_PASSWORD'), 
            ['json' => [
                'nama_requester' => 'Greenbox',
                'quantity' => $quantity,
                'tanamanId' => $tanamanId,
            ]]);

        return redirect('admin/product')->with('success', 'Produk '.$product['name'].' sudah di-request sebanyak '.$quantity.' tanaman. Mohon ditunggu!');
    }
}
