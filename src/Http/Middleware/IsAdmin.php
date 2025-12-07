<?php

namespace Kazuha\BreezeAdmin\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        // só deixa entrar se o user for admin == 1
        if (!Auth::check() || Auth::user()->is_admin !== 1) {
            abort(403, 'Você não tem permissão para acessar essa porra.');
        }

        return $next($request);
    }
}
