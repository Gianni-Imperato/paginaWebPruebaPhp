<?php

namespace Modules\Panteon2\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Panteon2\Models\{pan2invtra};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class Pan2invtraController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $inv = new pan2invtra;
        $inv = pan2invtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('panteon2::inventory.index', compact('inv','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $inv = new pan2invtra;
        $inv = pan2invtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('panteon2::inventory.index', compact('inv','desde','hasta'));
    }

}
