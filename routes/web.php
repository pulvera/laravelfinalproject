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
    return view('index');
});
Route::get('delete', function () {
    return view('delete');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/SQLConnect', function () {
    return view('SQLConnect');
});
Route::get('/update', function () {
    return view('update');
});
Route::get('/adduser', function () {
    return view('adduser');
});
Route::get('/successadd', function () {
    return view('successadd');
});






