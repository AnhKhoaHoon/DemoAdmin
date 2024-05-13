<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::middleware('check_login')->group(function(){
  Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard',[DashBoardController::class,'dashboard'])->name('dashboard');
    Route::get('/create/product',[ProductController::class,'CreateProduct'])->name('create.product');
    Route::post('/store/product',[ProductController::class,'StoreProduct'])->name('store.product');
    //19-04-2024
    Route::get('/index/product',[ProductController::class,'IndexProduct'])->name('index.product');
    //20-04-2024
    Route::get('/edit/product/{id}',[ProductController::class,'EditProduct'])->name('edit.product');
    Route::post('/update/product',[ProductController::class,'UpdateProduct'])->name('update.product');
    //21-04-2024
    Route::get('/delete/product/{id}',[ProductController::class,'DeleteProduct'])->name('delete.product');
    
    //22-04-2024 Category
    Route::get('/create/category',[CategoryController::class,'CreateCategory'])->name('create.category');
    Route::post('/store/category',[CategoryController::class,'StoreCategory'])->name('store.category');

    Route::get('/index/category',[CategoryController::class,'IndexCategory'])->name('index.category');

    Route::get('/edit/category/{id}',[CategoryController::class,'EditCategory'])->name('edit.category');
    Route::post('/update/category',[CategoryController::class,'UpdateCategory'])->name('update.category');

    Route::get('/delete/category/{id}',[CategoryController::class,'DeleteCategory'])->name('delete.category');
    
});
});