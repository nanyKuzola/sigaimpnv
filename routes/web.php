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

Route::get('/',function ()
{
    return view('welcome');
})->name('paginainicial');
Route::get('/resultados', 'UtilizadorController@resultados')->name('InscResultados');
Route::get('/inscricao', 'UtilizadorController@inscricao')->name('formInscricao');
Route::get('/paginalogin','UtilizadorController@logins')->name('logins');
Route::post('/paginalogin','UtilizadorController@entrar')->name('logins');

Route::prefix('utilizador')->group (function ()
{
   Route::get('','UtilizadorController@inicio')->name('inicio');
   Route::get('/sair','UtilizadorController@sair')->name('sair');

   Route::get('/cadastrar','UtilizadorController@showForm')->name('CUtilizador');
   Route::post('/cadastrar','UtilizadorController@guardar')->name('CUtilizador');

   Route::get('/perfis','UtilizadorController@meusPerfis')->name('meusPerfis');
   Route::put('/perfis','UtilizadorController@perfilActual')->name('meusPerfis');
   Route::post('/inscricao','UtilizadorController@inscricao_candidato')->name('candidatoinscricao');


   // funcionário da secretaria pedagógica

    Route::get('/vercandidaturas', 'UtilizadorController@vercandidaturas')->name('ver_candidatura');

});

 // modulo secretaria pedadógica
Route::prefix('inscricao')->group(function ()
{
    Route::get('/ver','FspController@inscricao')->name('ver_inscricoes');
    Route::get('/{id}','FspController@especify')->name('fichacompleta');


});
Route::post('/media/{id}','FspController@calculomedia')->name('media');
Route::get('/media/{id}','FspController@mediaver')->name('media');
Route::get('/validar/{id}',"FspController@validar")->name('aprovado');

//
Route::get('/bilhete/{id}','FspController@bilhete')->name('bilhetes');
Route::prefix('candidaturas')->group (function ()
{
    Route::get('/ver', 'CursoEstudanteController@ver')->name('ver_candidatura');


});
Route::prefix('perfil')->group (function ()
{
    Route::get('/cadastrar','PerfilController@showForm')->name('CPerfil');
    Route::post('/cadastrar','PerfilController@guardar')->name('CPerfil');

});

// super administraddor

Route::get('/curso','ProfessorController@form')->name('cadastrarCurso');
Route::post('/curso','ProfessorController@cadastro')->name('cadastrarCurso');