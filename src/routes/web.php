<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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

//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('auth/login', function () {
 return view('login');   
})->middleware('auth');

Route::get('/fortify/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/loginmenu', function () {
    return view('loginmenu');
})->name('loginmenu')->middleware('guest');

Route::get('/logoutmenu', function () {
    return view('logoutmenu');
})->name('logoutmenu')->middleware('auth');

Route::get('/shop/register', [ShopController::class, 'showRegisterForm'])->name('shop.register.form');
Route::post('/shop/register', [ShopController::class, 'register'])->name('shop.register');