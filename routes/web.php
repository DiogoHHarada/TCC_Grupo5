<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Criando a 1ª rota do curso
Route::get('/dashboard', function () {
    return "Contato";
});