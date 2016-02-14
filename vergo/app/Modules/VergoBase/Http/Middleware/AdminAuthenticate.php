<?php

namespace App\Modules\VergoBase\Http\Middleware;

use Closure;
use App\Modules\VergoBase\Http\Services\User as Service;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $service = new Service();
        if($service->authByToken($request->session()->get('token'))) {
            $request->setUserResolver(function() use ($service){ return $service->getModel();});
            return $next($request);
        }
        if ($request->ajax()) {
            return response('Unauthorized.', 401);
        }
        return redirect(route('admin:login'));
    }
}
