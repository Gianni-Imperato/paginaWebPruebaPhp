<?php

namespace Modules\Panteon2\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Panteon2\Models\{pan2pagos};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class Pan2pagosController extends Controller
{
    public function index()
    {
        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $income = new pan2pagos;
        $income = pan2pagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('panteon2::income.index', compact('income','desde','hasta'));
    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $income = new pan2pagos;
        $income = pan2pagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('panteon2::income.index', compact('income','desde','hasta'));
    }
}
