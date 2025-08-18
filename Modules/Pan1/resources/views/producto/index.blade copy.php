@extends('principal')

@section('contenido')


@if(Session::has('mensaje'))
  {{Session::get('mensaje')}}
@endif




<div class="row">
  <a href="create" class="btn btn-outline-success my-2 my-sm-0"> Nuevo</a>
</div>

<div>
  <nav class="navbar navbar-light bg-light">
    <form class="form-inline">
      <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="Search" :value="request(buscarpor)">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </nav>

</div>

  <!--
  <form class="grown" autocomplete="off">
    <input name="search" type="search" class="mt-1 block w-1/3" placeholder="Buscar" :value="request(search)" >
  </form>
  -->


<div class="row">
    
    <table class="table table-hover" style="background-color:  #e6e6e6">
      <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>FOTO</th>
          <th>COD ALTERNO</th>
          <th>CODIGO</th>
          <th>TIPO</th>
          <th>DESCRIPCION</th>
          <th>PRECIO</th>
          <th>PRECIO 1</th>
          <th>PRECIO 2</th>
          <th>PRECIO 3</th>
          <th>CANTIDAD</th>
          <th>RESERVAS</th>
          <th>COSTO</th>
          <th>STATUS</th>
          <th>IMPUESTO</th>
          <th>COD_TIENDA</th>
          <th>LINEA</th>
          <th>SUB LINEA</th>
          <th>GRUPO</th>
          <th>FABRICA</th>
          <th>VISION</th>
          <th>COLOR</th>
          <th>FECHA ING</th>
          <th>FECHA VIG</th>
          <th>FECHA MOD</th>
          <th>COSTO PROM</th>
          <th>COD PROV</th>
          <th>MODELO</th>
          <th>PRECIO ANT</th>
          <th>PRECIO NUE</th>
          <th>EXP VENTA</th>
          <th>EXP COMPR</th>
          <th>HORA ING</th>
          <th>HORA VIG</th>
          <th>PROMOCION</th>
          <th>INVENTARIO</th>
          <th>CANT VTA PERMI</th>
          <th>DESCUENTO</th>
          <th>STATUS INV</th>
          <th>FACTOR</th>
          <th>TIPO DIVISA</th>
          <th>COSTO DIVISA</th>
          <th>CREATE</th>
          <th>UPDATE</th> 
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datos as $producto)
          <tr>
              <td>{{ $producto->id }}</td>

              <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->clase }}" width="100" alt="">
              </td>
              <td>{{ $producto->cod_alter }}</td>
              <td>{{ $producto->cod_arti }}</td>
              <td>{{ $producto->tipo_pro }}</td>
              <td>{{ $producto->des_arti }}</td>
              <td>{{ $producto->pvp_arti }}</td>
              <td>{{ $producto->pvp_arti1 }}</td>
              <td>{{ $producto->pvp_arti2 }}</td>
              <td>{{ $producto->pvp_arti3 }}</td>
              <td>{{ $producto->can_exis }}</td>
              <td>{{ $producto->can_rese }}</td>
              <td>{{ $producto->coso }}</td>
              <td>{{ $producto->status }}</td>
              <td>{{ $producto->impuesto }}</td>
              <td>{{ $producto->cod_suc }}</td>
              <td>{{ $producto->linea }}</td>
              <td>{{ $producto->sub_linea }}</td>
              <td>{{ $producto->grupo_pre }}</td>
              <td>{{ $producto->fabri_casa }}</td>
              <td>{{ $producto->tipo_visi }}</td>
              <td>{{ $producto->color }}</td>
              <td>{{ $producto->fec_ing }}</td>
              <td>{{ $producto->fec_vig }}</td>
              <td>{{ $producto->fec_mod }}</td>
              <td>{{ $producto->cost_prom }}</td>
              <td>{{ $producto->cod_prov }}</td>
              <td>{{ $producto->modelo }}</td>
              <td>{{ $producto->pvp_ant }}</td>
              <td>{{ $producto->pvp_nue }}</td>
              <td>{{ $producto->vtas_grav }}</td>
              <td>{{ $producto->comp_grav }}</td>
              <td>{{ $producto->promocion }}</td>
              <td>{{ $producto->inventario }}</td>
              <td>{{ $producto->can_vtas }}</td>
              <td>{{ $producto->descuento }}</td>
              <td>{{ $producto->sta_inv }}</td>
              <td>{{ $producto->factor }}</td>
              <td>{{ $producto->tipo_divi }}</td>
              <td>{{ $producto->costo_divi }}</td>
              <td>{{ $producto->created_at }}</td>
              <td>{{ $producto->updated_at }}</td>
              <td>
                 <a href="{{url('/producto/'.$producto->id.'/edit')}}" class="btn btn-warning">Edit</a> 
                 | 
                <form action="{{route('producto.destroy', $producto->id)}}" class="d-inline" method="post">
                  @csrf
                  {{ method_field('DELETE')}}
                  <input class="btn btn-danger" type="submit" onclick="return confirm('Quires eliminar el registro?')" value="Eliminar">
                </form>

              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
    {{ $datos->links()  }}
</div>



@endsection
