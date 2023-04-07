<?php

namespace App\Http\Controllers\Auth;

use App\Actions\StoreNewPasswordAction;
use App\Actions\CreateNewPasswordAction;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(CreateNewPasswordAction $action, Request $request): View
    {
        return $action->execute($request);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StoreNewPasswordAction $action, Request $request): RedirectResponse
    {
        return $action->execute($request);
    }
}
