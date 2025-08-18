<?php

namespace Modules\Shaya\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Shaya\Models\{shayvencom};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class ShayvencomController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $sale = new shayvencom;
        $sale = shayvencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        return view('shaya::sales.index', compact('sale','desde','hasta'));
    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $sale = new shayvencom;
        $sale = shayvencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        return view('shaya::sales.index', compact('sale','desde','hasta'));
    }

}
