<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');


// Route Products Middleware didalam controller
Route::get('product', 'ProductController@index');
Route::get('product/{id}', 'ProductController@show');
Route::post('product', 'ProductController@store');
Route::put('product/{id}', 'ProductController@update');
Route::delete('product/{id}', 'ProductController@destroy');
