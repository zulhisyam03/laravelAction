<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Actions\CreateAuthenticatedSessionAction;
use App\Actions\StoreAuthenticatedSessionAction;
use App\Actions\DestroyAuthenticatedSessionAction;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(CreateAuthenticatedSessionAction $action): View
    {
        return $action->execute();
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(StoreAuthenticatedSessionAction $action, LoginRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(DestroyAuthenticatedSessionAction $action, LoginRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }
}
