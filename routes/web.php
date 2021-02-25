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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/hidroponik', function () {
    return view('hidroponik');
});
Route::get('/pengolahan_limbah', function () {
    return view('pengolahan_limbah');
});
Route::get('/waroengceuipa', function () {
    return view('waroengceuipa');
});
Route::get('/peternakan', function () {
    return view('peternakan');
});