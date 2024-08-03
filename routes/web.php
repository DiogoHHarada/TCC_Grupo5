<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Entrada',
['as' =>'Entrada',
'uses'=>'App\Http\Controllers\Site\EntradaController@index']);


Route::get('/Cadastro', 
['as' =>'Cadastro',
'uses'=>'App\Http\Controllers\Site\CadastroController@index']);

Route::post('/Cadastro/store', 
['as' =>'Cadastro.store',
'uses'=>'App\Http\Controllers\Site\CadastroController@store']);

Route::get('/Login', 
['as' =>'Login',
'uses'=>'App\Http\Controllers\Site\LoginController@index']);

Route::post('/Login/entrar',
['as'=>'login.entrar',
'uses'=>'App\Http\Controllers\Site\LoginController@entrar']);

Route::get('/Login/sair',
['as'=>'login.sair',
'uses'=>'App\Http\Controllers\Site\LoginController@sair']);

Route::get('/RedefinirSenha',
['as' =>'RedefinirSenha',
'uses'=>'App\Http\Controllers\Site\RedefinirSenha@index']);

Route::post('/RedefinirSenha/redefinir',
['as' =>'RedefinirSenha.redefinir',
'uses'=>'App\Http\Controllers\Site\RedefinirSenha@redefinir']);

Route::get('/InserirEmail',
['as' =>'InserirEmail',
'uses'=>'App\Http\Controllers\Site\InserirEmail@index']);

Route::post('InserirEmail/enviar',
['as' =>'InserirEmail.enviar',
'uses'=>'App\Http\Controllers\Site\InserirEmail@enviar']);

Route::post('InserirEmail/enviar',
['as' =>'InserirEmail.enviar',
'uses'=>'App\Http\Controllers\Site\InserirEmail@enviar']);

Route::get('InserirEmail/verificar', 
['as' => 'InserirEmail.verificar',
'uses' => 'App\Http\Controllers\Site\InserirEmail@showVerifyForm']);

Route::post('InserirEmail/verificar', 
['as' => 'InserirEmail.verificar.code',
'uses' => 'App\Http\Controllers\Site\InserirEmail@verifyCode']);

Route::get('Dashboard', 
['as' => 'Dashboard',
'uses' => 'App\Http\Controllers\Site\Dashboard@index']);

