<?php

namespace Webguosai\LaravelPack\Middleware;

use Closure;
use Redirect;

class Vip
{
    public function handle($request, Closure $next)
    {
        echo '我是中间件:vip';
        return $next($request);
    }

}
