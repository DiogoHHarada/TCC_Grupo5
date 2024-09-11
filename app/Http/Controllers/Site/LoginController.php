<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function index() {
        // a visão que pede usuário e senha
        
        return view('login.index');
    }

    public function entrar(Request $request) {
        $dados = $request->all();                                // compara email e pass de ‘users’ com // email e senha digitado
        If ( Auth::attempt( ['email' => $dados['email'],
        'senha' => $dados['senha']] ) ) {
        
        return redirect()->route('sobrenos');               // redireciona para a home, mas agora, logado !
        } else { 
            return redirect()->route('login');              // pede usuario e senha novamente
        }
        
    }

    public function sair() {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
