<?php

namespace Modules\Estrella\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Estrella\Models\{estrinvtra};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class EstrinvtraController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $inv = new estrinvtra;
        $inv = estrinvtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('estrella::inventory.index', compact('inv','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $inv = new estrinvtra;
        $inv = estrinvtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('estrella::inventory.index', compact('inv','desde','hasta'));
    }

}
