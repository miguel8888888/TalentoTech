<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class UsuariosController extends Controller
{
    public function index()
    {
        $users = User::paginate(50);

        return view('admin.usuarios.index', [
            'users' => $users,
        ]);
    }
    public function buscar(Request $request)
    {
        $request->flash();
        $users = User::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->buscar)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->paginate(50);
        return view('admin.usuarios.index', [
            'users' => $users,
        ]);
    }

    // public function edit(Request $request, $number)
    // {
    //     $users = User::find($number);
    //     // dd($users);


    //     return view('admin.usuarios.edit', [
    //         'user' => $users,
    //     ]);
    // }
    public function create(): View
    {
        return view('admin.usuarios.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $documento_usuario = new User;
        $documento_usuario->name = $request->name;
        $documento_usuario->email = $request->email;
        $documento_usuario->password = Hash::make($request->password);
        $documento_usuario->save();

        // dd($documento_usuario);
        return redirect('/login');
    }
}
