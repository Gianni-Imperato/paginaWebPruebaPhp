@extends('principal')

@section('contenido')

<div class="row">
    
    <div class="row">
        <div class="card-body">
            <form action="{{route('pan2producto.update', $producto->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT');
                @include('panteon2::producto.form',['modo'=>'editar'])   
            </form>
        </div>    
    </div>        
</div>

@endsection
