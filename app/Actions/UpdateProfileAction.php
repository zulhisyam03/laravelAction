<?php

namespace App\Actions;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UpdateProfileAction
{
    /**
     * Update the user's profile information.
     */
    public function execute(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return Redirect::route('profile.edit')->with('success', 'Profile updated successfully!');
    }
}
