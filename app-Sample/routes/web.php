<?php
// use App\Http\Controllers\Auth\Registercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\Auth\Logincontroller;


// Route::view('register','auth.register');
// Route::post("store",[Registercontroller::class,'store']);
Route::get("/",[ProductController::class,'index']);
// Route::view('login','auth.login');
// Route::post('authenticate',[Logincontroller::class,'authenticate']);
Route::get("products/create",[ProductController::class,'create']);
Route::post("products/store",[ProductController::class,'store']);
Route::get("products/show/{id}",[ProductController::class,'show']);
Route::get("products/edit/{id}",[ProductController::class,'edit']);
Route::put("products/update/{id}",[ProductController::class,'update']);
Route::get("products/delete/{id}",[ProductController::class,'destroy']);
// Route::get('logout',[Logincontroller::class,'logout']);
// Route::view("register",'auth.register');
// // Route::view("home",'home');



