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
        
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');
        $user = Usuario::where('email', $email)->first();

        
        if ($user) {
        // Gerar um código aleatório de 6 dígitos
        $code = random_int(100000, 999999);

        // Enviar o e-mail com o código
        Mail::raw("Seu código de verificação é: $code", function ($message) use ($email) {
            $message->to($email)
                    ->subject('Código de Verificação');
        });
        // Salvar o código no banco de dados
        $user->verificacao_codigo = $code;
        $user->save();

        // Redirecionar para a página de verificação de código
        return redirect()->route('InserirEmail.verificar')->with('email', $email);
            }

        return redirect()->back()->with('error', 'E-mail não encontrado no banco de dados.');
    }

    public function showVerifyForm(Request $request)
    {
        $email = session('email');
        return view('VerificarCodigo.index', compact('email'));
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|numeric|digits:6',
        ]);

        $email = $request->input('email');
        $code = $request->input('code');

        $user = Usuario::where('email', $email)->where('verificacao_codigo', $code)->first();

        if ($user) {
            // Código verificado com sucesso
            return redirect()->route('RedefinirSenha')->with('success', 'Código verificado com sucesso!');
        }

        return redirect()->back()->with('error', 'Código de verificação incorreto.');
    }    
}