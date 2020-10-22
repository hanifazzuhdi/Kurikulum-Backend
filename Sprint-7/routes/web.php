<?php

use App\Http\Controllers\ProductController;
use App\Product;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route admin
// Route::get('/admin', 'ProductController@index');
Route::get('/admin/create', 'ProductController@create')->name('create');
Route::get('/admin/{slug}', 'ProductController@show');

Route::get('/admin/{product}/edit', 'ProductController@edit')->name('edit');

Route::post('/admin', 'ProductController@store')->name('store');  // <-- FORM Tambah Data Baru
Route::put('/admin/{product}', 'ProductController@update');
Route::delete('/admin/{product}', 'ProductController@destroy');

// Route Auth
Auth::routes();

// halaman awal
Route::get('/home', 'HomeController@index')->name('home');
