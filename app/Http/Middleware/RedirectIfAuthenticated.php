<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{

    public function handle(Request $request, Closure $next): Response
    {
        if (auth('web')->check()) {
            return redirect(RouteServiceProvider::USER);
        }

        if (auth('admin')->check()) {
            return redirect(RouteServiceProvider::ADMIN);
        }

        if (auth('doctor')->check()) {
            return redirect(RouteServiceProvider::DOCTOR);
        }

        if (auth('ray_employee')->check()) {
            return redirect(RouteServiceProvider::RayEmployee);
        }

        if (auth('laboEmployee')->check()) {
            return redirect(RouteServiceProvider::LABOEMPLOYEE);
        }

        if (auth('patient')->check()) {
            return redirect(RouteServiceProvider::PATIENT);
        }

        return $next($request);
    }
}
