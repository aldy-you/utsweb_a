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

Route::get('/kelompoka', 'Acontroller@index');
Route::get('/kelompoka/tambah', 'Acontroller@tambah');
Route::post('/kelompoka/store', 'Acontroller@store');
Route::get('/kelompoka/edit/{id}', 'Acontroller@edit');
Route::put('/kelompoka/update/{id}', 'Acontroller@update');
Route::get('/kelompoka/hapus/{id_a}', 'Acontroller@hapus');
