<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/telas/entrada', function () {
    return view('telas.entrada');
});

Route::get('/telas', function () {
    return view('telas.login');
});


Route::get('/telas/Entrada',
['as' =>'telas.entrada',
'uses'=>'App\Http\Controllers\Telas\TelasController@entrada']);

Route::get('/telas/Login',
['as' =>'telas.login',
'uses'=>'App\Http\Controllers\Telas\TelasController@login']);

Route::get('/telas/RedefinirSenha',
['as' =>'telas.login',
'uses'=>'App\Http\Controllers\Telas\TelasController@redefinir']);

