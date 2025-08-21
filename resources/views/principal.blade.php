<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Portal Corporativo | Corporación Super Repuestos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/estilo.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body onload="miFuncion()">
        <div id="app">
            <!-- Begin page -->
            <div id="wrapper">

                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <li class="d-none d-sm-block">
                        </li>
            
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge badge-danger rounded-circle noti-icon-badge">0</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="m-0 text-white">
                                        <span class="float-right">
                                            <a href="" class="text-light">
                                                <small>Vaciar</small>
                                            </a>
                                        </span>Notification
                                    </h6>
                                </div>

                                <div class="slimscroll noti-scroll">

                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    Ver todos
                                    <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name ml-1">
                                    {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item                                 item-->

                                <x-responsive-nav-link :href="route('profile.edit')">
                                    <i class="fe-user"></i>
                                    <span>Perfil</span>
                                </x-responsive-nav-link>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i class="fe-log-out"></i>
                                        <span>Cerrar sesión</span>
                                    </x-responsive-nav-link>
                                </form>

                            </div>
                        </li>
                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="{{ route('home') }}" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{asset('assets/images/pruebaLogo.png')}}" alt="Logo Corporacion Super Repuestos" height="36">
                                <!-- <span class="logo-lg-text-light">Xeria</span> -->
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                    </ul>

                    <li class="dropdown dropdown-mega d-none d-lg-block">
                        <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="{{url('/dashboard')}}" role="button" aria-haspopup="false" aria-expanded="false">
                            <h4 style="padding: 10px; color:#6c757d">
                                <span>Gráficos</span>
                            </h4>
                        </a>
                    </li>

                </div>
                <!-- end Topbar -->

                <!-- ========== Left Sidebar Start ========== -->
                <div class="left-side-menu">
                    <div class="slimscroll-menu">
                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
                            @include('layouts.sidebar')
                        </div>
                        <!-- End Sidebar -->
                        <div class="clearfix"></div>

                    </div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->
                
                <!-- ============================================================== -->
                <!-- Start Page Content here -->
                <!-- ============================================================== -->

                <div class="content-page">
                    @yield('contenido')
                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>© <span>2025 Copyright</span> <strong class="px-1 sitename">Corporación <strong>SUPER</strong> Repuestos</strong>
                                        <span>All Rights Reserved</span>
                                    </p> 
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div>

                <!-- ============================================================== -->
                <!-- End Page content -->
                <!-- ============================================================== -->


            </div>
            <!-- END wrapper -->
        </div>


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/apexcharts.init.js"></script>

        <!-- App js -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="assets/js/app.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="assets/js/grafica.js"></script>

    </body>
</html>