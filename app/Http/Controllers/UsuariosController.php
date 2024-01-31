<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
                        ->orWhere('correo', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->paginate(50);
        return view('admin.usuarios.index', [
            'users' => $users,
        ]);
    }

    public function edit(Request $request, $number)
    {
        $users = User::find($number);
        // dd($users);


        return view('admin.usuarios.edit', [
            'user' => $users,
        ]);
    }
}
