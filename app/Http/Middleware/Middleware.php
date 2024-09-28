<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Middleware
{
    public function handle(Request $request, Closure $next)
    {
        // Permitir acesso se o usuário estiver autenticado
        if (Auth::check()) {
            return $next($request);
        }

        // Verifica se o referer existe
        if ($request->headers->has('referer')) {
            $refererHost = parse_url($request->headers->get('referer'), PHP_URL_HOST);
            // Verifica se o referer é o mesmo domínio da aplicação
            if ($refererHost === $request->getHost()) {
                return $next($request);
            }
        }

        // Se o referer for inválido ou ausente, redireciona ou bloqueia
        return redirect('/')->withErrors('Acesso direto não permitido.');
    }
}
