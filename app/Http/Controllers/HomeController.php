<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role']);
    }

    public function index()
    {
        return view('home')->with([
            'users' => User::all(),
            'categories' => Category::all(),
            'products' => Product::all(),
            'colors' => Color::all(),
        ]);
    }
}
