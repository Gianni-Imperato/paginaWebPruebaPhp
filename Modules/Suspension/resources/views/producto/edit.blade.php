@extends('principal')

@section('contenido')

<div class="row">
    
    <div class="row">
        <div class="card-body">
            <form action="{{route('suspproducto.update', $producto->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT');
                @include('suspension::producto.form',['modo'=>'editar'])   
            </form>
        </div>    
    </div>
</div>

@endsection
