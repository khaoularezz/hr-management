<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;

Route::get('/', [DashboardController::class, 'index']);

Route::resource('departments', DepartmentController::class);
