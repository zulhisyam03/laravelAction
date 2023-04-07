<?php

namespace App\Http\Controllers\Auth;

use App\Actions\StorePasswordResetAction;
use App\Actions\CreatePasswordResetAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(CreatePasswordResetAction $action): View
    {
        return $action->execute();
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StorePasswordResetAction $action, Request $request): RedirectResponse
    {
        return $action->execute($request);
    }
}
