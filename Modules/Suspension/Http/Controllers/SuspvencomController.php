<?php

namespace Modules\Suspension\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Suspension\Models\{suspvencom};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SuspvencomController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $sale = new suspvencom;
        $sale = suspvencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        return view('suspension::sales.index', compact('sale','desde','hasta'));
    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $sale = new suspvencom;
        $sale = suspvencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        return view('suspension::sales.index', compact('sale','desde','hasta'));
    }


}
