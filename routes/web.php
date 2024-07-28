<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Entrada',
['as' =>'Entrada',
'uses'=>'App\Http\Controllers\Site\EntradaController@index']);


Route::get('/Login', 
['as' =>'login',
'uses'=>'App\Http\Controllers\Site\LoginController@index']);

Route::post('/login/entrar',
['as'=>'login.entrar',
'uses'=>'App\Http\Controllers\Site\LoginController@entrar']);

Route::get('/login/sair',
['as'=>'login.sair',
'uses'=>'App\Http\Controllers\Site\LoginController@sair']);

Route::get('/RedefinirSenha',
['as' =>'RedefinirSenha',
'uses'=>'App\Http\Controllers\Site\RedefinirSenha@index']);

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

