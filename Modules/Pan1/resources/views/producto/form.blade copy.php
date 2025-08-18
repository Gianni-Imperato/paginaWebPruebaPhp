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
    <label for="Codigo">Codigo</label>
    <input type="text" class="form-control" class="form-control" name="Cod_arti" value="{{isset($producto->cod_arti)?$producto->cod_arti:old('Cod_arti')}}"> 
</div>


<div class="form-group">
    <label for="Almacen">Almacen</label>
    <input type="text" class="form-control" class="form-control" name="tipo_pro" value="{{isset($producto->tipo_pro)?$producto->tipo_pro:''}}">
</div>

<div class="form-group">
    <label for="Descripcion">Descripcion</label>
    <input type="text" class="form-control" class="form-control" name="des_arti" value="{{isset($producto->des_arti)?$producto->des_arti:''}}">
</div>

<div class="form-group">
    <label for="PrecioA">Precio 1</label>
    <input type="text" class="form-control" class="form-control" name="pvp_arti" value="{{isset($producto->pvp_arti)?$producto->pvp_arti:''}}">
</div>

<div class="form-group">
    <label for="PrecioB">Precio 2</label>
    <input type="text" class="form-control" class="form-control" name="pvp_arti1" value="{{isset($producto->pvp_arti1)?$producto->pvp_arti1:''}}">
</div>

<div class="form-group">
    <label for="PrecioC">Precio 3</label>
    <input type="text" class="form-control" class="form-control" name="pvp_arti2" value="{{isset($producto->pvp_arti2)?$producto->pvp_arti2:''}}">
</div>

<div class="form-group">
    <label for="PrecioD">Precio 4</label>
    <input type="text" class="form-control" class="form-control" name="pvp_arti3" value="{{isset($producto->pvp_arti3)?$producto->pvp_arti3:''}}">
</div>

<div class="form-group">
    <label for="Cantidad">Cantidad</label>
    <input type="text" class="form-control" class="form-control" name="can_exis" value="{{isset($producto->can_exis)?$producto->can_exis:''}}">
</div>

<div class="form-group">
    <label for="Reservado">Reservado</label>
    <input type="text" class="form-control" name="can_rese" value="{{isset($producto->can_rese)?$producto->can_rese:''}}">
</div>

<div class="form-group">
    <label for="Costo">Costo</label>
    <input type="text" class="form-control" name="costo" value="{{isset($producto->costo)?$producto->costo:''}}">
</div>

<div class="form-group">
    <label for="Status">Status</label>
    <input type="text" class="form-control" name="status" value="{{isset($producto->status)?$producto->status:''}}">
</div>

<div class="form-group">
    <label for="Impuesto">Impuesto</label>
    <input type="text" class="form-control" name="impuesto" value="{{isset($producto->impuesto)?$producto->impuesto:''}}">
</div>

<div class="form-group">
    <label for="Sucursal">Sucursal</label>
    <input type="text" class="form-control" name="cod_suc" value="{{isset($producto->cod_suc)?$producto->cod_suc:''}}">
</div>

<div class="form-group">
    <label for="linea">linea</label>
    <input type="text" class="form-control" name="linea" value="{{isset($producto->linea)?$producto->linea:''}}">
</div>

<div class="form-group">
    <label for="Sub_linea">Sub-linea</label>
    <input type="text" class="form-control" name="sub_linea" value="{{isset($producto->sub_linea)?$producto->sub_linea:''}}">
</div>

<div class="form-group">
    <label for="Clase"></label>
    @if (isset($producto->clase))
        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$producto->clase}}" width="100" alt="">
    @endif
    <input type="file" name="clase">
</div>

<div class="form-group">
    <label for="Grupo">Grupo</label>
    <input type="text" class="form-control" name="grupo_pre" value="{{isset($producto->grupo_pre)?$producto->grupo_pre:''}}">
</div>

<div class="form-group">
    <label for="Fabrica">Casa</label>
    <input type="text" class="form-control" name="fabri_casa" value="{{isset($producto->fabri_casa)?$producto->fabri_casa:''}}">

<div class="form-group">
    <label for="tipovisi">Vision</label>
    <input type="text" class="form-control" name="tipo_visi" value="{{isset($producto->tipo_visi)?$producto->tipo_visi:''}}">
</div>

