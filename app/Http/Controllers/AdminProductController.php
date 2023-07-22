<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('backend.products.index')->with([
            'products' => Product::latest()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.products.create')->with([
            'categories' => Category::all(),
            'colors' => Color::all(),
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        $path = $request->file('image')->store('products', 'public');

        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'content' => $request->content,
            'image' => $path,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('product-images', 'public');
                Image::create([
                    'product_id' => $product->id,
                    'image' => $path,
                ]);
            }
        }

        if (isset($request->colors)) {
            foreach ($request->colors as $colors) {
                $product->colors()->attach($colors);
            }
        }

        return redirect()->route('products.index')->with('status', "Eshik qo'shildi!");
    }

    public function show(Product $product)
    {
        return view('backend.products.show')->with([
            'product' => $product,
        ]);
    }

    public function edit(Product $product)
    {
        return view('backend.products.edit')->with([
            'product' => $product,
            'categories' => Category::all(),
            'colors' => Color::all(),
        ]);
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        if (isset($product->image)) {
            Storage::delete('storage/' . $product->image);
        }
        $path = $request->file('image')->store('products', 'public');

        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'content' => $request->content,
            'image' => $path,
        ]);

        if ($request->hasFile('images')) {
            foreach ($product->images as $image) {
                $image->delete();
                Storage::delete('public/' . $image->image);
            }
            foreach ($request->file('images') as $image) {
                $path = $image->store('product-images', 'public');
                $images = Image::create([
                    'product_id' => $product->id,
                    'image' => $path,
                ]);
            }
        }

        if (isset($request->colors)) {
            if (isset($product->colors)) {
                DB::table('color_product')->where('product_id', $product->id)->delete();
            }
            foreach ($request->colors as $colors) {
                $product->colors()->attach($colors);
            }
        }

        return redirect()->route('products.index')->with('status', "O'zgartirishlar  saqlandi!");
    }

    public function destroy(Product $product)
    {
        if (isset($product->image)) {
            Storage::delete('public/' . $product->image);
            foreach ($product->images as $image) {
                $image->delete();
                Storage::delete('public/' . $image->image);
            }
        }
        $product->delete();

        return redirect()->route('products.index')->with('success', "Eshik o'chirildi!");
    }
}
