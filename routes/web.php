<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Products;


Route::get('/', function() {
    return 'Home page';
});

Route::get('/products', [Products::class, 'index']);
