<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main')->with([
            'categories' => Category::all(),
            'products' => Product::latest()->take(8)->get(),
        ]);
    }
}
