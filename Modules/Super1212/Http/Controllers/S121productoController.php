<?php

namespace Modules\Super1212\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Super1212\Models\{s121producto};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class S121productoController extends Controller
{
    public function index()
    {
        if (request('filtroa')){
            $searcha = request('filtroa');
            $searchb = request('filtrob');
            $datos = s121producto::buscar($searcha)->buscar($searchb)->Paginate(50)->withQueryString();
        }else{
            $datos = s121producto::orderBy('id', 'desc')->Paginate(50);
        }
        return view('super1212::producto.index',compact('datos'));

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
        s121producto::insert($datos);
        return redirect('s121producto')->with('mensaje','producto agregado con exito');
    }

    public function edit($id)
    {
        $producto = new s121producto;
        $producto = s121producto::findOrFail($id);
        return view('super1212::producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if($request->hasFile('clase')){
            $producto = s121producto::findOrFail($id);
            Storage::delete('public/'.$producto->clase);
            $datos['clase']=$request->file('clase')->store('uploads','public');
        }
        s121producto::where('id','=',$id)->update($datos);
        return redirect('s121producto')->with('mensaje','producto actualizado con exito');

    }
}
