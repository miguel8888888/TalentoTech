<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;



class ProfileHorarioController extends Controller
{
    public function edit($horario): View
    {
        // dd($horario);
        $horario = Horarios::find($horario);
        // dd($usuario);
        return view('admin.horarios.edit', [
            'horario' => $horario,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $horario): RedirectResponse
    {
        $validated = $request->validate(
            [
                'eje' => ['required', 'string', 'max:50'],
                'horario' => ['required', 'string', 'max:100'],
                'bootcamps' => ['required', 'string', 'max:50'],
                'nivel_formacion' => ['required', 'string', 'max:50'],
            ]

        );
        $horario = Horarios::find($horario);
        $horario->materia = $request->input('eje');
        $horario->horario = $request->input('horario');
        $horario->modalidad_bootcamps = $request->input('bootcamps');
        $horario->nivel_formacion = $request->input('nivel_formacion');

        $horario->save($validated);

        return Redirect::route('profilehorario.edit', [
            'horario' => $horario,
        ])->with('status', 'profile-updated');
    }
    /**
     * Delete the user's account.
     */
    public function destroy($horario): RedirectResponse
    {
        $horario = Horarios::find($horario);

        // $request->validateWithBag(
        //     'userDeletion',
        //     [
        //         'password' => ['required', function ($attribute, $value, $fail) use ($request) {
        //             // Verificar si la contraseña actual coincide
        //             if (!Hash::check($value, $request->user()->password)) {
        //                 $fail(__('La contraseña es incorrecta'));
        //             }
        //         }],
        //     ],
        //     [
        //         'password.required' =>  __('El campo contraseña es requerido'),
        //     ]
        // );

        $horario->delete();

        return redirect()->route('horarios.index');
    }
}
