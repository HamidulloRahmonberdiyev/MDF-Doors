<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.products.index')->with([
            'products' => Product::latest()->paginate(6),
            'categories' => Category::all(),
        ]);
    }

    public function show(Product $product)
    {
        return view('frontend.products.show')->with([
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }
}
