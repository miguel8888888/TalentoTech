<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Horarios;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;


class GestionHorariosController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:participante-listar|participante-crear|participante-editar|participante-eliminar|reportes-listar|reportes-crear|reportes-editar|reportes-eliminar', ['only' => ['index', 'store']]);
        $this->middleware('permission:participante-crear|reportes-crear', ['only' => ['create', 'store']]);
        $this->middleware('permission:participante-editar|reportes-editar', ['only' => ['edit', 'update']]);
        $this->middleware('permission:participante-eliminar|reportes-eliminar', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $request->flash();

        $horarioQuery = Horarios::select('id', 'horario', 'materia', 'modalidad_bootcamps', 'nivel_formacion');
        // dd($horarioQuery);
        if ($request->has('buscar')) {
            $filtro = $request->buscar;
            $horarioQuery->where('modalidad_bootcamps', $filtro);
        }

        if ($request->has('materia')) {
            $filtro = $request->materia;
            $horarioQuery->where('materia', $filtro);
            // Reemplaza 'columna_a_filtrar' con el nombre real de la columna en tu tabla Participante
        }

        if ($request->has('nivel_formacion')) {
            $filtro = $request->nivel_formacion;
            $horarioQuery->where('nivel_formacion', $filtro);
            // Reemplaza 'columna_a_filtrar' con el nombre real de la columna en tu tabla Participante
        }
        $horario = $horarioQuery->paginate(50);
        return view('admin.horarios.index', compact('horario'));
    }

    public function create(): View
    {
        return view('admin.horarios.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag(
            'crearHorario',
            [
                'eje' => ['required', 'string', 'max:50'],
                'horario' => ['required', 'string', 'max:100'],
                'bootcamps' => ['required', 'string', 'max:50'],
                'nivel_formacion' => ['required', 'string', 'max:50'],
            ],
            [
                // 'current_password.required' => 'La contraseña es incorrecta',
                'eje.required' => 'El campo Eje final formación es requerido',
                'horario.required' => 'El campo Nivel Horario es requerido',
                'bootcamps.required' => 'El campo Modalidad bootcamps es requerido',
                'nivel_formacion.required' => 'El campo Nivel formación es requerido',
            ]
        );

        $horario = new Horarios;
        $horario->materia = $validated['eje'];
        $horario->horario = $validated['horario'];
        $horario->modalidad_bootcamps = $validated['bootcamps'];
        $horario->nivel_formacion = $validated['nivel_formacion'];

        // $horario->materia = $request->eje;
        // $horario->horario = $request->horario;
        // $horario->modalidad_bootcamps = $request->bootcamps;
        // $horario->nivel_formacion = $request->nivel_formacion;
        $horario->save();

        // dd($documento_usuario);
        return redirect()->route('horarios.index');
    }
}
