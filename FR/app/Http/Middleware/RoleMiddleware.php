<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && $request->user()->Role === 'dj') {
            // Si l'utilisateur est authentifié et a le rôle d'administrateur, passez à la requête suivante
            return $next($request);
        }
        // Si l'utilisateur n'est pas authentifié ou n'a pas le rôle d'administrateur, redirigez-le vers la page de connexion
        return redirect('/home');
    }
}
