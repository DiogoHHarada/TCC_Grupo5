<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedefinirSenha extends Controller
{
    //
    public function index() {
        // a visão que pede usuário e senha
        
        return view('RedefinirSenha.index');
    }

    

    public function redefinir(Request $request){
        
        $email = $request->input('email');
        $new_password = $request->input('new-password');
        $confirm_password = $request->input('confirm-password');

        // Verificar se o e-mail é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors(['email' => 'E-mail inválido!']);
        }

        if ($new_password !== $confirm_password) {
            return back()->withErrors(['new-password' => 'As credenciais inseridas estão diferentes!']);
        }

        $user = Usuario::where('email', $email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'E-mail não encontrado!']);
        }

        try {
            $user->password = bcrypt($new_password);
            $user->save();
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Erro ao atualizar senha!']);
        }

        return redirect()->back()->with('success', 'Senha redefinida com sucesso!');
    }
}
