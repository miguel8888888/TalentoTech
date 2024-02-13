<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ParticipantesExport;
use Maatwebsite\Excel\Facades\Excel;


class ReportesController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('permission:reportes-listar|reportes-crear|reportes-editar|reportes-eliminar', ['only' => ['index', 'store']]);
        $this->middleware('permission:reportes-crear', ['only' => ['create', 'store']]);
        $this->middleware('permission:reportes-editar', ['only' => ['edit', 'update']]);
        $this->middleware('permission:reportes-eliminar', ['only' => ['destroy']]);
    }
    public function export()
    {
        return Excel::download(new ParticipantesExport, 'participantes.xlsx');
    }
}
