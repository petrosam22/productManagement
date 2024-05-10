<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
 
 






Route::controller(CategoryController::class)->group(function () {
    Route::get('create/form', 'create')->name('category.createForm');
    Route::post('category/store', 'store')->name('category.store');
 });



Route::controller(ProductController::class)->group(function () {
    Route::get('product/create/form', 'create')->name('product.createForm');
    Route::post('product/store', 'store')->name('product.store');
    Route::get('/', 'index')->name('product.index');
  });
