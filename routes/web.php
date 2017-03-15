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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/profile', function(){
    return view('auth.perfil');
});


Route::group(['middleware' => 'auth','namespace' => 'Produccion', 'prefix' => 'produccion'], function () {
      Route::group(['prefix' => 'registrar'], function () {
          Route::get('produccion', 'ProduccionController@create')->name('produccion-create');
      });
      Route::group(['prefix' => 'consultar'], function () {
          Route::get('produccion', 'ProduccionController@show')->name('produccion-show');
      });
});
