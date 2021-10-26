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

// Route::get('/', function () {
//     return view('master');
// });

Route::get('/produk1', 'DashboardController@produk1')->name('produk1');
Route::get('/', 'DashboardController@beranda')->name('beranda');
//jenisproduk
Route::get('jenisproduk', 'JenisProdukController@index')->name('jenisproduk');
Route::get('jenisproduk/create', 'JenisProdukController@create')->name('createJenisProduk');
Route::post('jenisproduk/store', 'JenisProdukController@store')->name('storeJenisProduk');
Route::get('jenisproduk/edit/{id}', 'JenisProdukController@edit')->name('editJenisProduk');
Route::post('jenisproduk/update/{id}', 'JenisProdukController@update')->name('updateJenisProduk');
Route::get('jenisproduk/delete/{id}', 'JenisProdukController@destroy')->name('deleteJenisProduk');

//produk
Route::get('produk', 'ProdukController@index')->name('produk');
Route::get('produk/create', 'ProdukController@create')->name('createProduk');
Route::post('produk/store', 'ProdukController@store')->name('storeProduk');
Route::get('produk/edit/{id}', 'ProdukController@edit')->name('editProduk');
Route::post('produk/update/{id}', 'ProdukController@update')->name('updateProduk');
Route::get('produk/delete/{id}', 'ProdukController@destroy')->name('deleteProduk');
Auth::routes();

//persewaan
Route::get('persewaan', 'PersewaanController@index')->name('persewaan');

//sistem user
Route::get('sistemUser', 'SistemUserController@index')->name('sistemUser');

Route::get('/home', 'HomeController@index')->name('home');
