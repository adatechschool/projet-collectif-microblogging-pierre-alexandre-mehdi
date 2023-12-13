<?php

namespace App\Http\Controllers;

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
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    if ($request->user()->isDirty('email')) {
        $request->user()->email_verified_at = null;
    }

    $user = Auth::user();

    // Met à jour le nom si le champ 'name' du formulaire est renseigné
    if ($request->filled('name')) {
        $user->name = $request->input('name');
    }

    // Met à jour l'email si le champ 'email' du formulaire est renseigné
    if ($request->filled('email')) {
        $user->email = $request->input('email');
    }

    // Met à jour la biographie si le champ 'biography' du formulaire est renseigné
    if ($request->filled('biography')) {
        $user->biography = $request->input('biography');
    }

    // Met à jour la biographie si le champ 'profilPicture' du formulaire est renseigné
    if ($request->filled('profilPicture')) {
        $user->profilPicture = $request->input('profilPicture');
    }

    $request->user()->save();

    return Redirect::route('profile.edit')->with('status', 'profile-updated');
}



    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
