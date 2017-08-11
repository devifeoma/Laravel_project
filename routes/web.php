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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sign_up', function () {
    return view('sign_up');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/upload', 'ImageController@index')->name('upload');
Route::post('/upload', 'ImageController@index')->name('upload');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
