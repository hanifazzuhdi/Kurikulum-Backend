<?php

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


// Route Admin
Route::get('/admin/settings', function () {
    return view('admin.settings');
})->middleware('auth');

Route::redirect('/home', '/admin', 301)->middleware('auth');

Route::get('/admin', 'BeritaController@index')->middleware('auth');
Route::get('/admin/create', 'BeritaController@create')->middleware('auth');
Route::get('/admin/{slug}', 'BeritaController@show')->middleware('auth');
Route::post('/admin/store', 'BeritaController@store')->middleware('auth');
Route::get('/admin/{berita}/edit', 'BeritaController@edit')->middleware('auth');
Route::put('/admin/{berita}', 'BeritaController@update')->middleware('auth');
Route::delete('/admin/{berita}', 'BeritaController@destroy')->middleware('auth');

Route::post('/admin/tambahTag', 'BeritaController@storeTag')->middleware('auth');

// Route Pages
Route::get('/', 'PagesController@index');
Route::get('/pages/all', 'PagesController@all');
Route::get('/pages/{slug}', 'PagesController@show');
Route::get('/kategori/{tag}', 'PagesController@find');
Route::post('/pages/search', 'PagesController@search');


// Route Auth
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
