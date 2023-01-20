<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;

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


//Login
Route::get('/', function () {
    return view('login',[
        'title' => 'Login'
    ]);
});
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

//Registrasi
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);


//dashboard
Route::get('/dashboard',function(){
    return view('/dashboard.index',[
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

//CRUDbarang
Route::resource('/dashboard/barang',BarangController::class)->middleware('auth');

//CRUDSupplier
Route::resource('/dashboard/supplier',SupplierController::class)->middleware('auth');
