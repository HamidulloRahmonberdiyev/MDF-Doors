<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('backend.categories.index')->with([
            'categories' => Category::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $path = $request->file('image')->store('categories', 'public');

        Category::create([
            'name' => $request->name, 
            'image' => $path, 
        ]);

        return redirect()->route('categories.index')->with('status', "Kategoriya yaratildi!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('backend.categories.edit')->with([
            'category' => $category,
        ]);
    }

    public function update(StoreCategoryRequest $request, Category $category)
    {
        if (isset($category->image)) {
            Storage::delete('public/' . $category->image);
        }
        $path = $request->file('image')->store('categories', 'public');

        $category->update([
            'name' => $request->name, 
            'image' => $path, 
        ]);

        return redirect()->route('categories.index')->with('status', "Kategoriyadagi o'zgarishlar saqlandi!");
    }

    public function destroy(Category $category)
    {
        if (isset($category->image)) {
            Storage::delete('public/' . $category->image);
        }
        $category->delete();

        return redirect()->route('categories.index')->with('status', "Kategoriya o'chirildi!");
    }
}
