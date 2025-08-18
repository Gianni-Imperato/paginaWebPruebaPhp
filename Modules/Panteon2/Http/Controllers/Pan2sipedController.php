<?php

namespace Modules\Panteon2\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Panteon2\Models\{pan2siped};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class Pan2sipedController extends Controller
{
    public function index()
    {
        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $ctapag = new pan2siped;
        $ctapag = pan2siped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('panteon2::purchases.index', compact('ctapag','desde','hasta'));
    }


    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $ctapag = new pan2siped;
        $ctapag = pan2siped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('panteon2::purchases.index', compact('ctapag','desde','hasta'));
    }

}
