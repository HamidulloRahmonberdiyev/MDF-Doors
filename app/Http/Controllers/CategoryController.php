<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('frontend.products.index')->with([
            'products' => Product::where('category_id', $category->id)->paginate(6),
            'categories' => Category::all(),
        ]);
    }
}
