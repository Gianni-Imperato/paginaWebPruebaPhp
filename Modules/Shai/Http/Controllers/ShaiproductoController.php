<?php

namespace Modules\Shai\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Shai\Models\{shaiproducto};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ShaiproductoController extends Controller
{
    public function index()
    {

        if (request('buscarpor')){
            $search = request('buscarpor');
            $datos = shaiproducto::buscar($search)->Paginate(5)
                ->withQueryString();
        }else{
            $datos = shaiproducto::orderBy('id', 'desc')->Paginate(5);
        }
        return view('shai::producto.index',compact('datos'));
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
        shaiproducto::insert($datos);
        return redirect('shaiproducto')->with('mensaje','producto agregado con exito');
    }

    public function edit($id)
    {
        $producto = new shaiproducto;
        $producto = shaiproducto::findOrFail($id);
        return view('shai::producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if($request->hasFile('clase')){
            $producto = shaiproducto::findOrFail($id);
            Storage::delete('public/'.$producto->clase);
            $datos['clase']=$request->file('clase')->store('uploads','public');
        }
        shaiproducto::where('id','=',$id)->update($datos);
        return redirect('shaiproducto')->with('mensaje','producto actualizado con exito');

    }
}
