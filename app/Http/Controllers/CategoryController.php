<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function show(Request $request, $categoryCode)
    {
        $category = Category::where('code', $categoryCode)->firstOrFail();

        if (!$category->active) {
            abort(404);
        }

        $minPrice = $request->query('min_price');
        $maxPrice = $request->query('max_price');

        $products = $category->products()
            ->when($minPrice, function ($query) use ($minPrice) {
                return $query->where('price', '>=', $minPrice);
            })
            ->when($maxPrice, function ($query) use ($maxPrice) {
                return $query->where('price', '<=', $maxPrice);
            })
            ->paginate(10); // Здесь 10 - количество товаров на странице

        return view('category.show', compact('category', 'products'));
    }
}
