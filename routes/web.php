<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EmployeeController::class, 'index'])->name('/');
Route::get('/employee-details/{id}', [EmployeeController::class, 'show'])->name('/employee-details');
Route::get('/add-employee', [EmployeeController::class, 'create'])->name('/add-employee');
Route::post('/store-employee', [EmployeeController::class, 'store'])->name('/store-employee');
Route::get('/edit-employee/{id}', [EmployeeController::class, 'edit'])->name('/edit-employee');
Route::post('/update-employee/{id}', [EmployeeController::class, 'update'])->name('/update-employee');
Route::get('/delete-employee/{id}', [EmployeeController::class, 'destroy'])->name('/delete-employee');
Route::get('/search-employee', [EmployeeController::class, 'search'])->name('/search-employee');