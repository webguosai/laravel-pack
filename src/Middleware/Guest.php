<?php

namespace Webguosai\LaravelPack\Middleware;

use Closure;
use Redirect;

class Guest
{
    public function handle($request, Closure $next)
    {
        echo '我是中间件:guest';
        return $next($request);
    }

}
