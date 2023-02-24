<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    //Artikel Route
    Route::get('/homeArtikel', 'homeArtikelController@index')->name('homeArtikel.index');
    Route::get('/artikel', 'artikelController@index')->name('artikel.index');
    Route::post('/artikel/create', 'artikelController@create')->name('artikel.create');
    Route::get('/artikel/{id}/edit', 'artikelController@edit')->name('artikel.edit');
    Route::put('/artikel/update/{id}', 'artikelController@update')->name('artikel.update');
    Route::get('/artikel/{id}', 'artikelController@destroy')->name('artikel.destroy');

    //Kategori Route
    Route::get('/homeKategori', 'homeKategoriController@index')->name('homeKategori.index');
    Route::get('/kategori', 'kategoriController@index')->name('kategori.index');
    Route::post('/kategori/create', 'kategoriController@create')->name('kategori.create');
    Route::get('/kategori/{id}/edit', 'kategoriController@edit')->name('kategori.edit');
    Route::put('/kategori/update/{id}', 'kategoriController@update')->name('kategori.update');
    Route::get('/kategori/{id}', 'kategoriController@destroy')->name('kategori.destroy');

    //Login Route
    Route::group(['middleware' => ['guest']], function () {
        Route::post('/register', 'regisController@register')->name('register.perform');
        Route::get('/login', 'loginController@show')->name('login.show');
        Route::post('/login', 'loginController@login')->name('login.perform');
        Route::post('/login', 'loginController@login')->name('login.perform');
        Route::get('/logout', 'loginController@logout')->name('login.logout');
    });
});

Auth::routes();

Route::get('test', function () {
    return view('homepage.homeUser');
});
