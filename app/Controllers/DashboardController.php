<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class DashboardController extends BaseController
{
    public function index()
    {
        // $model = new EmployeeModel();
        // $data['records'] = $model->findAll(); // Fetch all records

        return view('pages/dashboard');
    }
}
