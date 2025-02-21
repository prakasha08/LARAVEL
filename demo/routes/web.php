<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/employees',[EmployeeController::class,'index']);
Route::get('/employees/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employees/store',[EmployeeController::class,'store'])->name("employee.store");
