<?php

namespace Modules\Victoria\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Victoria\Models\{victsiped};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class VictsipedController extends Controller
{
    public function index()
    {
        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');
        $ctapag = new victsiped;
        $ctapag = victsiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('victoria::purchases.index', compact('ctapag','desde','hasta'));
    }


    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $ctapag = new victsiped;
        $ctapag = victsiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('victoria::purchases.index', compact('ctapag','desde','hasta'));
    }

}
