<?php

namespace Modules\Suspension\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Suspension\Models\{suspproducto};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SuspproductoController extends Controller
{
    public function index()
    {
        if (request('buscarpor')){
            $search = request('buscarpor');
            $datos = suspproducto::buscar($search)->Paginate(10)
                ->withQueryString();
        }else{
            $datos = suspproducto::orderBy('id', 'desc')->Paginate(10);
        }
        return view('suspension::producto.index',compact('datos'));

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
        suspproducto::insert($datos);
        return redirect('suspproducto')->with('mensaje','producto agregado con exito');
    }

    public function edit($id)
    {
        $producto = new suspproducto;
        $producto = suspproducto::findOrFail($id);
        return view('suspension::producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if($request->hasFile('clase')){
            $producto = suspproducto::findOrFail($id);
            Storage::delete('public/'.$producto->clase);
            $datos['clase']=$request->file('clase')->store('uploads','public');
        }
        producto::where('id','=',$id)->update($datos);
        return redirect('suspproducto')->with('mensaje','producto actualizado con exito');

    }
}
