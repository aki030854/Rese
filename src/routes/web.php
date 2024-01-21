<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\GenreController;
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

//Route::get('/register', [UserController::class, 'register'])
   // ->middleware(['guest'])
    //->name('register');

Route::get('/thanks', [UserController::class, 'afterRegistration']);

//Route::get('auth/login', function () {
 //return view('login');   
//})->middleware('auth');

//Route::get('/fortify/logout', [AuthenticatedSessionController::class, 'destroy'])
  //  ->name('logout');
Route::get('/area', [AreaController::class, 'create'])->name('area.create');
Route::post('/area', [AreaController::class, 'store'])->name('area.store');

Route::get('/genre', [GenreController::class, 'create'])->name('genre.create');
Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');

Route::get('/loginmenu', function () {
    return view('loginmenu');
})->name('loginmenu')->middleware('guest');

Route::get('/logoutmenu', function () {
    return view('logoutmenu');
})->name('logoutmenu')->middleware('auth');

Route::get('/shop-register', [ShopController::class, 'showRegisterForm'])->name('shop.register.form');
Route::post('/shop-register', [ShopController::class, 'register'])->name('shop.register');