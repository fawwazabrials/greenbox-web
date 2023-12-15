<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Procurement;

class AdminProcurementController extends BaseController
{
    public function index()
    {
        $model = model(Procurement::class);
        $procurementData = $model->getProcurements();

        $data = [
            "procurements" => $procurementData,
        ];

        return view('admin_procurement', $data);
    }
}
