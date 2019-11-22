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


Route::get('/formulario', 'HomeController@exibirFormulario');
//enviar informacoes do formulario
Route::post('/formulario', 'HomeController@cadastrarFormulario');
//crio o caminho e o metodo. Depois no Homecontroller criamos o metodo.
//dizendo para o laravel que tera parametro({id}) na rota
//vai deixar disponivel uma variavel chamada id.
//? para dizer que o parametro é opcional
Route::get('/request/id/{id?}', 'HomeController@request');

Route::get('/home','HomeController@viewHome');
Route::get('/cidades','CidadeController@viewCidades');
