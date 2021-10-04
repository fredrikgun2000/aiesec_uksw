<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Privasi\AdminDepartmentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/admin/department/departmentdata', [AdminDepartmentController::class,'department_departmentdata']);

Route::get('/admin/department/lcvpdata', [AdminDepartmentController::class,'department_lcvpdata']);

Route::post('/admin/department/submitdata', [AdminDepartmentController::class,'department_submitdata']);

Route::post('/admin/department/hapusdata', [AdminDepartmentController::class,'department_hapusdata']);
