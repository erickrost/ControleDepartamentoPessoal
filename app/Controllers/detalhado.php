<?php

namespace App\Controllers;

use App\Models\Employee;

class detalhado extends BaseController
{
    public function index(): string
    {
        $employeeModel = new Employee();
        $employee = $employeeModel->findAll();

        return view('detalhado', ["employees" => $employee]);
    }
}