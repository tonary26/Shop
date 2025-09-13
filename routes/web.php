<?php

namespace Routes\web;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


Route::get('/', function() {
    return 'Home page';
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/add', [ProductController::class, 'add']);

Route::get('/products/update', [ProductController::class, 'update']);

Route::get('/products/delete', [ProductController::class, 'delete']);

