<?php

namespace App\Http\Controllers\Auth;

use App\Actions\StoreEmailVerificationAction;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(StoreEmailVerificationAction $action, Request $request): RedirectResponse
    {
       return $action->execute($request);
    }
}
