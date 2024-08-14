<?php

namespace App\Controllers;

use App\Models\Employee;

class Detalhado extends BaseController
{
    public function index(): string
    {
        $employeeModel = new Employee();
        $employees = $employeeModel->findAll();

        return view('detalhado', ["employees" => $employees]);
    }
}