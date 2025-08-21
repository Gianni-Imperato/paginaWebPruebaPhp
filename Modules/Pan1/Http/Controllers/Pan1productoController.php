<?php

namespace Modules\Pan1\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Pan1\Models\{pan1producto};
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class Pan1productoController extends Controller
{
    public function index()
    {
        if (request('filtroa')){
            $searcha = request('filtroa');
            $searchb = request('filtrob');
            $datos = pan1producto::buscar($searcha)->buscar($searchb)->Paginate(50)->withQueryString();
        }else{
            $datos = pan1producto::orderBy('id', 'desc')->Paginate(50);
        }
        return view('pan1::producto.index',compact('datos'));

    }

    public function create()
    {
        //return view('pan1::producto.create');
    }

    public function store(Request $request)
    {
        //$datos = request()->all();

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
        pan1producto::insert($datos);
        return redirect('pan1producto')->with('mensaje','producto agregado con exito');
    }

    public function show($id)
    {
        $producto = new pan1producto;
        $producto = pan1producto::findOrFail($id);
        return view('pan1::producto.ver', compact('producto'));
    }

    public function edit($id)
    {


        $producto = new pan1producto;
        $producto = pan1producto::findOrFail($id);
        return view('pan1::producto.edit', compact('producto'));

    }

    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if($request->hasFile('clase')){
            $producto = pan1producto::findOrFail($id);
            Storage::delete('public/'.$producto->clase);
            $datos['clase']=$request->file('clase')->store('uploads','public');
        }
        pan1producto::where('id','=',$id)->update($datos);
        return redirect('pan1producto')->with('mensaje','producto actualizado con exito');

    }

    public function destroy($id)
    {
        /*
        $producto = pan1producto::findOrFail($id);
        if(Storage::delete('public/'.$producto->clase)){
            pan1producto::destroy($id);
        }
        return redirect('pan1producto')->with('mensaje','producto eliminado con exito');
        //    return redirect()->route('curso.index', $curso);
        */
    }
}
