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
  return redirect('home');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::resource('contribuyentes', 'contribuyentesController');
Route::resource('rubros', 'rubrosController');
Route::resource('negocios', 'negociosController');

Route::get('/mapa/{id}', function($id) {
  echo "mapa ".$id;
});

Route::get('/mapa/{id}', 'negociosController@mapa');
Route::post('/mapa/mapas/create', 'negociosController@mapas');