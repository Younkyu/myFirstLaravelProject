<?php

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

Route::get('/', 'MainController@intro');

Route::get('/process', function () {
    return view('welcome');
});

Route::get('/youngbin', function () {
    return view('welcome');
});

Route::get('/practice', function () {
    return view('practice');
});