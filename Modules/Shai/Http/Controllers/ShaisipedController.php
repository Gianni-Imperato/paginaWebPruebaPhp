<?php

namespace Modules\Shai\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Shai\Models\{shaisiped};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ShaisipedController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $ctapag = new shaisiped;
        $ctapag = shaisiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('shai::purchases.index', compact('ctapag','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $ctapag = new shaisiped;
        $ctapag = shaisiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('shai::purchases.index', compact('ctapag','desde','hasta'));
    }

}
