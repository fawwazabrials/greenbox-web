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
    
    public function createOrder(string $customerName, string $deliveryAddress, int $totalAmount) {
        $this->insert([
            'customerName' => $customerName,
            'deliveryAddress' => $deliveryAddress,
            'totalAmount' => $totalAmount,
        ]);
    }
}
