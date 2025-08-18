<div class="card-header bg-info">
    <h5>{{$modo}} productos</h1>

</div>

@if(count($errors)>0)

    <div class="alert alert-success alert-dismissible" role="alert">
      <ul>  
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <button type="button" class="close" data-diswiss='alert' aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>    
@endif

<div class="form-group">
    <label for="Clase"></label>
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
    <input type="file" name="clase">
</div>

<div class="form-group">
    <input class="btn btn-success" type="submit" value="Aceptar">
    <a class="btn btn-primary" href="{{url('shaiproducto')}}"> Regresar</a>
</div>
