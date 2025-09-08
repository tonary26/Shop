<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;


class Products extends Controller
{
    public function index() {
        $product = Product::find(1);
        return $product->title;
    }
}
