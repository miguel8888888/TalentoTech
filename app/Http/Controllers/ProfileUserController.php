<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProfileUserUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class ProfileUserController extends Controller
{
    private $idUsuario;
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
    public function update(Request $request, $user): RedirectResponse
    {
        $validated = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user)],
            ]

        );
        $usuario = User::find($user);
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');

        $usuario->save($validated);

        return Redirect::route('profileuser.edit', [
            'user' => $user,
        ])->with('status', 'profile-updated');
    }

    public function obtenerIdUsuario()
    {
        // Lógica para obtener el ID del usuario
        return $this->idUsuario; // Reemplaza con tu lógica real
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
