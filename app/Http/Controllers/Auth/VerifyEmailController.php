<?php

namespace App\Http\Controllers\Auth;

use App\Actions\InvokeVerifyEmailAction;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(InvokeVerifyEmailAction $action, EmailVerificationRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }
}
