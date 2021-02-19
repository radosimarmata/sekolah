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

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/lihatdata', 'crud@index')->name('lihatdata');

Route::get('/siswa','SiswaController@index');
Route::get('/siswa/tambah','SiswaController@tambah');
Route::post('/siswa/kursus','SiswaController@kursus');
Route::get('/siswa/edit/{id}','SiswaController@edit');
Route::post('/siswa/update','SiswaController@update');
Route::get('/siswa/hapus/{id}','SiswaController@hapus');