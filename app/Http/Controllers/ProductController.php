<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request, $code)
    {
        $product = Product::where('code', $code)->first();

        if (!$product) {
            abort(404);
        }

        return view('product.show', compact('product'));
    }

    public function index(Request $request)
    {
        $products = Product::paginate(10); // Здесь 10 - количество товаров на странице

        return view('product.index', compact('products'));
    }
}
