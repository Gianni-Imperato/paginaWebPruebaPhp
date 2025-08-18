<?php

namespace Modules\Estrella\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Estrella\Models\{estrpagos};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class EstrpagosController extends Controller
{
    public function index()
    {
        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $income = new estrpagos;
        $income = estrpagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('estrella::income.index', compact('income','desde','hasta'));
    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $income = new estrpagos;
        $income = estrpagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('estrella::income.index', compact('income','desde','hasta'));
    }
}
