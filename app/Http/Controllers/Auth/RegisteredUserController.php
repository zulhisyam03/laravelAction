<?php

namespace App\Http\Controllers\Auth;

use App\Actions\StoreRegisteredUserAction;
use App\Actions\CreateRegisteredUserAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(CreateRegisteredUserAction $action): View
    {
        return $action->execute();
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StoreRegisteredUserAction $action, Request $request): RedirectResponse
    {
       return $action->execute($request);
    }
}
