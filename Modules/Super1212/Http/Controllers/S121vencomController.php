<?php

namespace Modules\Super1212\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Super1212\Models\{s121vencom};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class S121vencomController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $sale = new s121vencom;
        $sale = s121vencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        return view('super1212::sales.index', compact('sale','desde','hasta'));
    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $sale = new s121vencom;
        $sale = s121vencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        return view('super1212::sales.index', compact('sale','desde','hasta'));
    }

}
