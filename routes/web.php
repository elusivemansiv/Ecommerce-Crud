<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
    return view('home');
});



Route::get('/login', [CustomAuthController::class,'login'])->name('login');
Route::post('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');

Route::get('/dashboard', [CustomAuthController::class,'dashboard']);

Route::get('/registration', [CustomAuthController::class,'registration'])->name('registration');
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');

Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');

Route::get('/addProduct',[CustomAuthController::class,'addProduct'])->name('addProduct');
Route::post('/product-user', [CustomAuthController::class,'productUser'])->name('product-user');

Route::get('/productList',[CustomAuthController::class,'viewProduct'])->name('productList');