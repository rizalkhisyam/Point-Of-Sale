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

Auth::routes();

Route::get('/home', 'HomeController@dashboard');
Route::get('/admins','AdminController@index');
Route::get('/tambahData','AdminController@karyawan');
Route::get('/tambahDataBarang','BarangController@dataBarang');
Route::get('/dataTransaksi','TransaksiController@lihatDataTransaksi');
Route::post('/tambahBarang','BarangController@tambahBarang');
Route::post('/addKaryawan', 'KaryawansController@store');
Route::post('/updateBarang/{id}','BarangController@updateBarang');
Route::post('/hapusBarang/{id}','BarangController@hapusBarang');
