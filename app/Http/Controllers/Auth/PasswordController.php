<?php

namespace App\Http\Controllers\Auth;

use App\Actions\UpdatePasswordAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(UpdatePasswordAction $action, Request $request): RedirectResponse
    {
        return $action->execute($request);
    }
}
