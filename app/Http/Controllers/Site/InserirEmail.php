<?php

namespace App\Http\Controllers\Site;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InserirEmail extends Controller
{
    //
    public function index() {
        return view('InserirEmail.index');
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
        return view('InserirEmail.index');
    }
}
