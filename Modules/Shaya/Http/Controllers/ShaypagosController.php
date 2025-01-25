<?php

namespace Modules\Shaya\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Shaya\Models\{shaypagos};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class ShaypagosController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $income = new shaypagos;
        $income = shaypagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('shaya::income.index', compact('income','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $income = new shaypagos;
        $income = shaypagos::where('fec_pago', '>=', $desde)
                        ->where('fec_pago', '<=', $hasta)
                        ->orderby('nro_docu', 'asc')
                        ->get();
        return view('shaya::income.index', compact('income','desde','hasta'));
    }

}
