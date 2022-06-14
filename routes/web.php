<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title"=>"Home",
        "active"=>"home"
    ]);
});

Route::get('/products', [ProductController::class,'index'])->middleware('auth');

Route::get('/products/create', [ProductController::class,'create'])->middleware('auth');

Route::post('/products', [ProductController::class,'store']);

Route::get('/products/{id}/edit', [ProductController::class,'edit'])->middleware('auth');

Route::put('/products/{id}', [ProductController::class,'update'])->middleware('auth');

Route::delete('/products/{id}', [ProductController::class,'destroy']);


//login

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//dashboard
Route::get('/about', [DashboardController::class , 'about'])->middleware('auth');;
Route::get('/kontak', [DashboardController::class, 'kontak'])->middleware('auth');

 // profil
 Route::get('/profil', [UserController::class, 'index'])->middleware('auth');
 // setting profil
 Route::get('/editprofil', [UserController::class, 'edit'])->middleware('auth');
 Route::put('/editprofil', [UserController::class,'update'])->middleware('auth');

 //kategori
 Route::resource('/kategori', KategoriController::class);



Route::get('/order', [OrderController::class,'index']);

Route::post ('/order', [OrderController::class,'pesan'] );













