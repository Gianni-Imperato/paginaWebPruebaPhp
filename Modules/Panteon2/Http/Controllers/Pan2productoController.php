<?php

namespace Modules\Panteon2\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Panteon2\Models\{pan2producto};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class Pan2productoController extends Controller
{
    public function index()
    {
        if (request('filtroa')){
            $searcha = request('filtroa');
            $searchb = request('filtrob');
            $datos = pan2producto::buscar($searcha)->buscar($searchb)->Paginate(50)->withQueryString();
        }else{
            $datos = pan2producto::orderBy('id', 'desc')->Paginate(50);
        }
        return view('panteon2::producto.index',compact('datos'));

    }

    public function store(Request $request)
    {
        $campo=[
            'Cod_arti'=>'required|string|max:7',
            'tipo_pro'=>'required|int',
            'des_arti'=>'required|string|max:200',
            'clase'=>'required|max:10000|mimes:jpeg,pnp,jpg'
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'clase.required'=>'La foto es requerida'
        ];
        $this->validate($request,$campo,$mensaje);
        $datos = request()->except('_token');
        if($request->hasFile('clase')){
            $datos['clase']=$request->file('clase')->store('uploads','public');
        }
        pan2producto::insert($datos);
        return redirect('pan2producto')->with('mensaje','producto agregado con exito');
    }

    public function edit($id)
    {
        $producto = new pan2producto;
        $producto = pan2producto::findOrFail($id);
        return view('panteon2::producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if($request->hasFile('clase')){
            $producto = pan2producto::findOrFail($id);
            Storage::delete('public/'.$producto->clase);
            $datos['clase']=$request->file('clase')->store('uploads','public');
        }
        pan2producto::where('id','=',$id)->update($datos);
        return redirect('pan2producto')->with('mensaje','producto actualizado con exito');

    }
}
