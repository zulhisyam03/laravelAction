<?php

namespace App\Actions;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class EditProfileAction
{
    /**
     * Display the user's profile form.
     */
    public function execute(): View    {
        return view('profile.edit', [
            'user' => Auth::user(),
        ]);
    }
}
