<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUserUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileUserController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit($user): View
    {
        $usuario = User::find($user);
        // dd($usuario);
        return view('admin.usuarios.edit', [
            'user' => $usuario,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUserUpdateRequest $request, $user): RedirectResponse
    {
        $usuario = User::find($user);
        // dd($user);
        $userId = $user;
        $request->setUserId($userId);
        $usuario->fill($request->validated());

        if ($usuario->isDirty('email')) {
            $usuario->email_verified_at = null;
        }

        $usuario->save();

        return Redirect::route('profileuser.edit', [
            'user' => $usuario,
        ])->with('status', 'profile-updated');
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
