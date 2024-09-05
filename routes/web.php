<?php

use App\Http\Controllers\beliController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/user',[UserController::class, 'user']);
Route::post('/auth', [UserController::class,'auth']);
Route::get('/user/shop/{id}',[UserController::class,'shop']);
Route::get('/user/create',[UserController::class,'create']);
Route::get('/user/co/{id}',[UserController::class,'show']);
Route::get('/user/keranjang',[UserController::class,'keranjang']);
Route::get('/user/checkout',[UserController::class,'checkout']);
Route::get('ceckout',[UserController::class,'ceckout']);


Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/cart','CartController@store')->name('cart.store');
Route::get('/cart{id}','CartController@destroy')->name('cart.destory');
