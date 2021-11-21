<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FuncionarioACL
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(auth()->check() && auth()->user()->admin){
            return $next($request);
        } else if(auth()->check() && auth()->user()->atendente){
            return $next($request);
        } else if(auth()->check() && auth()->user()->gerente){
            return $next($request);
        }
            dd('Sem acesso de funcionario');
    }
}