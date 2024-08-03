<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Log; 

class CadastroController extends Controller
{
    //
    public function index() {
        return view('Cadastro.index');
    }

    public function store(Request $request)
    {
        // Validar os dados recebidos
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:8',
        ]);

        try {
            // Adicionar criptografia da senha
            $validatedData['senha'] = bcrypt($validatedData['senha']);

            // Criar um novo usuário
            Usuario::create($validatedData);

            // Redirecionar para a página de login com uma mensagem de sucesso
            return redirect()->route('Login')->with('success', 'Usuário criado com sucesso! Por favor, faça login.');
        } catch (\Exception $e) {
            // Registrar o erro para fins de depuração
            Log::error('Erro ao criar usuário: ' . $e->getMessage());

            // Redirecionar de volta com uma mensagem de erro
            return back()->withErrors(['error' => 'Ocorreu um erro ao criar o usuário. Por favor, tente novamente.']);
        }
    }
}
