<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;

use App\Exports\ParticipantesExport;
use Maatwebsite\Excel\Facades\Excel;

class GestionParticipantesController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request)
    {
        $request->flash();
        $participantes = Participante::where([
            ['primer_nombre', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->buscar)) {
                    $query->orWhere('primer_nombre', 'LIKE', '%' . $s . '%')
                        ->orWhere('numero_documento', 'LIKE', '%' . $s . '%')
                        ->orWhere('estado_registro', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->paginate(50);
        return view('admin.participantes.index', [
            'participantes' => $participantes,
        ]);
    }

    public function export()
    {
        return Excel::download(new ParticipantesExport, 'participantes.xlsx');
    }

    public function edit(Request $request, $number)
    {
        $participantes = Participante::find($number);
        // dd($participantes);

        return view('admin.participantes.edit', [
            'participantes' => $participantes,
        ]);
    }
}
