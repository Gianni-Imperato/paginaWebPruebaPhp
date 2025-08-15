<?php

namespace Modules\Casanova\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Casanova\Models\{casainvtra};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CasainvtraController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $inv = new casainvtra;
        $inv = casainvtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('casanova::inventory.index', compact('inv','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $inv = new casainvtra;
        $inv = casainvtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('casanova::inventory.index', compact('inv','desde','hasta'));
    }

}
