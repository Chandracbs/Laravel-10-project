<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('created_at', 'ASC')->get();
        return view('user.index',compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function show(string $id)
    {
        $users = User::findOrFail($id);
        return view('user.show',compact('users'));
    }

    public function store(Request $request)
    {

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->route('index2')->with('success', 'User added successfully');
    }



    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('user.edit',compact('users'));
    }


    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);
        $users->update($request->all());
        return redirect()->route('index2')->with('success','User updated successfully');
    }


    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('index2')->with('success','User deleted successfully');
    }
}
