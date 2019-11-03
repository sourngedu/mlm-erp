<?php

namespace App\Http\Middleware;

use Closure;

class LocaliztionMiddleware
{

  public function handle($request, Closure $next)
  {
    if(\Session::has('locale')){
      \App::setLocale(\Session::get('locale'));
      //The default Language in Config/App.php is English      
    }
    return $next($request);
  }
}
