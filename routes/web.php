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
Route::get('/', 'PertanyaanController@index');
Route::get('/pertanyaan', 'PertanyaanController@index');            //daftar pertanyaan
Route::get('/pertanyaan/create', 'PertanyaanController@create');    //form pertanyaan
Route::post('/pertanyaan', 'PertanyaanController@store');           //buat pertanyaan
Route::get('/pertanyaan/{id}', 'JawabanController@index');          //daftar jawaban 
Route::get('/jawaban/{id}', 'JawabanController@index');             //daftar jawaban  
Route::get('/jawaban/create/{id}', 'JawabanController@create');     //form jawaban (id pertanyaan) 
Route::post('/jawaban/{id}', 'JawabanController@store');            //buat jawaban (id pertanyaan)
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');   //tampil form update pertanyaan
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');      //submit form pertanyaan 
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');   //hapus pertanyaan