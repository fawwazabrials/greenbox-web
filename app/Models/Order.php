<?php

namespace App\Models;

use CodeIgniter\Model;

class Order extends Model
{
    protected $table            = 'order';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    
    public function createOrder(int $productId, string $customerName, string $deliveryAddress, int $totalAmount) {
        $this->insert([
            'productId' => $productId,
            'customerName' => $customerName,
            'deliveryAddress' => $deliveryAddress,
            'totalAmount' => $totalAmount,
        ]);
    }

    public function placeOrder(int $productId, string $customerName, string $deliveryAddress, int $totalAmount) {
        $model = model(Product::class);
        $newStock = $model->getProductById($productId)['stock'] - $totalAmount;
        $model->changeStock($productId, $newStock);
        $this->createOrder($productId, $customerName, $deliveryAddress, $totalAmount);
    }
}
