<?php

namespace App\Actions;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

class StoreAuthenticatedSessionAction
{
    /**
     * Handle an incoming authentication request.
     */
    public function execute(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
