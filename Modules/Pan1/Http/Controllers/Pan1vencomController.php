<?php

namespace Modules\Pan1\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Pan1\Models\{pan1vencom};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class Pan1vencomController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $sale = new pan1vencom;
        //$sale = pan1vencom::orderby('nro_fac', 'asc')->get();
        $sale = pan1vencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        //return $sale;
        
        return view('pan1::sales.index', compact('sale','desde','hasta'));
    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $sale = new pan1vencom;
        $sale = pan1vencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        return view('pan1::sales.index', compact('sale','desde','hasta'));
    }


}
