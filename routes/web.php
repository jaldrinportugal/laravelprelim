<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderDetailController;
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


//Route::get('/', function () {
  //  return view('index');
    
//});

Route::get('/',[ProductController::class,'index'])->name('product');

Route::get('/supplier',[SupplierController::class,'index'])->name('supplier');
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/order',[OrderController::class,'index'])->name('order');
Route::get('/customer',[CustomerController::class,'index'])->name('customer');
Route::get('/orderdetail',[OrderDetailController::class,'index'])->name('orderdetail');


