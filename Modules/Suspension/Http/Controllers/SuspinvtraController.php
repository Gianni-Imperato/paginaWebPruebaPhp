<?php

namespace Modules\Suspension\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Suspension\Models\{suspinvtra};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SuspinvtraController extends Controller
{
    public function index()
    {

        $desde = date('Y-m-d');
        $hasta = date('Y-m-d');

        $inv = new suspinvtra;
        $inv = suspinvtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('suspension::inventory.index', compact('inv','desde','hasta'));

    }

    public function show(Request $record)
    {
        $desde = $record->desde;
        $hasta = $record->hasta;
        $inv = new suspinvtra;
        $inv = suspinvtra::where('fecha', '>=', $desde)
                        ->where('fecha', '<=', $hasta)
                        ->orderby('documento', 'asc')
                        ->get();
        return view('suspension::inventory.index', compact('inv','desde','hasta'));
    }

}
