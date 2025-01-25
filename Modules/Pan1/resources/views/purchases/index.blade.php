@extends('principal')
    

@section('contenido')


    <?php 

        //foreach ($ctapag as $item) {
        //    print_r($item->id);
        //    die;
    // }

    ?>

    <div class="card">

        <div class='card-body'>
            <div class="row" style="margin-left: 2em" style="margin-top: -5em">
              <span><h3 style="color: #39c">Reporte</h3></span>
            </div>

            <form action="{{route('pan1siped.show')}}" method="post">
                @csrf
                <div class="row">
                    <div class="r col-md-3">
                        <div class="form-group">
                            <label>Fecha desde</label>
                            <input id="fec_desde" type="date" name="desde" placeholder=""  value="{{$desde}}"  min="2000-01-01" max="2050-12-31" style="border-radius: 5px; border: 1px solid #39c" onclick="searchcodigo()">
                        </div>
                    </div>

                    <div class="r col-md-3">
                        <div class="form-group">
                            <label>Fecha hasta</label>
                            <input id="fec_hasta" type="date" name="hasta" placeholder=""  value="{{$hasta}}"  min="2000-01-01" max="2050-12-31" style="border-radius: 5px; border: 1px solid #39c">
                        </div>
                    </div>

                    <div class="r col-md-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Generar Reporte</button>
                            <input type="hidden" id="tra" name="purchase" value="{{$ctapag}}">
                        </div>
                    </div>
                </div>
                <br>
            </form>

            <div class="row" id = "addtable">
            <table  id="myTable" class="table table-hover" style="background-color:  #e6e6e6">
                <thead >
                <tr>
                    <th style="col-md-2 header-grid"></th>
                    <th class="col-md-2 header-grid">Fecha Ingreso</th>
                    <th class="col-md-2 header-grid">Nro Pedido</th>
                    <th class="col-md-2 header-grid">Nro Documento</th>
                    <th class="col-md-2 header-grid">Fecha Documento</th>
                    <th class="col-md-2 header-grid">Proveedor</th>
                    <th class="col-md-2 header-grid">Status</th>
                    <th class="col-md-2 header-grid">Moneda</th>
                    <th class="col-md-2 header-grid">Tasa</th>
                    <th class="col-md-2 header-grid">Monto</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                </tr>
                </tbody>
            </table> 
            </div>

        </div>


    </div>

    <script src="assets/js/script_purchase.js" ></script>


@endsection



