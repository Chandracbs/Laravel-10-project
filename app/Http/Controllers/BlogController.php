<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        // $user_id = Auth::user()->id;
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        // $user_id = Auth::user()->id;
        return view('blog.create', compact('categories'));
    }

    public function store(Request $request)
    {

    //    Blog::create($request->all());
       // return redirect()->route('index')->with('success', 'User added successfully');

        Blog::create(
            [
                'title'=>$request->title,
                'slug'=>$request->slug,
                'description'=>$request->description,
                'category_id'=>$request->category_id,
                'user_id'=>Auth::user()->id,
            
            ]
        );
        
        

        return redirect()->route('index')->with('success', 'User added successfully');
    }

    public function show(string $id)
    {
        $blogs = Blog::findOrFail($id);
        return view('blog.show', compact('blogs'));
    }

    public function edit(string $id)
    {
        $blogs = Blog::findOrFail($id);
        return view('blog.edit', compact('blogs'));
        
    }

    public function update(Request $request, string $id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->update([
                'title'=>$request->title,
                'slug'=>$request->slug,
                'description'=>(!is_null($request->description) ? $request->description : ""),
                'last_updated_by'=>Auth::user()->id,
        ]);
        return redirect()->route('index')->with('success', 'User updated successfully');
    }

    public function destroy(string $id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        return redirect()->route('index')->with('success', 'User deleted successfully');
    }

}
