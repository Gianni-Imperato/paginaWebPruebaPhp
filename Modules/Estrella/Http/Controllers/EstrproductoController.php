<?php

namespace Modules\Estrella\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Estrella\Models\{estrproducto};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class EstrproductoController extends Controller
{
    public function index()
    {
        if (request('filtroa')){
            $searcha = request('filtroa');
            $searchb = request('filtrob');
            $datos = estrproducto::buscar($searcha)->buscar($searchb)->Paginate(50)->withQueryString();
        }else{
            $datos = estrproducto::orderBy('id', 'desc')->Paginate(50);
        }
        return view('estrella::producto.index',compact('datos'));

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
        estrproducto::insert($datos);
        return redirect('estrproducto')->with('mensaje','producto agregado con exito');
    }

    public function edit($id)
    {
        $producto = new estrproducto;
        $producto = estrproducto::findOrFail($id);
        return view('estrella::producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if($request->hasFile('clase')){
            $producto = estrproducto::findOrFail($id);
            Storage::delete('public/'.$producto->clase);
            $datos['clase']=$request->file('clase')->store('uploads','public');
        }
        estrproducto::where('id','=',$id)->update($datos);
        return redirect('estrproducto')->with('mensaje','producto actualizado con exito');

    }
}
