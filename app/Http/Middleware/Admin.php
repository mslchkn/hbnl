<?php

namespace App\Http\Middleware;

use App\Http\Models\User;
use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;

class Admin
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

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
        $app_key = $request->session()->get('app_key');

        $admin = User::where('login', env('ADMIN_LOGIN'))->first();
        if ($app_key != md5($admin->login . $admin->password . env('APP_KEY'))) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
