<?php

use Illuminate\Support\Facades\Route;

Route::get('/',
['as'=>'site.home',
'uses'=>'App\Http\Controllers\Site\HomeController@index']);


Route::get('/cadastro', 
['as' =>'cadastro',
'uses'=>'App\Http\Controllers\Site\CadastroController@index']);

Route::post('/cadastro/store', 
['as' =>'cadastro.store',
'uses'=>'App\Http\Controllers\Site\CadastroController@store']);

Route::get('/login', 
['as' =>'login',
'uses'=>'App\Http\Controllers\Site\LoginController@index']);

Route::post('/login/entrar',
['as'=>'login.entrar',
'uses'=>'App\Http\Controllers\Site\LoginController@entrar']);

Route::get('/login/sair',
['as'=>'login.sair',
'uses'=>'App\Http\Controllers\Site\LoginController@sair']);

Route::get('/sobrenos', 
['as' =>'sobrenos',
'uses'=>'App\Http\Controllers\Site\SobreNos@index']);

Route::get('/perfil', 
['as' =>'perfil',
'uses'=>'App\Http\Controllers\Site\PerfilController@index']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/inseriremail',
    ['as' =>'inseriremail',
    'uses'=>'App\Http\Controllers\Site\InserirEmail@index']);

    Route::post('inseriremail/enviar',
    ['as' =>'inseriremail.enviar',
    'uses'=>'App\Http\Controllers\Site\InserirEmail@enviar']);

    Route::get('inseriremail/verificar', 
    ['as' => 'inseriremail.verificar',
    'uses' => 'App\Http\Controllers\Site\InserirEmail@showVerifyForm']);

    Route::post('inseriremail/verificar', 
    ['as' => 'inseriremail.verificar.code',
    'uses' => 'App\Http\Controllers\Site\InserirEmail@verifyCode']);

    Route::get('/redefinirsenha',
    ['as' =>'redefinirsenha',
    'uses'=>'App\Http\Controllers\Site\RedefinirSenha@index']);
    
    Route::get('/redefinirsenha/redefinir/{id}/form', 
    ['as' => 'redefinirsenha.showUpdatePasswordForm',
    'uses' => 'App\Http\Controllers\Site\RedefinirSenha@showUpdatePasswordForm']);

    Route::put('/redefinirsenha/redefinir/{id}',
    ['as' =>'redefinirsenha.redefinir',
    'uses'=>'App\Http\Controllers\Site\RedefinirSenha@redefinir']);
});