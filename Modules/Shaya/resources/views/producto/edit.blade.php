@extends('principal')

@section('contenido')

<div class="row">
    
    <div class="row">
    
        <form action="{{route('shayproducto.update', $producto->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT');
             @include('shaya::producto.form',['modo'=>'editar'])   
        
        
        </form>
    </div>
        
    </form>
</div>

@endsection
