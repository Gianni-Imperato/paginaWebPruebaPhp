<?php

namespace Modules\Super1212\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Super1212\Models\{s121siped};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class S121sipedController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $ctapag = new s121siped;
        $ctapag = s121siped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('super1212::purchases.index', compact('ctapag','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $ctapag = new s121siped;
        $ctapag = s121siped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        return view('super1212::purchases.index', compact('ctapag','desde','hasta'));
    }

}
