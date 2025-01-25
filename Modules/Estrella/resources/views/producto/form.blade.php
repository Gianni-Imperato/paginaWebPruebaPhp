<h1>{{$modo}} productos</h1>


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
        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$producto->clase}}" width="100" alt="">
    @endif
    <input type="file" name="clase">
</div>

<div class="form-group">
    <input class="btn btn-success" type="submit" value="{{$modo}} datos">
    <a class="btn btn-primary" href="{{url('estrproducto')}}"> Regresar</a>
</div>
