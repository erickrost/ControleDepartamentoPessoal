<?php

namespace App\Controllers;

use App\Models\Employee;

class Home extends BaseController
{
    public function index(): string
    {
        $employeeModel = new Employee();
        $employees = $employeeModel->findAll();

        return view('home', ["employees" => $employees]);
    }
}
