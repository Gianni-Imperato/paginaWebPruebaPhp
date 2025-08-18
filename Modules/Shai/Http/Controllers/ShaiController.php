<?php

namespace Modules\Shai\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Shai\Models\producto;

class ShaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $producto = new producto();
        $producto = producto::all();
        //return view('shai::producto.inv');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shai::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('shai::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('shai::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
