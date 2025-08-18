@extends('principal')

@section('contenido')


<div class="row">

    <div class="card-body">

        <div class="card-header bg-info">
            <h5>Detalle Productos</h1>
        </div>
    
        <div class="form-group">
            @if (isset($producto->clase))
                <div class = "column col-lg-6">
                    <div class="my-0">
                        <span><h4>{{$producto->cod_alter}}</h1> </span>
                    </div>    
                    <div class="my-0">
                        <span><h4>{{$producto->des_arti}}</h1> </span>
                    </div>    
                </div>
                <div class = "row">
                    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$producto->clase}}" width="300" alt="">
                </div>
            @endif
            <a class="btn btn-primary" href="{{url('pan1producto')}}"> Regresar</a>

        </div>
    
    </div>
    
</div>

@endsection




