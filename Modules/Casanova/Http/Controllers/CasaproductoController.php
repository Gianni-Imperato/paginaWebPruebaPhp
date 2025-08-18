<?php

namespace Modules\Casanova\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Casanova\Models\{casaproducto};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CasaproductoController extends Controller
{
    public function index()
    {
        if (request('buscarpor')){
            $search = request('buscarpor');
            $datos = casaproducto::buscar($search)->Paginate(30)
                ->withQueryString();
        }else{
            $datos = casaproducto::orderBy('id', 'desc')->Paginate(30);
        }
        return view('casanova::producto.index',compact('datos'));

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
        casaproducto::insert($datos);
        return redirect('casaproducto')->with('mensaje','producto agregado con exito');
    }

    public function edit($id)
    {
        $producto = new casaproducto;
        $producto = casaproducto::findOrFail($id);
        return view('casanova::producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if($request->hasFile('clase')){
            $producto = casaproducto::findOrFail($id);
            Storage::delete('public/'.$producto->clase);
            $datos['clase']=$request->file('clase')->store('uploads','public');
        }
        casaproducto::where('id','=',$id)->update($datos);
        return redirect('casaproducto')->with('mensaje','producto actualizado con exito');

    }
}
