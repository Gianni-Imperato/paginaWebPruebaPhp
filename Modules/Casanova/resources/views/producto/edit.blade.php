@extends('principal')

@section('contenido')

<div class="row">
    
    <div class="row">
    
        <form action="{{route('casaproducto.update', $producto->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT');
             @include('casanova::producto.form',['modo'=>'editar'])   
        
        
        </form>
    </div>
        
    </form>
</div>

@endsection
