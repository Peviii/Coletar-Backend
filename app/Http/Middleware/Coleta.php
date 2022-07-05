<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Coleta
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next){
      if(auth()->user()->Coleta == 1){
        return $next($request);
      } 
      return redirect()->back()->with('error',"Você não tem acesso a esta pagina."); 
    }
}
