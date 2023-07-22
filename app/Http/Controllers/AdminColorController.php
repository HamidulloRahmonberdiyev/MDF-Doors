<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminColorController extends Controller
{
    public function index()
    {
        return view('backend.colors.index')->with([
            'colors' => Color::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.colors.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $path = $request->file('image')->store('colors', 'public');

        Color::create([
            'name' => $request->name,
            'image' => $path,
        ]);

        return redirect()->route('colors.index')->with('status', "Rang yaratildi!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Color $color)
    {
        return view('backend.colors.edit')->with([
            'color' => $color,
        ]);
    }

    public function update(StoreCategoryRequest $request, Color $color)
    {
        if (isset($color->image)) {
            Storage::delete('public/' . $color->image);
        }
        $path = $request->file('image')->store('colors', 'public');

        $color->update([
            'name' => $request->name,
            'image' => $path,
        ]);

        return redirect()->route('colors.index')->with('status', "Rangdagi o'zgarishlar saqlandi!");
    }

    public function destroy(Color $color)
    {
        if (isset($color->image)) {
            Storage::delete('public/' . $color->image);
        }
        $color->delete();

        return redirect()->route('colors.index')->with('status', "Rang o'chirildi!");
    }
}
