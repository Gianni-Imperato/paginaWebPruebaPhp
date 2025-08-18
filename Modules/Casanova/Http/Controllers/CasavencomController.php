<?php

namespace Modules\Casanova\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Casanova\Models\{casavencom};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CasavencomController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $sale = new casavencom;
        $sale = casavencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        return view('casanova::sales.index', compact('sale','desde','hasta'));
    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $sale = new casavencom;
        $sale = casavencom::where('fec_fac', '>=', $desde)
                        ->where('fec_fac', '<=', $hasta)
                        ->orderby('nro_fac', 'asc')
                        ->get();
        return view('casanova::sales.index', compact('sale','desde','hasta'));
    }


}
