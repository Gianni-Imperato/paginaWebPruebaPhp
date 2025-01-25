@extends('principal')
@section('contenido')

<div class="container">
    <div class="row"></div>

        <div class="row">
            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Super Panteon I</h4>
                        <div id="cardCollpase1" class="collapse pt-3 show" dir="ltr">
                            <div id="datos">
                                <div id="panteonI"></div>
                                <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Total Compras</td>
                                        <td style="width: 6rem; text-align: right">20.00</td>
                                        <input type="hidden" value="Compras">
                                        <input type="hidden" value="20">
            
                                    </tr>
                                    <tr>
                                        <td>Total Ventas</td>
                                        <td style="width: 6rem; text-align: right">30.00</td>
                                        <input type="hidden" value="Ventas">
                                        <input type="hidden" value="30">
            
                                    </tr>
                                    <tr>
                                        <td>Total Ingreso</td>
                                        <td style="width: 6rem; text-align: right">25.00</td>
                                        <input type="hidden" value="Ingreso">
                                        <input type="hidden" value="25">
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Super Panteon II</h4>
                        <div id="cardCollpase2" class="collapse pt-3 show" dir="ltr">
                            <div id="datos2">
                                <div id="panteonII"></div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Compras</td>
                                            <td style="width: 6rem; text-align: right">10.00</td>
                                            <input type="hidden" value="Compras">
                                            <input type="hidden" value="10.00">
                                        </tr>
                                        <tr>
                                            <td>Total Ventas</td>
                                            <td style="width: 6rem; text-align: right">20.00</td>
                                            <input type="hidden" value="Ventas">
                                            <input type="hidden" value="20.00">
                
                                        </tr>
                                        <tr>
                                            <td>Total Ingreso</td>
                                            <td style="width: 6rem; text-align: right">21.20</td>
                                            <input type="hidden" value="Ingreso">
                                            <input type="hidden" value="21.20">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Super Estrella</h4>
                        <div id="cardCollpase3" class="collapse pt-3 show" dir="ltr">
                            <div id="datos3">
                            <div id="estrella"></div>
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Total Compras</td>
                                        <td style="width: 6rem; text-align: right">65.00</td>
                                        <input type="hidden" value="Compras">
                                        <input type="hidden" value="65.00">
                                    </tr>
                                    <tr>
                                        <td>Total Ventas</td>
                                        <td style="width: 6rem; text-align: right">102.00</td>
                                        <input type="hidden" value="Ventas">
                                        <input type="hidden" value="102.00">
            
                                    </tr>
                                    <tr>
                                        <td>Total Ingreso</td>
                                        <td style="width: 6rem; text-align: right">99.98</td>
                                        <input type="hidden" value="Ingreso">
                                        <input type="hidden" value="99.98">
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>

        <div class="row">
            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Super Shai</h4>
                        <div id="cardCollpase4" class="collapse pt-3 show" dir="ltr">
                            <div id="datos4">
                                <div id="shai"></div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Compras</td>
                                            <td style="width: 6rem; text-align: right">45.00</td>
                                            <input type="hidden" value="Compras">
                                            <input type="hidden" value="45">
            
                                        </tr>
                                        <tr>
                                            <td>Total Ventas</td>
                                            <td style="width: 6rem; text-align: right">1030.00</td>
                                            <input type="hidden" value="Ventas">
                                            <input type="hidden" value="1030">
            
                                        </tr>
                                        <tr>
                                            <td>Total Ingreso</td>
                                            <td style="width: 6rem; text-align: right">1029.00</td>
                                            <input type="hidden" value="Ingreso">
                                            <input type="hidden" value="1029">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Super Junin</h4>
                        <div id="cardCollpase5" class="collapse pt-3 show" dir="ltr">
                            <div id="datos5">
                                <div id="junin"></div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Compras</td>
                                            <td style="width: 6rem; text-align: right">542.00</td>
                                            <input type="hidden" value="Compras">
                                            <input type="hidden" value="542.00">
                                        </tr>
                                        <tr>
                                            <td>Total Ventas</td>
                                            <td style="width: 6rem; text-align: right">2020.00</td>
                                            <input type="hidden" value="Ventas">
                                            <input type="hidden" value="2020.00">
            
                                        </tr>
                                        <tr>
                                            <td>Total Ingreso</td>
                                            <td style="width: 6rem; text-align: right">2021.20</td>
                                            <input type="hidden" value="Ingreso">
                                            <input type="hidden" value="2021.20">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>    
                    </div> <!-- collapsed end -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a data-toggle="collapse" href="#cardCollpase6" role="button" aria-expanded="false" aria-controls="cardCollpase6"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Super Casanova</h4>
                        <div id="cardCollpase6" class="collapse pt-3 show" dir="ltr">
                            <div id="datos6">
                                <div id="casanova"></div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Compras</td>
                                            <td style="width: 6rem; text-align: right">35.00</td>
                                            <input type="hidden" value="Compras">
                                            <input type="hidden" value="35.00">
                                        </tr>
                                        <tr>
                                            <td>Total Ventas</td>
                                            <td style="width: 6rem; text-align: right">152.80</td>
                                            <input type="hidden" value="Ventas">
                                            <input type="hidden" value="152.80">
            
                                        </tr>
                                        <tr>
                                            <td>Total Ingreso</td>
                                            <td style="width: 6rem; text-align: right">149.98</td>
                                            <input type="hidden" value="Ingreso">
                                            <input type="hidden" value="149.98">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end col-->


        <div class="row">
            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a data-toggle="collapse" href="#cardCollpase7" role="button" aria-expanded="false" aria-controls="cardCollpase7"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Super Victoria</h4>
                        <div id="cardCollpase7" class="collapse pt-3 show" dir="ltr">
                            <div id="datos7">
                                <div id="victoria"></div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Compras</td>
                                            <td style="width: 6rem; text-align: right">45.00</td>
                                            <input type="hidden" value="Compras">
                                            <input type="hidden" value="45">
            
                                        </tr>
                                        <tr>
                                            <td>Total Ventas</td>
                                            <td style="width: 6rem; text-align: right">1030.00</td>
                                            <input type="hidden" value="Ventas">
                                            <input type="hidden" value="1030">
            
                                        </tr>
                                        <tr>
                                            <td>Total Ingreso</td>
                                            <td style="width: 6rem; text-align: right">1029.00</td>
                                            <input type="hidden" value="Ingreso">
                                            <input type="hidden" value="1029">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase8"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Super Shaya</h4>
                        <div id="cardCollpase8" class="collapse pt-3 show" dir="ltr">
                            <div id="datos8">
                                <div id="shaya"></div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Compras</td>
                                            <td style="width: 6rem; text-align: right">542.00</td>
                                            <input type="hidden" value="Compras">
                                            <input type="hidden" value="542.00">
                                        </tr>
                                        <tr>
                                            <td>Total Ventas</td>
                                            <td style="width: 6rem; text-align: right">2020.00</td>
                                            <input type="hidden" value="Ventas">
                                            <input type="hidden" value="2020.00">
            
                                        </tr>
                                        <tr>
                                            <td>Total Ingreso</td>
                                            <td style="width: 6rem; text-align: right">2021.20</td>
                                            <input type="hidden" value="Ingreso">
                                            <input type="hidden" value="2021.20">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>    
                    </div> <!-- collapsed end -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a data-toggle="collapse" href="#cardCollpase9" role="button" aria-expanded="false" aria-controls="cardCollpase9"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Super Suspensión</h4>
                        <div id="cardCollpase9" class="collapse pt-3 show" dir="ltr">
                            <div id="datos9">
                                <div id="suspension"></div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Compras</td>
                                            <td style="width: 6rem; text-align: right">35.00</td>
                                            <input type="hidden" value="Compras">
                                            <input type="hidden" value="35.00">
                                        </tr>
                                        <tr>
                                            <td>Total Ventas</td>
                                            <td style="width: 6rem; text-align: right">152.80</td>
                                            <input type="hidden" value="Ventas">
                                            <input type="hidden" value="152.80">
            
                                        </tr>
                                        <tr>
                                            <td>Total Ingreso</td>
                                            <td style="width: 6rem; text-align: right">149.98</td>
                                            <input type="hidden" value="Ingreso">
                                            <input type="hidden" value="149.98">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end col-->
    </div>
</div>

@endsection