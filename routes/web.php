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
    return view('controle');
});

Route::get('/teste', function() {
    return "<h1> Teste: Aula 02/03 </h1>";
});

Route::get('/cid', 'ExemploController@cidades');

Route::get('form', 'ExemploController@form');

Route::post('grava', 'ExemploController@grava');

Route::get('lista', 'ExemploController@lista2');

Route::resource('produtos', 'ProdutoController');

Route::get('controle', function() {
    return view('controle');
});