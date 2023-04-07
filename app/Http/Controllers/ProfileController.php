<?php

namespace App\Http\Controllers;

use App\Actions\EditProfileAction;
use App\Actions\UpdateProfileAction;
use App\Actions\DestroyProfileAction;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(EditProfileAction $action): View
    {
        return $action->execute();
    }

    /**
     * Update the user's profile information.
     */
    public function update(UpdateProfileAction $action, ProfileUpdateRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(DestroyProfileAction $action, ProfileUpdateRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }
}
