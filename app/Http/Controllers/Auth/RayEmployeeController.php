<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RayEmployeeLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RayEmployeeController extends Controller
{


    public function store(RayEmployeeLoginRequest $request): RedirectResponse
    {
        if ($request->authenticate()) {

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::RayEmployee);
        }
        return redirect()->back()->with('error', trans('dashboard/message.login_failed'));
    }





    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('ray_employee')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
