<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
class CreateNewPasswordAction
{
    use AsAction;

    public function execute(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
        // ...
    }
}
