@extends('principal')

@section('contenido')

<div class="row">
    
    <div class="row">
    
        <form action="{{route('pan1producto.update', $producto->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT');
             @include('pan1::producto.form',['modo'=>'editar'])   
        
        
        </form>
    </div>
        
    </form>
</div>

@endsection
