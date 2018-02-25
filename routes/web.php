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

Route::get('/paginalogin','UtilizadorController@logins')->name('logins');
Route::post('/paginalogin','UtilizadorController@entrar')->name('logins');

Route::prefix('utilizador')->group (function ()
{
   Route::get('','UtilizadorController@inicio')->name('inicio');
   Route::get('/sair','UtilizadorController@sair')->name('sair');

});