<div class="form-group">
    <label for="color">Color</label>
    <input type="text" class="form-control" name="color" value="{{isset($producto->color)?$producto->color:''}}">
</div>

<div class="form-group">
    <label for="FechaIng">Fecha</label>
    <input type="date" name="fec_ing" value="{{isset($producto->fec_ing)?$producto->fec_ing:''}}">
</div>

<div class="form-group">
    <label for="FechaVig">Fecha Vig</label>
    <input type="date" name="fec_viG" value="{{isset($producto->fec_vig)?$producto->fec_vig:''}}">
</div>

<div class="form-group">
    <label for="FechaMod">Fecha Actualiza</label>
    <input type="date" name="fec_mod" value="{{isset($producto->fec_mod)?$producto->fec_mod:''}}">
</div>

<div class="form-group">
    <label for="CostoProm">Cost_prom</label>
    <input type="text" class="form-control" name="cost_prom" value="{{isset($producto->cost_prom)?$producto->cost_prom:''}}">
</div>

<div class="form-group">
    <label for="Proveedor">Proveedor</label>
    <input type="text" class="form-control" name="cod_prov" value="{{isset($producto->cod_prov)?$producto->cod_prov:''}}">
</div>

<div class="form-group">
    <label for="Modelo">Modelo</label>
    <input type="text" class="form-control" name="modelo" value="{{isset($producto->modelo)?$producto->modelo:''}}">
</div>

<div class="form-group">
    <label for="Precioante">Precio anterior</label>
    <input type="text" class="form-control" name="pvp_ant" value="{{isset($producto->pvp_ant)?$producto->pvp_ant:''}}">
</div>

<div class="form-group">
    <label for="Precionue">Precio actual</label>
    <input type="text" class="form-control" name="pvp_nue" value="{{isset($producto->pvp_nue)?$producto->pvp_nue:''}}">
</div>

<div class="form-group">
    <label for="VentasG">Exp en venta</label>
    <input type="text" class="form-control" name="vtas_grav" value="{{isset($producto->vtas_grav)?$producto->vtas_grav:''}}">
</div>

<div class="form-group">
    <label for="ComprasG">Exp en compra</label>
    <input type="text" class="form-control" name="comp_grav" value="{{isset($producto->comp_grav)?$producto->comp_grav:''}}">
</div>

<div class="form-group">
    <label for="Codigoalter">Codigo alterno</label>
    <input type="text" class="form-control" name="cod_alter" value="{{isset($producto->cod_alter)?$producto->cod_alter:''}}">
</div>

<div class="form-group">
    <label for="Promocion">Promocion</label>
    <input type="text" class="form-control" name="promocion" value="{{isset($producto->promocion)?$producto->promocion:''}}">
</div>

<div class="form-group">
    <label for="inventario">Stado de inventario</label>
    <input type="text" class="form-control" name="inventario" value="{{isset($producto->inventario)?$producto->inventario:''}}">
</div>

<div class="form-group">
    <label for="canvtas">Cantidad permitida en venta</label>
    <input type="text" class="form-control" name="can_vtas" value="{{isset($producto->can_vtas)?$producto->can_vtas:''}}">
</div>

<div class="form-group">
    <label for="descuento">Descuento permitido hasta</label>
    <input type="text" class="form-control" name="descuento" value="{{isset($producto->descuento)?$producto->descuento:''}}">
</div>

<div class="form-group">
    <label for="stainv">Status inventario</label>
    <input type="text" class="form-control" name="sta_inv" value="{{isset($producto->sta_inv)?$producto->sta_inv:''}}">
</div>

<div class="form-group">
    <label for="Factor">factor de ganancia</label>
    <input type="text" class="form-control" name="factor" value="{{isset($producto->factor)?$producto->factor:''}}">
</div>

<div class="form-group">
    <label for="Moneda">Tipo de moneda</label>
    <input type="text" class="form-control" name="tipo_divi" value="{{isset($producto->tipo_divi)?$producto->tipo_divi:''}}">
</div>


<div class="form-group">
    <label for="costodivi">Costo en Divisa</label>
    <input type="text" class="form-control" name="costo_divi" value="{{isset($producto->costo_divi)?$producto->costo_divi:''}}">
</div>

<div class="form-group">
    <input class="btn btn-success" type="submit" value="{{$modo}} datos">
    <a class="btn btn-primary" href="{{url('producto')}}"> Regresar</a>
</div>
