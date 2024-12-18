<?php

use Illuminate\Support\Facades\Route;
use App\Models\Registro;

Route::get('/', 
['as' => 'site.home', 
'uses' => 'App\Http\Controllers\Site\HomeController@index']);

Route::get('/sobrenos', 
['as' => 'sobrenos', 
'uses' => 'App\Http\Controllers\Site\SobreNos@index']);

Route::get('/chatbot', 
['as' => 'chatbot', 
'uses' => 'App\Http\Controllers\Site\ChatController@index']);

Route::get('/api/ultima-temperatura', function () {
    $ultimaTemperatura = Registro::latest('created_at')->first();
    return response()->json(['temperatura' => $ultimaTemperatura->temperatura]);
});

Route::get('/api/ultima-umidade', function () {
    $ultimaUmidade = Registro::latest('created_at')->first();
    return response()->json(['umidade' => $ultimaUmidade->umidade]);
});

Route::get('/chatbot/grafico', 
['as' => 'chatbot.grafico', 
'uses' => 'App\Http\Controllers\Site\ChatController@grafico']);

Route::get('/grafico/diario', 
['as' => 'grafico.diario', 
'uses' => 'App\Http\Controllers\Site\GraficoController@diario']);

Route::get('/grafico/semanal', 
['as' => 'grafico.semanal', 
'uses' => 'App\Http\Controllers\Site\GraficoController@semanal']);

// Rotas acessíveis apenas por usuários não autenticados (guest)
Route::middleware('guest')->group(function () {
    Route::get('/cadastro', 
    ['as' => 'cadastro', 
    'uses' => 'App\Http\Controllers\Site\CadastroController@index']);
    
    Route::post('/cadastro/store', 
    ['as' => 'cadastro.store', 
    'uses' => 'App\Http\Controllers\Site\CadastroController@store']);

    Route::get('/login', 
    ['as' => 'login', 
    'uses' => 'App\Http\Controllers\Site\LoginController@index']);

    Route::post('/login/entrar', 
    ['as' => 'login.entrar', 
    'uses' => 'App\Http\Controllers\Site\LoginController@entrar']);

    Route::get('/inseriremail', 
    ['as' => 'inseriremail', 
    'uses' => 'App\Http\Controllers\Site\InserirEmail@index']);

    Route::post('/inseriremail/enviar', 
    ['as' => 'inseriremail.enviar', 
    'uses' => 'App\Http\Controllers\Site\InserirEmail@enviar']);

    Route::get('/inseriremail/verificar', 
    ['as' => 'inseriremail.verificar', 
    'uses' => 'App\Http\Controllers\Site\InserirEmail@showVerifyForm']);

    Route::post('/inseriremail/verificar', 
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

// Rotas acessíveis apenas por usuários autenticados (auth)
Route::group(['middleware'=>'auth'],function(){
    Route::get('/login/perfil', 
    ['as' => 'login.perfil', 
    'uses' => 'App\Http\Controllers\Site\LoginController@show']);

    Route::post('/login/sair', 
    ['as' => 'login.sair', 
    'uses' => 'App\Http\Controllers\Site\LoginController@sair']);

    Route::get('/perfil', 
    ['as' => 'perfil', 
    'uses' => 'App\Http\Controllers\Site\PerfilController@index']);

   Route::get('/perfil/{id}/editar', 
    ['as' => 'perfil.editar', 
    'uses' => 'App\Http\Controllers\Site\PerfilController@editar']);

    Route::put('/perfil/{id}/atulizar', 
    ['as' => 'perfil.atualizar', 
    'uses' => 'App\Http\Controllers\Site\PerfilController@atualizar']);
});
	