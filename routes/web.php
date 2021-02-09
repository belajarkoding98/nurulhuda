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
    return view('ppdb/calonsiswa/index');
});
Route::get('/login', function () {
    return view('ppdb/calonsiswa/login');
});
Route::get('/forgot-password', function () {
    return view('ppdb/calonsiswa/forgotpassword');
});
Route::get('/register', function () {
    return view('ppdb/calonsiswa/register');
});