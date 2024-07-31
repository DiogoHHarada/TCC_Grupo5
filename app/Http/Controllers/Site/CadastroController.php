<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    //
    public function index() {
        return view('Cadastro.index');
    }

    public function criarUsuario(Request $request)
    {
        $usuario = new Usuario();
        $usuario->email = $request->input('email');
        $usuario->senha = bcrypt($request->input('senha'));
        $usuario->save();

        return redirect()->route('home')->with('success', 'Usuário criado com sucesso!');
    }
}
