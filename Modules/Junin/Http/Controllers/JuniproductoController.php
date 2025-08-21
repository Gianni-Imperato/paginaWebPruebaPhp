<?php

namespace Modules\Junin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Junin\Models\{juniproducto};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class JuniproductoController extends Controller
{
    public function index()
    {
        if (request('filtroa')){
            $searcha = request('filtroa');
            $searchb = request('filtrob');
            $datos = juniproducto::buscar($searcha)->buscar($searchb)->Paginate(50)->withQueryString();
        }else{
            $datos = juniproducto::orderBy('id', 'desc')->Paginate(50);
        }
        return view('junin::producto.index',compact('datos'));

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
        juniproducto::insert($datos);
        return redirect('juniproducto')->with('mensaje','producto agregado con exito');
    }

    public function edit($id)
    {
        $producto = new juniproducto;
        $producto = juniproducto::findOrFail($id);
        return view('junin::producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if($request->hasFile('clase')){
            $producto = juniproducto::findOrFail($id);
            Storage::delete('public/'.$producto->clase);
            $datos['clase']=$request->file('clase')->store('uploads','public');
        }
        juniproducto::where('id','=',$id)->update($datos);
        return redirect('juniproducto')->with('mensaje','producto actualizado con exito');

    }
}
