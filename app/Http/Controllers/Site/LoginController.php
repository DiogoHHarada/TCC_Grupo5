<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $request)
    {
        $dados = $request->all();

        // compara email e pass de ‘users’ com
        // email e senha digitado

        If  (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
        // redireciona para a home, mas agora, logado !

        return redirect()->route('sobrenos');
        } else { // pede usuario e senha novamente
        return redirect()->route('login');
        }
    }

    public function sair()
    {
        Auth::logout(); // Use Auth::logout() para deslogar
        return redirect()->route('login');
    } 
    
    public function show()
    {
        $usuario = Auth::user();  // Obtém o usuário logado
        return view('perfil.index', compact('usuario')); // Passa os dados do usuário para a view
    }
}
