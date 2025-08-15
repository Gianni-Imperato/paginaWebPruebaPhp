<?php

namespace Modules\Super1212\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Super1212\Models\{s121invtra};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class S121invtraController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $inv = new s121invtra;
        $inv = s121invtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('super1212::inventory.index', compact('inv','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $inv = new s121invtra;
        $inv = s121invtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('super1212::inventory.index', compact('inv','desde','hasta'));
    }

}
