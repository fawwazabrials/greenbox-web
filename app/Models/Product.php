<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table            = 'product';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;

    public function getAllProduct()
    {
        return $this->findAll();
    }

    public function getProductById(int $id)
    {
        return $this->find($id);
    }

    public function changeStock(int $id, int $newStock)
    {
        return $this->update($id, ['stock' => $newStock]);
    }

    public function addStock(int $id, int $added)
    {
        return $this->update($id, ['stock' => $this->getProductById($id)['stock'] + $added]);
    }

    public function changeDetail(int $id, int $price, string $description, string $description_kandungan, string $description_petunjuk_penyimpanan)
    {
        return $this->update($id, [
            'price' => $price,
            'description' => $description,
            'description_kandungan' => $description_kandungan,
            'description_petunjuk_penyimpanan' => $description_petunjuk_penyimpanan,
        ]);
    }
}
