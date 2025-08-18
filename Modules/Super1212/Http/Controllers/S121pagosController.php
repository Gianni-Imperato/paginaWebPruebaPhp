<?php

namespace Modules\Super1212\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Super1212\Models\{s121pagos};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class S121pagosController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $income = new s121pagos;
        $income = s121pagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('super1212::income.index', compact('income','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $income = new s121pagos;
        $income = s121pagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('super1212::income.index', compact('income','desde','hasta'));
    }

}
