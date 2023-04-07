<?php

namespace App\Actions;

// use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CreateAuthenticatedSessionAction
{
    /**
     * Display the login view.
     */
    public function execute(): View
    {
        return view('auth.login');
    }
}
