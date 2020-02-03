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

use App\Http\Controllers\MahasiswaController;
// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'MahasiswaController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('index');

Route::get('/create', 'HomeController@create')->name('create');
Route::POST('/createproses', 'HomeController@store')->name('store');

Route::get('/edit/{mahasiswa}', 'HomeController@edit')->name('edit');
Route::patch('/update/{mahasiswa}', 'HomeController@update')->name('update');
Route::delete('/delete/{mahasiswa}', 'HomeController@destroy')->name('delete');
