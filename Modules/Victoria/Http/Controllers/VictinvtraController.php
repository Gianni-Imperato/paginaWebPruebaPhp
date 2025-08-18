<?php

namespace Modules\Victoria\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Victoria\Models\{victinvtra};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class VictinvtraController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $inv = new victinvtra;
        $inv = victinvtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('victoria::inventory.index', compact('inv','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $inv = new victinvtra;
        $inv = victinvtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('victoria::inventory.index', compact('inv','desde','hasta'));
    }

}
