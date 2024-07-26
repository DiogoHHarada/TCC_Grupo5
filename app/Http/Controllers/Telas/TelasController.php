<?php

namespace App\Http\Controllers\Telas;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class TelasController extends Controller
{
    //
    public function entrada() {
        return view('telas.Entrada');
    }

    public function login() {
        return view('telas.Login');
    }

    public function redefinir() {
        return view('telas.RedefinirSenha');
    }

    public function email() {
        return view('telas.InserirEmail');
    }

    public function enviar(Request $request)
    {
        $email = $request->input('email');

        $usuario = Usuario::where('email', $email)->first();

        if ($usuario) {
            $senhaNova = str_random(8);
            $usuario->senha = bcrypt($senhaNova);
            $usuario->save();

            Mail::send('emails.nova_senha', ['nome' => $usuario->nome, 'senha' => $senhaNova], function ($m) use ($email) {
                $m->from('seu_email@wristwear.com.br', 'WristWear LTDA');
                $m->to($email)->subject('Nova senha');
            });

            return redirect()->route('esqueci')->with('success', 'Nova senha enviada com sucesso!');
        } else {
            return redirect()->route('esqueci')->withErrors(['email' => 'Email inexistente nos registros!']);
        }
    }
}
