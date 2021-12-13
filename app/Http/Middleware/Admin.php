<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
       // dump('Nous sommes dans le Auth middleware');
       // die();
        if (auth()->guest()) {
           
            return redirect('/login');
        }
        // dump($request->user()->role->name);
        //die();
        if ($request->user()->role->name == "Admin") {
           
            return $next($request); //render la route demandé
        }
        
        return redirect('/');
        
    }
}
