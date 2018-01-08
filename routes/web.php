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



Route::get('/', ['as'=>'menu.index', 'uses' => 'site\HomeController@index']); //Feito
Route::get('/site/single-project/{id}', ['as'=>'menu.single', 'uses' => 'site\PortfolioController@pagina']);//Feito
Route::post('/', ['as'=>'menu.salvar.contato', 'uses' => 'site\HomeController@salvarContato']);//Feito



//Admin
Route::get('/admin', ['as'=>'admin.index', 'uses'=>'Admin\HomeAdminController@index']);//Feito

//Projetos
Route::get('/admin/projetos/cadastrar', ['as'=>'admin.cadastrar.projeto', 'uses' => 'admin\PortfolioAdminController@cadastrar']);//Feito
Route::post('/admin/projetos/salvar', ['as'=>'admin.salvar.projeto', 'uses' => 'admin\PortfolioAdminController@salvar']);//Feito
Route::get('/admin/projetos', ['as'=>'admin.projetos', 'uses' => 'admin\PortfolioAdminController@index']);//Feito
Route::get('/admin/projetos/apagar/{id}', ['as'=>'admin.apagar.projeto', 'uses' => 'admin\PortfolioAdminController@deletar']);//Feito
Route::get('/admin/projetos/editar/{id}', ['as'=>'admin.editar.projeto', 'uses' => 'admin\PortfolioAdminController@editar']);//Feito
Route::put('/admin/projetos/atualizar/{id}', ['as'=>'admin.atualizar.projeto', 'uses' => 'admin\PortfolioAdminController@atualizar']);//Feito


//Contato
Route::get('/admin/contatos', ['as'=>'admin.contatos', 'uses' => 'Admin\ContatoAdminController@index']);//Feito
Route::get('/admin/contatos/apagar/{id}', ['as'=>'admin.contatos.apagar', 'uses' => 'admin\ContatoAdminController@deletar']);//Feito

