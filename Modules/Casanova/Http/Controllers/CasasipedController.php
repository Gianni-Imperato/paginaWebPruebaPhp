<?php

namespace Modules\Casanova\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Casanova\Models\{casasiped};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CasasipedController extends Controller
{
    public function index()
    {
        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $ctapag = new casasiped;
        $ctapag = casasiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('casanova::purchases.index', compact('ctapag','desde','hasta'));
    }


    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $ctapag = new casasiped;
        $ctapag = casasiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('casanova::purchases.index', compact('ctapag','desde','hasta'));
    }

}
