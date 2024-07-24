<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/telas/Entrada',
['as' =>'telas.Entrada',
'uses'=>'App\Http\Controllers\Telas\TelasController@entrada']);

Route::get('/telas/Login',
['as' =>'telas.Login',
'uses'=>'App\Http\Controllers\Telas\TelasController@login']);

Route::get('/telas/RedefinirSenha',
['as' =>'telas.RedefinirSenha',
'uses'=>'App\Http\Controllers\Telas\TelasController@redefinir']);

