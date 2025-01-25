<?php

namespace Modules\Pan1\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Pan1\Models\{pan1pagos};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class Pan1pagosController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $income = new pan1pagos;
        //$income = pan1pagos::orderby('nro_docu', 'asc')->get();
        $income = pan1pagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('pan1::income.index', compact('income','desde','hasta'));

    }


    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $income = new pan1pagos;
        $income = pan1pagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('pan1::income.index', compact('income','desde','hasta'));
    }


}
