<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class CreatePasswordResetAction
{
    use AsAction;

    public function execute(): View
    {
        return view('auth.forgot-password');
        // ...
    }
}
