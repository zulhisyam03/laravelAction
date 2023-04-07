<?php

namespace App\Http\Controllers\Auth;

use App\Actions\InvokeEmailVerificationPromptAction;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(InvokeEmailVerificationPromptAction $action, Request $request): RedirectResponse|View
    {
        return $action->execute($request);
    }
}
