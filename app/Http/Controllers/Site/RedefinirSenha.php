<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario; // Certifique-se de que o modelo correto está sendo usado
use Illuminate\Support\Facades\Hash; // Para criptografar a senha

class RedefinirSenha extends Controller
{
    //
    public function index() {
        // a visão que pede usuário e senha
        
        return view('redefinirsenha.index');
    }

    public function showUpdatePasswordForm($id)
    {
        // Buscar o usuário pelo ID
        $usuario = Usuario::find($id);

        // Verificar se o usuário existe
        if ($usuario) {
            // Passar o usuário para a view
            return view('redefinirsenha.index', ['usuario' => $usuario]);
        } else {
            // Redirecionar com uma mensagem de erro se o usuário não for encontrado
            return redirect()->route('home')->withErrors(['error' => 'Usuário não encontrado.']);
        }
    }

    public function redefinir(Request $request, $id){

        // Validar os dados recebidos
        $validatedData = $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Encriptar a nova senha
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Atualizar a senha do usuário
        $usuario = Usuario::find($id);
        
        if ($usuario) {
            $usuario->update(['senha' => $validatedData['password']]);
            return redirect()->route('login')->with('success', 'Senha atualizada com sucesso! Por favor, faça login.');
        } else {
            return back()->withErrors(['error' => 'Usuário não encontrado.']);
        }
    }
}
