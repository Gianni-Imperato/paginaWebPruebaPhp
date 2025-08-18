<?php

namespace Modules\Shaya\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Shaya\Models\{shaysiped};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ShaysipedController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $ctapag = new shaysiped;
        $ctapag = shaysiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('shaya::purchases.index', compact('ctapag','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $ctapag = new shaysiped;
        $ctapag = shaysiped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('shaya::purchases.index', compact('ctapag','desde','hasta'));
    }

}
