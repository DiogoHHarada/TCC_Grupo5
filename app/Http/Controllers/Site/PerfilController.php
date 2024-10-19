<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class PerfilController extends Controller
{
    //
    public function index() {
        return view('perfil.index');
    }

    // Método para exibir o formulário de edição
    public function editar($id)
    {
        // Encontra o usuário pelo ID
        $usuario = Usuario::findOrFail($id);

        // Retorna a view 'edit' com os dados do usuário
        return view('perfil.editar', compact('usuario'));
    }

    // Método para processar a atualização
    public function atualizar(Request $request, $id)
    {
    
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,' . $id,  // Permite o email atual do usuário
            'senha' => 'nullable|string|min:8|confirmed',
        ]);

        // Encontra o usuário
        $usuario = Usuario::findOrFail($id);

        // Atualiza os dados
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;

        // Atualiza a senha somente se ela for enviada
        if ($request->filled('senha')) {
            $usuario->senha = bcrypt($request->senha);
        }

        // Salva as mudanças
        $usuario->save();

        // Redireciona o usuário com uma mensagem de sucesso
        return redirect()->route('login.perfil', $usuario->id)->with('success', 'Usuário atualizado com sucesso!');
    }
}
