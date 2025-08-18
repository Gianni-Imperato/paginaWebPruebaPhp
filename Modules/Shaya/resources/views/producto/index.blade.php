@extends('principal')

@section('contenido')

<div class="card">

  <div class='card-body'>
      <div class="row" style="margin-left: 2em" style="margin-top: -5em">
        <span><h3 style="color: #39c">Producto</h3></span>
      </div>

      @if(Session::has('mensaje'))
        {{Session::get('mensaje')}}
      @endif
      <div>
        <nav class="navbar navbar-light bg-light">
          <form class="form-inline">
            <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="Search" :value="request(buscarpor)">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </nav>

      </div>
      <div class="row">
        <table class="table table-hover" style="background-color:  #e6e6e6">
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>FOTO</th>
              <th>COD ALTERNO</th>
              <th>CODIGO</th>
              <th>DESCRIPCION</th>
              <th>PRECIO</th>
              <th>CANTIDAD</th>
              <th>COSTO</th>
              <th>COD_TIENDA</th>
              <th>FECHA ING</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datos as $producto)
              <tr>
                  <td>{{ $producto->id }}</td>
                  <td>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#simple-modal">
                      <img class="img-fluid" src="{{ asset('storage').'/'.$producto->clase }}" data-bs-toggle="modal" data-bs-target="#simple-modal" 
                           data-bigimage="{{ asset('storage').'/'.$producto->clase }}" 
                           data-id="{{$producto->id}}" 
                           data-cod="{{$producto->cod_alter}}" 
                           data-nom="{{$producto->des_arti}}">
                    </a>
                  </td>
                  <td>{{ $producto->cod_alter }}</td>
                  <td>{{ $producto->cod_arti }}</td>
                  <td>{{ $producto->des_arti }}</td>
                  <td>{{ $producto->pvp_arti }}</td>
                  <td>{{ $producto->can_exis }}</td>
                  <td>{{ $producto->coso }}</td>
                  <td>{{ $producto->cod_suc }}</td>
                  <td>{{ $producto->fec_ing }}</td>
                  <td>
                    <a href="{{url('/shayproducto/'.$producto->id.'/edit')}}" class="btn waves-effect waves-light btn-xs btn-info">Edit</a> 
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
        {{ $datos->links()  }}
      </div>
  </div>
</div>
<script src="assets/js/script_modal.js" ></script>

@endsection
