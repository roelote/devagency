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
    return redirect('/login');
});


Route::get('/file', 'FileController@index')->name('file.index');
Route::get('/file/create', 'FileController@create')->name('file.create');
Route::get('/file/{code}', 'FileController@show')->name('file.show');


Route::get('/file-pdf/{code}', 'FileController@exportPdf')->name('file.pdf');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
