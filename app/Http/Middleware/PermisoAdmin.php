<?php

namespace App\Http\Middleware;

use Closure;

class PermisoAdmin
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
        if($this->permiso())
            return $next($request);
        return redirect('/')->with('mensaje', 'No tiene permisos para realizar esta acción');
    }

    private function permiso(){
        return session()->get('rol_nombre') == 'Administrador';
    }
}
