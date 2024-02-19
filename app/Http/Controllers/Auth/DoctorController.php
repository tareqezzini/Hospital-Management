<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\DoctorLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function store(DoctorLoginRequest $request): RedirectResponse
    {
        if ($request->authenticate()) {

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::DOCTOR);
        }
        return redirect()->back()->with('error', trans('dashboard/message.login_failed'));
    }





    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('doctor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
