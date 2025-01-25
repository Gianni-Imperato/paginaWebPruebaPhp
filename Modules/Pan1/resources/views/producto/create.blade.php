@extends('principal')

@section('contenido')

<div class="row">
    
    <form action="{{route('pan1producto.store')}}" method="post" enctype="multipart/form-data">
        @csrf
         @include('pan1::producto.form',['modo'=>'Guardar']);       
    </form>
</div>

@endsection
