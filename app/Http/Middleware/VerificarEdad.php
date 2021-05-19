<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarEdad
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
        if($request->edad >= 18){
            return $next($request);    
        } else {
            return redirect ('no-autorizado');
        }
        
        // escribir http://cuencanehuen.test/pruebaM?edad=20 para verificar el middleware 
        
        //return $next($request);
        
        
    }
}
