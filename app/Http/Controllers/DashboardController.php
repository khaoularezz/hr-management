<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'total_employees' => 0,
            'total_departments' => 0,
            'company_name' => 'HR Management System',
        ];

        return view('dashboard', $data);
    }
}
