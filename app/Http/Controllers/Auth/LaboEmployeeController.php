<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LaboEmployeeLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaboEmployeeController extends Controller
{


    public function store(LaboEmployeeLoginRequest $request): RedirectResponse
    {
        if ($request->authenticate()) {

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::ADMIN);
        }
        return redirect()->back()->with('error', trans('dashboard/message.login_failed'));
    }





    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('laboEmployee')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
