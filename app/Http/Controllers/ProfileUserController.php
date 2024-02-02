<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
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
    public function passUpdate(Request $request, $user): RedirectResponse
    {
        $validated = $request->validateWithBag(
            'updatePassword',
            [
                'current_password' => ['required', 'current_password'],
                'password' => ['required', Password::defaults(), 'confirmed'],
            ],
            [
                'current_password.required' => 'La contraseña es incorrecta',
                'password.required' => 'El campo contraseña es requerido',
            ]
        );

        $usuario = User::find($user);
        $usuario->password = Hash::make($validated['password']);
        $usuario->save();
        // dd($usuario->password);

        return back()->with('status', 'password-updated');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request, $user): RedirectResponse
    {
        $user = User::find($user);

        $request->validateWithBag(
            'userDeletion',
            [
                'password' => ['required', function ($attribute, $value, $fail) use ($user) {
                    // Verificar si la contraseña actual coincide
                    if (!Hash::check($value, $user->password)) {
                        $fail(__('La contraseña es incorrecta'));
                    }
                }],
            ],
            [
                'password.required' =>  __('El campo contraseña es requerido'),
            ]
        );
        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/login');
    }
}
