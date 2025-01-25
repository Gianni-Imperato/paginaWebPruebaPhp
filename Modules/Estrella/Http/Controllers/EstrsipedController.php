<?php

namespace Modules\Estrella\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Estrella\Models\{estrsiped};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class EstrsipedController extends Controller
{
    public function index()
    {
        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $ctapag = new estrsiped;
        $ctapag = estrsiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('estrella::purchases.index', compact('ctapag','desde','hasta'));
    }


    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $ctapag = new estrsiped;
        $ctapag = estrsiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('estrella::purchases.index', compact('ctapag','desde','hasta'));
    }

}
