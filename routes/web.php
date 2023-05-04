<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Blog;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});


//AuthController Category->Authen
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register_submit',[AuthController::class,'register_submit'])->name('register_submit');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login_submit',[AuthController::class,'login_submit'])->name('login_submit');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');


//UserController CRUD->User
Route::get('index2',[UserController::class,'index'])->name('index2');
Route::get('create2',[UserController::class,'create'])->name('create2');
Route::get('{id}/show2',[UserController::class,'show'])->name('show2');
Route::get('{id}/edit2',[UserController::class,'edit'])->name('edit2');
Route::post('store2',[UserController::class,'store'])->name('store2');
Route::delete('{id}/destroy2',[UserController::class,'destroy'])->name('destroy2');
Route::put('{id}/update2',[UserController::class,'update'])->name('update2');


// CategoryController CRUD->Category
Route::get('index1',[CategoryController::class,'index'])->name('index1');
Route::get('create1',[CategoryController::class,'create'])->name('create1');
Route::get('{id}/show1',[CategoryController::class,'show'])->name('show1');
Route::get('{id}/edit1',[CategoryController::class,'edit'])->name('edit1');
Route::post('store1',[CategoryController::class,'store'])->name('store1');
Route::delete('{id}/destroy1',[CategoryController::class,'destroy'])->name('destroy1');
Route::put('{id}/update1',[CategoryController::class,'update'])->name('update1');


// BlogController CRUD->Blog
Route::get('index',[BlogController::class,'index'])->name('index');
Route::get('create',[BlogController::class,'create'])->name('create');
Route::get('{id}/show',[BlogController::class,'show'])->name('show');
Route::get('{id}/edit',[BlogController::class,'edit'])->name('edit');
Route::post('store',[BlogController::class,'store'])->name('store');
Route::delete('{id}/destroy',[BlogController::class,'destroy'])->name('destroy');
Route::put('{id}/update',[BlogController::class,'update'])->name('update');

