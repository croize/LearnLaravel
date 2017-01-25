<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
	return ('Hello World');
});

Route::get('/hitungumur', function(){
	return ('<form action="proses" method="post">
			Masukan umur :  <br>
			<input type="text" name="umur">
			<input type="submit" value="send">
	</form>');
});

Route::get('/profil', function(){
	return view('profil');
});

Route::get('/produk/{jenis}', function($jenis){
	return view('produk.detail'); //namafolder.namafile
});
Route::get('input', 'NilaiController@input');
Route::post('proses', 'NilaiController@proses');