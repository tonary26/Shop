<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        echo $products . '<br>';
    }

    public function add() {
        $newProduct = DB::table('products')->upsert(
            [
                [
                    'title' => 'Кириешки епта',
                    'description' => 'оЧЕНЬ ОЧЕНЬ ВКУСНЫЕ КИРИЕШКИ',
                    'price' => 1300
                ]
            ],

            ['title'], ['title', 'description']);
    }

    public function update() {
        $product = Product::find(1);
        $product->update(
            [
                'title' => 'GHJKD',
                'price' => 1200000
            ]
        );
        dd('Update');
    }

    public function delete() {
        $product = Product::find(1);
        $product->delete();
        dd('deleted');
    }
}
