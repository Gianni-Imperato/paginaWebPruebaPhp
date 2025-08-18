<?php

namespace Modules\Suspension\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Suspension\Models\{suspsiped};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SuspsipedController extends Controller
{
    public function index()
    {
        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $ctapag = new suspsiped;
        $ctapag = suspsiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('suspension::purchases.index', compact('ctapag','desde','hasta'));
    }


    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $ctapag = new suspsiped;
        $ctapag = suspsiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('suspension::purchases.index', compact('ctapag','desde','hasta'));
    }

}
