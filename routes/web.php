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

Route::get('/', 'Site\HomeController@index')->name('site.home');



Route::get('/login', 'Site\LoginController@index')->name('site.login');
Route::post('/login/entrar', 'Site\LoginController@entrar')->name('site.login.entrar');
Route::get('/login/sair', 'Site\LoginController@sair')->name('site.login.sair');

Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);
Route::post('/contato', ['uses'=>'ContatoController@criar']);
Route::put('/contato', ['uses'=>'ContatoController@editar']);


Route::group(['middleware'=>'auth'], function(){
	Route::get('/admin/cursos', 'Admin\CursosController@index')->name('admin.cursos');
	Route::get('/admin/cursos/adicionar', 'Admin\CursosController@adicionar')->name('admin.cursos.adicionar');
	Route::post('/admin/cursos/salvar', 'Admin\CursosController@salvar')->name('admin.cursos.salvar');
	Route::get('/admin/cursos/editar/{id}', 'Admin\CursosController@editar')->name('admin.cursos.editar');
	Route::put('/admin/cursos/atualizar/{id}', 'Admin\CursosController@atualizar')->name('admin.cursos.atualizar');
	Route::get('/admin/cursos/deletar/{id}', 'Admin\CursosController@deletar')->name('admin.cursos.deletar');
});



	