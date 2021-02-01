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
    return view('sikadu/index');
});

Route::get('/login', function () {
    return view('index');
});

// Route::get('/about', function () {
//     $nama = "Ponpes Nurul Huda Kertawangunan";
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/', 'PagesController@home');
// Route::get('/about', 'PagesController@about');
Route::get('/siswa-smpit', 'SiswaController@siswa_smpit');
Route::get('/siswa-sdit', 'SiswaController@siswa_sdit');
Route::get('/siswa-paud', 'SiswaController@siswa_paud');

// ROUTES SISWA MA
Route::get('/siswa-ma', 'SiswaController@index_siswa_ma');
Route::get('/siswa-ma/create/', 'SiswaController@create_siswa_ma');
Route::get('/siswa-ma/{id}', 'SiswaController@show_siswa_ma');
Route::post('/siswa-ma', 'SiswaController@store_siswa_ma');
Route::delete('/siswa-ma/{id}', 'SiswaController@destroy_siswa_ma');