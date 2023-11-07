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
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, selamat datang di laravel";
});

Route::get('/halo2', function () {
    return "<h1> Halooo Apa Kabar <h1>";

});

Route::get('list_tugas', function () {
	return view('list_tugas');
});
Route::get('pertemuan_1', function () {
	return view('pertemuan_1');
});
Route::get('pertemuan_2', function () {
	return view('pertemuan_2');
});
Route::get('pertemuan_2_2', function () {
	return view('pertemuan_2_2');
});
Route::get('pertemuan_3', function () {
	return view('pertemuan_3');
});
Route::get('pertemuan_4', function () {
	return view('pertemuan_4');
});
Route::get('pertemuan_5', function () {
	return view('pertemuan_5');
});
Route::get('pertemuan_6', function () {
	return view('pertemuan_6');
});
Route::get('pertemuan_6_2', function () {
	return view('pertemuan_6_2');
});
Route::get('pertemuan_7', function () {
	return view('pertemuan_7');
});
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
