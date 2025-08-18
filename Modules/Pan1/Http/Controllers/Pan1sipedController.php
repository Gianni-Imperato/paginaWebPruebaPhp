<?php

namespace Modules\Pan1\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Pan1\Models\{pan1siped};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class Pan1sipedController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $ctapag = new pan1siped;
        //$ctapag = pan1siped::orderby('nro_pedi', 'asc')->get();
        $ctapag = pan1siped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        
        //return $ctapag;
        return view('pan1::purchases.index', compact('ctapag','desde','hasta'));

    }


    public function show(Request $record)
    {


        //return $record;
        $desde = $record->desde;
        $hasta = $record->hasta;
        $ctapag = new pan1siped;
        //$ctapag = pan1siped::orderby('nro_pedi', 'asc')->get();
        $ctapag = pan1siped::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('nro_pedi', 'asc')
                        ->get();
        
        //return $ctapag;
        return view('pan1::purchases.index', compact('ctapag','desde','hasta'));
    }


}
