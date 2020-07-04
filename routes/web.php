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
    return view('larahub.pertanyaan.form');
});

//----------

Route::get('/data-tables', function () {
    return view('tugasBlade.dt');
});

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/items', function () {
    return view('items.index');
});

//----------

Route::get('/pertanyaan', 'PertanyaanController@index');            //daftar pertanyaan
Route::get('/pertanyaan/create', 'PertanyaanController@create');    //form pertanyaan
Route::post('/pertanyaan', 'PertanyaanController@store');           //buat pertanyaan
//Route::get('/pertanyaan/{id}', 'PertanyaanController@detail');
Route::get('/jawaban/{id}', 'JawabanController@index');             //daftar jawaban di 1 pertanyaan (nnti diganti ke /pertanyaan{id})
Route::get('/jawaban/create/{id}', 'JawabanController@create');     //form jawaban (id pertanyaan) [nanti diganti dengan /jawaban/{id}]
Route::post('/jawaban/{id}', 'JawabanController@store');            //buat jawaban (id pertanyaan)