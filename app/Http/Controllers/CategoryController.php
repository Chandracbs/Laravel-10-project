<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return view('category.index',compact('categories'));
    }


    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('index1')->with('success', 'User added successfully');
    }


    public function show(string $id)
    {
        $categories = Category::findOrFail($id);
        return view('category.show',compact('categories'));
    }


    public function edit(string $id)
    {
        $categories = Category::findOrFail($id);
        return view('category.edit',compact('categories'));
    }


    public function update(Request $request, string $id)
    {
        $categories = Category::findOrFail($id);
        $categories->update($request->all());
        return redirect()->route('index1')->with('success','User updated successfully');
    }


    public function destroy(string $id)
    { 
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('index1')->with('success','User deleted successfully');
    }
}
