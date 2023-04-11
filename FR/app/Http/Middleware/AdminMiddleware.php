<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Vérifiez si l'utilisateur est authentifié et s'il a le rôle d'administrateur
        if ($request->user() && $request->user()->Role === 'admin') {
            // Si l'utilisateur est authentifié et a le rôle d'administrateur, passez à la requête suivante
            return $next($request);
        }
        if ($request->user() && $request->user()->Role === 'dj') {
            // Si l'utilisateur est authentifié et a le rôle d'administrateur, passez à la requête suivante
            return $next($request);
        }
        // Si l'utilisateur n'est pas authentifié ou n'a pas le rôle d'administrateur, redirigez-le vers la page de connexion
        return redirect('/home');
    }
}
