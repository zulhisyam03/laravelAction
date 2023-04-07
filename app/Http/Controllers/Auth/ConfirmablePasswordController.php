<?php

namespace App\Http\Controllers\Auth;

use App\Actions\ShowConfirmabelPasswordAction;
use App\Actions\StoreComfirmablePasswordAction;
use App\Actions\StoreConfirmabelPasswordAction;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(ShowConfirmabelPasswordAction $action): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(StoreComfirmablePasswordAction $action, Request $request): RedirectResponse
    {
        return $action->execute($request);
    }
}
