<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $Category = Category::paginate(5);
        return view('admin.category.category', compact('Category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $Category = new Category();
        $Category->name = $request->name;
        $Category->save();
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $Category = Category::findOrFail($id);
        return view('admin.category.edit', compact('Category'));
    }

    public function update($id, Request $request)
    {
        $Category = Category::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $Category->name = $request->name;
        $Category->save();
        return redirect()->route('categories.index');
    }

    public function destroy($id){
        $Category = Category::findOrFail($id);
        $Category->delete();
        return redirect()->route('categories.index');
    }
}
