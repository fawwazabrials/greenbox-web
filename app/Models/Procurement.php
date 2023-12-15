<?php

namespace App\Models;

use CodeIgniter\Model;

class Procurement extends Model
{
    protected $table            = 'procurement';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    
    public function getProcurements() {
        return $this->join('product', 'product.id = procurement.productId', 'left')->findAll();
    }
}
