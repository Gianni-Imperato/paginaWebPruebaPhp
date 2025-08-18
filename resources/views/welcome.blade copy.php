<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

  <link href="assets/img/logoCorporacionPestanas.ico" rel="Icono Corporación Super Repuestos">
  <link href="assets/img/logoCorporacionPestanas.ico" rel="Icono Corporación Super Repuestos">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />


  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


    </head>


    <body class="">

        <header id="header" class="header d-flex align-items-center fixed-top">
            <!-- 
                <body class="font-sans antialiased">
                <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" /> 
            -->
            <!-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">-->
            <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

                    <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
                        <img src="assets/images/pruebaLogo.png" alt="" height="36">
                        <span></span>
                    </a>
                
                    <nav id="navmenu" class="navmenu">
                        <ul>
                            <li><a href="#hero" class="active">Inicio<br></a></li>
                            <li><a href="#about">Nosotros</a></li>
                            <li><a href="#services">Servicios</a></li>
                            <li><a href="#portfolio">Productos</a></li>
                            <li><a href="#videos">Promociones</a></li>
                            <li class="dropdown"><a href="#stores"><span>Tiendas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="https://corpsuperrepuestos.com/portfolio-details.html">Super Casanova</a></li>
                                <li class="dropdown"><a href="#"><span>Super Shaya</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="https://corpsuperrepuestos.com/servicioTallerSuperShaya.html">Taller de Servicio | Super Shaya</a></li>
                                </ul>
                                </li>
                                <li class="dropdown"><a href="#"><span>Super Panteón 1</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="https://corpsuperrepuestos.com/servicioTallerSuperPanteonUno.html">Taller de Servicio | Super Panteón 1</a></li>
                                </ul>
                                </li>
                                <li><a href="#">Super Shai</a></li>
                                <li><a href="#">Super Victoria</a></li>
                                <li><a href="#">Super Junín</a></li>
                                <li><a href="#">Super Panteón 2</a></li>
                                <li><a href="#">Super Suspensión</a></li>
                                <li><a href="#">Super Estrella</a></li>
                                <li><a href="#">Super Repuestos1212</a></li>
                
                            </ul>
                            </li>
                            <li><a href="#contact">Contacto</a></li>
                        </ul>
                        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                    </nav>

                    <a class="btn-getstarted" href="index.html#about">¡Enterate!</a>

                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
        </header>


        <main class="main">

            <!-- Hero Section -->
            <section id="hero" class="hero section dark-background">
        
              <img src="https://corpsuperrepuestos.com/assets/img/imagenFondoInicio.jpg" alt="imagenFondo" data-aos="fade-in">
        
              <div class="container">
        
                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-xl-6 col-lg-8">
                    <!-- <h2>Corporación <strong><span>SUPER</span></strong></h2> -->
                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_2" data-name="Capa 2" viewBox="0 0 586.75 220.71">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: #fff;
                          }
                        </style>
                      </defs>
                      <g id="Capa_1-2" data-name="Capa 1">
                        <path class="cls-1" d="M33.91,19.23c-.33,0-.58-.31-.49-.64l3.43-13.09c.33-1.24-.6-2.46-1.87-2.46h-4.57c-1.13,0-2.11.77-2.4,1.87l-8.45,32.27c-.17.65.32,1.28.99,1.28h6.2c.87,0,1.63-.59,1.85-1.43l3.5-13.37c.06-.22.26-.38.49-.38h18.95c.33,0,.58.31.49.64l-2.39,9.12c-1.31,4.99-5.77,8.46-10.86,8.46H5.36c-3.5,0-6.06-3.36-5.16-6.78L7.15,8.17C8.41,3.35,12.71,0,17.63,0h32.76c3.99,0,6.89,3.82,5.87,7.72l-2.91,11.13c-.06.22-.26.38-.49.38h-18.95ZM441.86,19.23c.23,0,.43-.16.49-.38l2.91-11.13c1.02-3.9-1.89-7.72-5.87-7.72h-32.76c-4.92,0-9.23,3.35-10.49,8.17l-6.95,26.55c-.9,3.43,1.66,6.78,5.16,6.78h33.42c5.1,0,9.56-3.47,10.86-8.46l2.39-9.12c.08-.32-.16-.64-.49-.64h-18.95c-.23,0-.43.16-.49.38l-3.5,13.37c-.22.84-.98,1.43-1.85,1.43h-6.2c-.67,0-1.16-.63-.99-1.28l8.45-32.27c.29-1.1,1.27-1.87,2.4-1.87h4.57c1.27,0,2.2,1.22,1.87,2.46l-3.43,13.09c-.08.32.16.64.49.64h18.95ZM110.11,7.72l-3.95,15.56h-.04l-2.5,9.76c-1.28,4.99-5.65,8.46-10.64,8.46h-32.74c-3.43,0-5.93-3.36-5.05-6.78l6.81-26.55c1.23-4.82,5.45-8.17,10.27-8.17h32.09c3.9,0,6.75,3.83,5.75,7.72ZM89.26,3.04h-4.48c-1.11,0-2.07.77-2.35,1.87l-8.27,32.26c-.17.66.31,1.3.97,1.3h6.07c.85,0,1.59-.6,1.81-1.45l3.52-13.74h.04l4.52-17.78c.32-1.23-.59-2.46-1.83-2.46ZM519.07,180.01l-4.74,18.65h-.05l-3,11.7c-1.53,5.98-6.77,10.14-12.76,10.14h-39.25c-4.11,0-7.11-4.03-6.05-8.13l8.16-31.83c1.47-5.78,6.53-9.79,12.31-9.79h38.47c4.68,0,8.09,4.59,6.89,9.26ZM494.07,174.39h-5.37c-1.33,0-2.48.92-2.82,2.24l-9.91,38.67c-.2.79.37,1.55,1.16,1.55h7.28c1.02,0,1.91-.72,2.17-1.74l4.22-16.47h.05l5.42-21.32c.38-1.48-.71-2.95-2.19-2.95ZM527.11,7.72l-3.95,15.56h-.04l-2.5,9.76c-1.28,4.99-5.65,8.46-10.64,8.46h-32.74c-3.43,0-5.93-3.36-5.05-6.78l6.81-26.55c1.23-4.82,5.45-8.17,10.27-8.17h32.09c3.9,0,6.75,3.83,5.75,7.72ZM506.26,3.04h-4.48c-1.11,0-2.07.77-2.35,1.87l-8.27,32.26c-.17.66.31,1.3.97,1.3h6.07c.85,0,1.59-.6,1.81-1.45l3.52-13.74h.04l4.52-17.78c.32-1.23-.59-2.46-1.83-2.46ZM275.11,7.72l-3.95,15.56h-.04l-2.5,9.76c-1.28,4.99-5.65,8.46-10.64,8.46h-32.74c-3.43,0-5.93-3.36-5.05-6.78l6.81-26.55c1.23-4.82,5.45-8.17,10.27-8.17h32.09c3.9,0,6.75,3.83,5.75,7.72ZM254.26,3.04h-4.48c-1.11,0-2.07.77-2.35,1.87l-8.27,32.26c-.17.66.31,1.3.97,1.3h6.07c.85,0,1.59-.6,1.81-1.45l3.52-13.74h.04l4.52-17.78c.32-1.23-.59-2.46-1.83-2.46ZM167.34,7.49l-4.37,15.69c-1.21,4.33-5.15,7.32-9.64,7.32h0l4.5,10.27c.15.34-.1.71-.47.71h-18.31c-.21,0-.39-.12-.47-.32l-4.13-10.14c-.44-1.08-1.99-.97-2.28.16l-2.52,9.91c-.06.23-.26.38-.49.38h-18.65c-.33,0-.58-.32-.49-.64L120.35,3.02l-2.75-2.34c-.27-.23-.11-.68.25-.68h43.8c3.91,0,6.74,3.73,5.69,7.49ZM142.82,25.74l5.46-20.28c.27-.99-.48-1.96-1.5-1.96h-5.18c-1.4,0-2.62.95-2.97,2.31l-4.84,19.02c-.28,1.1.55,2.17,1.69,2.17h5.7c.77,0,1.44-.52,1.64-1.26ZM69.05,179.79l-5.26,18.89c-1.45,5.21-6.2,8.82-11.61,8.82h0l5.42,12.36c.18.4-.12.86-.56.86h-22.05c-.25,0-.47-.15-.57-.38l-4.97-12.21c-.53-1.29-2.4-1.17-2.75.19l-3.04,11.94c-.07.27-.31.46-.59.46H.61c-.4,0-.7-.38-.59-.77l12.44-45.54-3.31-2.82c-.33-.28-.13-.81.3-.81h52.74c4.71,0,8.11,4.49,6.85,9.02ZM39.52,201.76l6.58-24.42c.32-1.19-.58-2.36-1.81-2.36h-6.24c-1.69,0-3.16,1.14-3.57,2.78l-5.83,22.9c-.34,1.33.66,2.62,2.03,2.62h6.86c.93,0,1.74-.62,1.98-1.51ZM331.34,7.49l-4.37,15.69c-1.21,4.33-5.15,7.32-9.64,7.32h0l4.5,10.27c.15.34-.1.71-.47.71h-18.31c-.21,0-.39-.12-.47-.32l-4.13-10.14c-.44-1.08-1.99-.97-2.28.16l-2.52,9.91c-.06.23-.26.38-.49.38h-18.65c-.33,0-.58-.32-.49-.64l10.33-37.82-2.75-2.34c-.27-.23-.11-.68.25-.68h43.8c3.91,0,6.74,3.73,5.69,7.49ZM306.82,25.74l5.46-20.28c.27-.99-.48-1.96-1.5-1.96h-5.18c-1.4,0-2.62.95-2.97,2.31l-4.84,19.02c-.28,1.1.55,2.17,1.69,2.17h5.7c.77,0,1.44-.52,1.64-1.26ZM221.34,7.49l-4.37,15.69c-.6,2.16-1.89,4-3.59,5.28-1.7,1.29-3.81,2.04-6.05,2.04h-18.36c-.53,0-1.06-.1-1.58-.21-.74-.15-1.04.18-1.23.89l-2.52,9.92c-.06.22-.26.38-.49.38h-18.65c-.34,0-.58-.32-.49-.64l10.33-37.82-2.75-2.34c-.27-.24-.1-.68.25-.68h43.8c3.91,0,6.74,3.73,5.69,7.49ZM200.78,3.5h-5.18c-1.4,0-2.62.95-2.97,2.31l-4.84,19.02c-.28,1.1.55,2.17,1.69,2.17h5.7c.77,0,1.44-.52,1.64-1.26l5.46-20.28c.27-.99-.48-1.96-1.5-1.96ZM196.71,180.34l-5.16,18.53c-.71,2.55-2.23,4.72-4.24,6.23-2.01,1.52-4.5,2.41-7.14,2.41h-21.68c-.63,0-1.25-.12-1.86-.24-.88-.18-1.23.21-1.45,1.05l-2.98,11.71c-.07.26-.31.45-.58.45h-22.02c-.4,0-.68-.38-.58-.76l12.2-44.66-3.25-2.76c-.32-.28-.12-.8.3-.8h51.72c4.62,0,7.96,4.4,6.72,8.84ZM172.43,175.63h-6.12c-1.65,0-3.09,1.12-3.51,2.73l-5.72,22.46c-.33,1.3.65,2.56,2,2.56h6.73c.91,0,1.7-.61,1.94-1.49l6.45-23.95c.32-1.17-.57-2.31-1.77-2.31ZM385.5,41c.06.26-.14.5-.4.5h-23.02c-.19,0-.35-.13-.4-.31l-1.64-6.87c-.04-.18-.21-.31-.4-.31h-17.64c-.12,0-.24.06-.32.15l-5.75,7.19c-.08.1-.2.15-.32.15h-7.94c-.33,0-.53-.38-.33-.65l25.37-35.71c.07-.09.09-.21.07-.32l-.87-4.34c-.05-.25.14-.49.4-.49h23.88c.19,0,.36.13.4.32l8.91,40.68ZM358.69,30l-3.28-13.85c-.08-.34-.53-.43-.73-.14l-9.61,13.85c-.19.27,0,.64.34.64h12.89c.26,0,.46-.25.4-.5ZM585.84,77.12l-9.35,34.79c-2.58,9.6-11.01,16.24-20.62,16.24h0l9.62,22.78c.31.74-.21,1.58-.99,1.58h-39.16c-.44,0-.84-.28-1.01-.7l-8.84-22.49c-.94-2.38-4.27-2.15-4.88.35l-5.39,21.99c-.12.5-.56.85-1.05.85h-39.88c-.72,0-1.24-.71-1.05-1.42l22.1-83.88-5.87-5.2c-.58-.51-.23-1.5.53-1.5h93.66c8.36,0,14.41,8.27,12.17,16.62ZM533.4,117.6l11.68-44.98c.57-2.19-1.02-4.35-3.21-4.35h-11.07c-2.99,0-5.6,2.11-6.34,5.11l-10.35,42.19c-.6,2.44,1.18,4.82,3.61,4.82h12.18c1.64,0,3.08-1.14,3.51-2.79ZM366.39,77.11l-9.69,34.8c-1.33,4.79-4.19,8.87-7.96,11.71-3.77,2.86-8.45,4.52-13.42,4.52h-40.72c-1.18,0-2.34-.22-3.5-.46-1.65-.34-2.31.4-2.72,1.96l-5.59,22c-.13.49-.58.84-1.09.84h-41.36c-.75,0-1.29-.71-1.09-1.42l22.91-83.88-6.1-5.19c-.6-.53-.22-1.51.55-1.51h97.15c8.67,0,14.95,8.27,12.62,16.61ZM320.79,68.26h-11.49c-3.11,0-5.81,2.11-6.59,5.12l-10.73,42.19c-.62,2.44,1.22,4.81,3.75,4.81h12.64c1.71,0,3.19-1.15,3.64-2.79l12.11-44.98c.6-2.2-1.06-4.35-3.33-4.35ZM451.58.65l1.47,2.21c.49.73.64,1.63.41,2.48l-9.53,35.65c-.07.25.12.5.38.5l18.25.02c.18,0,.33-.12.38-.29L474.4.53c.07-.25-.12-.5-.38-.5h-22.11c-.31,0-.5.35-.33.61ZM534.18.38l1.08.97c1.16,1.04,1.64,2.64,1.24,4.14l-9.46,35.74c-.03.13.06.25.19.25h9.32c.09,0,.17-.06.19-.15l6.93-27.74c.05-.18.3-.2.37-.03l11.5,27.82c.03.07.1.12.18.12h19.17c.09,0,.17-.06.19-.14L586.74.25c.04-.13-.06-.25-.19-.25l-9.56.03c-.09,0-.17.06-.19.15l-6.84,28.23c-.04.18-.3.21-.37.03L557.66.15c-.03-.07-.1-.12-.18-.12h-23.17c-.18,0-.27.22-.13.34ZM121.04,60.5H43.48c-13.06,0-24.48,8.8-27.8,21.43l-4.75,18.06c-2.33,8.85,4.35,17.51,13.5,17.51h39.05c3.02,0,5.22,2.86,4.45,5.78l-4.7,17.8c-.53,2.02-2.36,3.42-4.44,3.42H13.04c-1.13,0-2.24.31-3.21.88l-7.74,4.61c-1.18.7-.68,2.51.69,2.51h77.22c13.1,0,24.54-8.84,27.86-21.51l4.3-16.44c2.85-10.9-5.37-21.55-16.64-21.55h-36.92c-1.1,0-1.91-1.02-1.66-2.09l4.38-18.86c.28-1.2,1.35-2.06,2.59-2.06h44.59c1.18,0,2.33-.33,3.34-.94l9.89-6.06c1.16-.71.66-2.5-.7-2.5ZM388.04,170.5h-42.15c-7.1,0-13.3,4.78-15.11,11.65l-2.58,9.81c-1.27,4.81,2.36,9.52,7.34,9.52h21.22c1.64,0,2.84,1.55,2.42,3.14l-2.55,9.67c-.29,1.1-1.28,1.86-2.41,1.86h-24.85c-.61,0-1.22.17-1.75.48l-4.2,2.51c-.64.38-.37,1.36.37,1.36h41.97c7.12,0,13.34-4.8,15.14-11.69l2.79-10.64c1.32-5.06-2.49-10.01-7.72-10.01h-21.83c-.6,0-1.04-.55-.9-1.14l2.38-10.25c.15-.65.73-1.12,1.41-1.12h24.23c.64,0,1.27-.18,1.81-.51l5.38-3.29c.63-.39.36-1.36-.38-1.36ZM584.04,170.5h-42.15c-7.1,0-13.3,4.78-15.11,11.65l-2.58,9.81c-1.27,4.81,2.36,9.52,7.34,9.52h21.22c1.64,0,2.84,1.55,2.42,3.14l-2.55,9.67c-.29,1.1-1.28,1.86-2.41,1.86h-24.85c-.61,0-1.22.17-1.75.48l-4.2,2.51c-.64.38-.37,1.36.37,1.36h41.97c7.12,0,13.34-4.8,15.14-11.69l2.92-11.15c1.26-4.8-2.37-9.5-7.33-9.5h-22.36c-.6,0-1.04-.55-.9-1.14l2.38-10.25c.15-.65.73-1.12,1.41-1.12h24.23c.64,0,1.27-.18,1.81-.51l5.38-3.29c.63-.39.36-1.36-.38-1.36ZM134.11,63.43l1.93,2.75c1.74,2.48,2.32,5.6,1.58,8.54l-15.07,59.85c-2.29,9.09,4.59,17.92,13.97,17.92h61.34c13.08,0,24.52-8.78,27.92-21.4l18.35-68.25c.32-1.18-.57-2.35-1.8-2.35h-37.29c-.84,0-1.58.56-1.8,1.38l-22.05,81.75c-.22.81-.96,1.38-1.8,1.38h-16.14c-1.23,0-2.12-1.17-1.8-2.35l21.72-79.8c.32-1.18-.57-2.35-1.8-2.35h-45.74c-1.51,0-2.39,1.7-1.52,2.93ZM204.5,173.06l1.03,1.47c.93,1.32,1.23,2.98.84,4.55l-8.02,31.88c-1.22,4.84,2.44,9.54,7.44,9.54h32.67c6.96,0,13.06-4.67,14.87-11.4l9.77-36.35c.17-.63-.31-1.25-.96-1.25h-19.86c-.45,0-.84.3-.96.73l-11.74,43.54c-.12.43-.51.73-.96.73h-8.59c-.65,0-1.13-.62-.96-1.25l11.57-42.5c.17-.63-.3-1.25-.96-1.25h-24.36c-.8,0-1.27.9-.81,1.56ZM372.94,61.72l4.37,6.02c1.27,1.74,1.67,3.97,1.09,6.05l-20.58,73.62c-.71,2.56,1.21,5.09,3.86,5.09h77.8c.17,0,.33-.05.46-.15l8.67-6.46c.59-.44.28-1.39-.46-1.39h-46.83c-.51,0-.87-.48-.74-.97l8.89-32.92c.09-.34.39-.57.74-.57h39.13c.15,0,.3-.04.43-.13l9.02-6.01c.63-.42.33-1.41-.43-1.41h-46.02c-.51,0-.88-.49-.74-.98l8.89-30.46c.1-.33.4-.55.74-.55h47.09c4.13.83,5.6-6.54,5.98-9.12.07-.46-.29-.88-.76-.88h-99.97c-.63,0-.99.71-.62,1.22ZM76.53,172.14l2.28,3.14c.66.91.87,2.07.57,3.16l-10.74,38.41c-.37,1.33.63,2.66,2.02,2.66h40.59c.09,0,.17-.03.24-.08l4.52-3.37c.31-.23.15-.72-.24-.72h-24.43c-.26,0-.46-.25-.39-.51l4.64-17.17c.05-.18.21-.3.39-.3h20.42c.08,0,.16-.02.22-.07l4.71-3.13c.33-.22.17-.74-.22-.74h-24.01c-.27,0-.46-.26-.39-.51l4.64-15.89c.05-.17.21-.29.39-.29h24.57c2.16.43,2.92-3.41,3.12-4.76.04-.24-.15-.46-.4-.46h-52.16c-.33,0-.52.37-.32.64ZM275.53,172.14l2.28,3.14c.66.91.87,2.07.57,3.16l-10.74,38.41c-.37,1.33.63,2.66,2.02,2.66h40.59c.09,0,.17-.03.24-.08l4.52-3.37c.31-.23.15-.72-.24-.72h-24.43c-.26,0-.46-.25-.39-.51l4.64-17.17c.05-.18.21-.3.39-.3h20.42c.08,0,.16-.02.22-.07l4.71-3.13c.33-.22.17-.74-.22-.74h-24.01c-.27,0-.46-.26-.39-.51l4.64-15.89c.05-.17.21-.29.39-.29h24.57c2.16.43,2.92-3.41,3.12-4.76.04-.24-.15-.46-.4-.46h-52.16c-.33,0-.52.37-.32.64ZM398.27,172.57l1.51,1.52c.19.19.45.3.72.3h15.41c.67,0,1.16.64.97,1.29l-12.27,43.52c-.18.65.3,1.29.97,1.29h21.31c.46,0,.86-.31.98-.76l11.35-43.34c.12-.45.52-.76.98-.76h17.94c.56,0,1.01-.45,1.01-1.01v-3.11c0-.56-.45-1.01-1.01-1.01h-59.02c-1.08,0-1.62,1.31-.86,2.07Z"/>
                      </g>
                    </svg>
                    <p><span class="resaltar">¡Al rescate de tu vehículo!</span></p>
                  </div>
                </div>
        
                <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                      <i class="bi bi-bag-check"></i>
                      <h3><a href="">Calidad de Productos</a></h3>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box">
                      <i class="bi bi-geo-alt"></i>
                      <h3><a href="">Nivel Nacional</a></h3> 
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                      <i class="bi bi-boxes"></i>
                      <h3><a href="">Somos Multimarca</a></h3>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-box">
                      <i class="bi bi-cart-check"></i>
                      <h3><a href="">Disponibilidad Inmediata</a></h3>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="icon-box">
                      <i class="bi bi-gem"></i>
                      <h3><a href="">Repuestos Originales</a></h3>
                    </div>
                  </div>
                </div>
        
              </div>
        
            </section><!-- /Hero Section -->
        
            <!-- About Section -->
            <section id="about" class="about section">
        
              <div class="container" data-aos="fade-up" data-aos-delay="100">
        
                <div class="row gy-4">
                  <div class="col-lg-6 order-1 order-lg-2">
                    <img src="https://corpsuperrepuestos.com/assets/img/lineaTemporalTiendas.jpeg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3>Expertos en Repuestos Multimarca</h3>
                    <p class="fst-italic">
                      Corporación <span class="resaltar">SUPER</span> Repuestos ha ofrecido repuestos originales y genéricos, calidad de productos al mejor precio, con más de 10 años en el mercado. Ubicados por toda el área metropolitana de Caracas, en más de 10 <span class="resaltar">SUPER</span> tiendas, ¡todas a tu servicio!
                    </p>
                    <ul>
                      <li><i class="bi bi-check2-all"></i> <span>Corporación Súper Repuestos se inspira y actúa de acuerdo a los siguientes valores corporativos:</span></li>
                      <li><i class="bi bi-check2-all"></i> <span>Honestidad, Honradez, Compromiso, Seriedad, Responsabilidad, Empatía y Respeto hacia las personas y el medioambiente.</span></li>
                    </ul>
                    <p>
                        Somos una empresa dedicada a la compraventa,
                        exportación, importación, almacenaje, distribución y
                        comercialización en general al por mayor y detal de
                        todo tipo de <span class="resaltar">SUPER</span> repuestos, partes y accesorios para todo
                        tipo de vehículos, japoneses, americanos, coreanos,
                        chinos y europeos.
                    </p>
                  </div>
                </div>
        
              </div>
        
            </section><!-- /About Section -->
        
            <!-- Clients Section -->
            <section id="clients" class="clients section">
        
              <div class="container" data-aos="fade-up" data-aos-delay="100">
        
                <div class="swiper init-swiper">
                  <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 1000
                      },
                      "slidesPerView": "auto",
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      },
                      "breakpoints": {
                        "320": {
                          "slidesPerView": 2,
                          "spaceBetween": 40
                        },
                        "480": {
                          "slidesPerView": 3,
                          "spaceBetween": 60
                        },
                        "640": {
                          "slidesPerView": 4,
                          "spaceBetween": 80
                        },
                        "992": {
                          "slidesPerView": 6,
                          "spaceBetween": 120
                        }
                      }
                    }
                  </script>
                  <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoJeep.svg" class="img-fluid" alt="Jeep"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoFord.png" class="img-fluid" alt="Ford"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoToyota.svg" class="img-fluid" alt="Toyota"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoNissan.png" class="img-fluid" alt="Nissan"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoMitsubishi.png" class="img-fluid" alt="Mitsubishi"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoChevrolet.png" class="img-fluid" alt="Chevrolet"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoChery.png" class="img-fluid" alt="Chery"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoFiat.png" class="img-fluid" alt="Fiat"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoHyundai.png" class="img-fluid" alt="Hyundai"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoDongfeng.webp" class="img-fluid" alt="Dongfeng"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoHonda.png" class="img-fluid" alt="Honda"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoMazda.png" class="img-fluid" alt="Mazda"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoKia.svg" class="img-fluid" alt="Kia"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoJac.png" class="img-fluid" alt="Jac"></div>
                    <div class="swiper-slide"><img src="https://corpsuperrepuestos.com/assets/img/logosMultimarca/iconoHaima.png" class="img-fluid" alt="Haima"></div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
        
              </div>
        
            </section><!-- /Clients Section -->
        
            <!-- Features Section -->
            <section id="features" class="features section">
        
              <div class="container">
        
                <div class="row gy-4">
                  <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="https://corpsuperrepuestos.com/assets/img/imagenVisionMision.jpg" alt=""></div>
                  <div class="col-lg-6">
        
                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                      <!-- Reemplazar el icono con una imagen .png a futuros cambios -->
                      <img src="https://corpsuperrepuestos.com/assets/img/pruebaIconoMision.svg" alt="Icono Misión" class="flex-shrink-0 me-3" style="width: 50px; height: 50px;">
                      <div>
                          <h4><span class="resaltar">SUPER</span> MISIÓN</h4>
                          <p>Satisfacer las necesidades de los clientes, de manera rápida y eficiente, al mismo tiempo superar sus expectativas en materia de repuestos automotrices, aplicando la etiqueta de servicio. Asimismo, seguir importando mercancía de calidad y prestigio, contando con el respaldo y garantía de los fabricantes.</p>
                      </div>
                  </div><!-- End Features Item -->
        
                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                      <img src="https://corpsuperrepuestos.com/assets/img/pruebaIconoVision.svg" alt="Icono Visión" class="flex-shrink-0 me-3" style="width: 50px; height: 50px;">
                      <div>
                        <h4><span class="resaltar">SUPER</span> VISIÓN</h4>
                        <p>Ser la empresa líder en la venta y distribución de repuestos automotrices, con el mayor y más variado surtido de productos exclusivos y de primera calidad. Propiciando el mejoramiento continuo de nuestro equipo de trabajo, con el fin de desarrollar un alto nivel de satisfacción y confianza que nos convierta en la primera opción d los clientes y proveedores, contribuyendo de esta manera con el desarrollo del país.</p>
                      </div>
                    </div><!-- End Features Item-->
        
                  </div>
                </div>
        
              </div>
        
            </section><!-- /Features Section -->
        
            <!-- Services Section -->
            <section id="services" class="services section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Servicios</h2>
                    <p>nuestros <span class="resaltar">SUPER</span> servicios</p>
                </div><!-- End Section Title -->
        
                <div class="container">
                    <div class="row gy-4">
                
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <!-- Fondo de la imagen .png para futuros cambios -->
                                <div class="service-bg" style="background-image: url('https://corpsuperrepuestos.com/assets/img/servicioTalleres.jpg');"></div>
                                <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Servicio de Taller: Super Panteón 1</h3>
                                </a>
                                <p>Ofrecemos nuestro super servicio de talleres, actualmente tenemos disponibles dos talleres para tu servicio, Super Shaya y Super Panteón 2 .</p>
                            </div>
                        </div><!-- End Service Item -->
                
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <!-- Fondo de la imagen .png para futuros cambios-->
                                <div class="service-bg" style="background-image: url('https://corpsuperrepuestos.com/assets/img/servicioTalleres.jpg');"></div>
                                <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Servicio de Taller: Super Shaya</h3>
                                </a>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                            </div>
                        </div><!-- End Service Item -->
                
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative">
                                <!-- Fondo de la imagen .png para futuros cambios-->
                                <div class="service-bg" style="background-image: url('https://corpsuperrepuestos.com/assets/img/servicioDelivery.jpg');"></div>
                                <div class="icon">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Servicio de Delivery</h3>
                                </a>
                                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                            </div>
                        </div><!-- End Service Item -->
                
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <!-- Fondo de la imagen .png para futuros cambios-->
                                <div class="service-bg" style="background-image: url('https://corpsuperrepuestos.com/assets/img/servicioEnviosNacionales.png');"></div>
                                <div class="icon">
                                    <i class="bi bi-airplane"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Servicio de Envios Nacionales</h3>
                                </a>
                                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                            </div>
                        </div><!-- End Service Item -->
                
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-item position-relative">
                                <!-- Fondo de la imagen .png para futuros cambios-->
                                <div class="service-bg" style="background-image: url('https://corpsuperrepuestos.com/assets/img/servicioCotizacion');"></div>
                                <div class="icon">
                                    <i class="bi bi-calculator"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Servicio de Cotización</h3>
                                </a>
                                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                            </div>
                        </div><!-- End Service Item -->
                
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="service-item position-relative">
                                <!-- Fondo de la imagen .png para futuros cambios-->
                                <div class="service-bg" style="background-image: url('ruta/a/tu/imagen6.png');"></div>
                                <div class="icon">
                                    <i class="bi bi-chat-square-text"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Dolori Architecto</h3>
                                </a>
                                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                            </div>
                        </div><!-- End Service Item -->
                
                    </div>
                </div>
           </section><!-- End Services Section -->
        
            <!-- Call To Action Section -->
            <section id="call-to-action" class="call-to-action section dark-background">
        
              <img src="https://corpsuperrepuestos.com/assets/img/fondoFalsoVistaMonitor.jpg" alt="">
        
              <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                  <div class="col-xl-10">
                    <div class="text-center">
                      <h3>Servicio <span class="resaltar">SUPER</span> en Línea</h3>
                      <p>¿Estás buscando un repuesto para tu vehiculo o camión? Comunicate con nuestros SUPER asesores y 
                        solicita asistencia. <br>Ubicamos el repuesto que necesitas en nuestras tiendas y almacenes. <br>¡Estamos para ayudarte!</p>
                      <a class="cta-btn" href="@gianniimperato6@gmail.com">¡Contactanos!</a>
                    </div>
                  </div>
                </div>
              </div>
        
            </section><!-- /Call To Action Section -->
        
            <!-- Portfolio Section -->
            <section id="portfolio" class="portfolio section">
        
              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Productos</h2>
                <p>Nuestros <span class="resaltar">SUPER</span> Productos</p>
              </div><!-- End Section Title -->
        
              <div class="container">
        
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
        
                  <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Todos</li>
                    <li data-filter=".filter-shai">Shai</li>
                    <li data-filter=".filter-suspension">Suspensión</li>
                    <li data-filter=".filter-victoria">Victoria</li>
                    <li data-filter=".filter-junin">Junín</li>
                    <li data-filter=".filter-shaya">Shaya</li>
                    <li data-filter=".filter-casanova">Casanova</li>
                    <li data-filter=".filter-panteon2">Panteón 2</li>
                    <li data-filter=".filter-repuestos1212">Repuestos1212</li>
                    <li data-filter=".filter-estrella">Estrella</li>
                  </ul><!-- End Portfolio Filters -->
        
                  <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-shai">
                      <img src="file:///C:/Users/USER/Downloads/1740586888187.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="file:///C:/Users/USER/Downloads/1740586888187.jpg" title="App 1" data-gallery="portfolio-gallery-shai" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
        
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-suspension">
                      <img src="file:///C:/Users/USER/Downloads/1740586888171.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Product 1</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="file:///C:/Users/USER/Downloads/1740586888171.jpg" title="Product 1" data-gallery="portfolio-gallery-suspension" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
        
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-victoria">
                      <img src="file:///C:/Users/USER/Downloads/1740580207893.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Branding 1</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="file:///C:/Users/USER/Downloads/1740580207893.jpg" title="Branding 1" data-gallery="portfolio-gallery-victoria" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
        
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-junin">
                      <img src="file:///C:/Users/USER/Downloads/1740580207917.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="file:///C:/Users/USER/Downloads/1740580207917.jpg" title="App 2" data-gallery="portfolio-gallery-junin" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
        
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-shaya">
                      <img src="file:///C:/Users/USER/Downloads/1740581271732.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Product 2</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="file:///C:/Users/USER/Downloads/1740581271732.jpg" title="Product 2" data-gallery="portfolio-gallery-shaya" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
        
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-casanova">
                      <img src="file:///C:/Users/USER/Downloads/1740581271751.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Branding 2</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="file:///C:/Users/USER/Downloads/1740581271751.jpg" title="Branding 2" data-gallery="portfolio-gallery-casanova" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
        
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-panteon2">
                      <img src="file:///C:/Users/USER/Downloads/1740586888110.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="file:///C:/Users/USER/Downloads/1740586888110.jpg" title="App 3" data-gallery="portfolio-gallery-panteon2" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
        
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repuestos1212">
                      <img src="file:///C:/Users/USER/Downloads/1740586888153.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Product 3</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="file:///C:/Users/USER/Downloads/1740586888153.jpg" title="Product 3" data-gallery="portfolio-gallery-repuestos1212" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
        
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-estrella">
                      <img src="file:///C:/Users/USER/Downloads/1740586888134.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Branding 3</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="file:///C:/Users/USER/Downloads/1740586888134.jpg" title="Branding 2" data-gallery="portfolio-gallery-estrella" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
        
        
                  </div><!-- End Portfolio Container -->
        
                </div>
        
              </div>
        
            </section><!-- /Portfolio Section -->
        
            <!-- Stats Section -->
            <section id="stats" class="stats section">
        
              <div class="container" data-aos="fade-up" data-aos-delay="100">
        
                <div class="row gy-4 align-items-center justify-content-between">
        
                  <div class="col-lg-5">
                    <img src="https://corpsuperrepuestos.com/assets/img/estadisticasServiciosClientes.jpg" alt="" class="img-fluid">
                  </div>
        
                  <div class="col-lg-6">
        
                    <h3 class="fw-bold fs-2 mb-3">Nuestro <span class="resaltar">SUPER</span> Servicio</h3>
                    <p>
                      Contamos con clientes fieles que confian en nuestros porductos por su calidad y precio en el mercado, logrando así que Corporación <span class="resaltar">SUPER</span> Repuestos sea su casa de auto partes en todo momento.
                    </p>
        
                    <div class="row gy-4">
        
                      <div class="col-lg-6">
                        <div class="stats-item d-flex">
                          <i class="bi bi-emoji-smile flex-shrink-0"></i>
                          <div>
                            <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="2" class="purecounter"></span>
                            <p><strong>Super Clientes</strong> <span>satisfechos por nuestra calidad</span></p>
                          </div>
                        </div>
                      </div><!-- End Stats Item -->
        
                      <div class="col-lg-6">
                        <div class="stats-item d-flex">
                          <i class="bi bi-pin-map"></i>
                          <div>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2" class="purecounter"></span>
                            <p><strong>Super Tiendas</strong> <span>distribuidas para tu servicio</span></p>
                          </div>
                        </div>
                      </div><!-- End Stats Item -->
        
                      <div class="col-lg-6">
                        <div class="stats-item d-flex">
                          <i class="bi bi-fire"></i>
                          <div>
                            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
                            <p><strong>Super Multimarca</strong> <span>variedad para la salud de tu vehiculo</span></p>
                          </div>
                        </div>
                      </div><!-- End Stats Item -->
        
                      <div class="col-lg-6">
                        <div class="stats-item d-flex">
                          <i class="bi bi-people flex-shrink-0"></i>
                          <div>
                            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2" class="purecounter"></span>
                            <p><strong>Super Trabajadores</strong> <span>esperando para escuchar tus necesidades</span></p>
                          </div>
                        </div>
                      </div><!-- End Stats Item -->
        
                    </div>
        
                  </div>
        
                </div>
        
              </div>
        
            </section><!-- /Stats Section -->
        
        
            <!-- Videos Section -->
            <section id="videos" class="videos section">
            
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Videos Promocionales</h2>
                <p>Nuestras <span class="resaltar">SUPER</span> Promociones</p>
            </div><!-- End Section Title -->
            
            <div class="container">
                <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 10000
                    },
                    "slidesPerView": "auto",
                    "spaceBetween": 30,
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                        "slidesPerView": 1,
                        "spaceBetween": 20
                        },
                        "768": {
                        "slidesPerView": 2,
                        "spaceBetween": 30
                        },
                        "1200": {
                        "slidesPerView": 3,
                        "spaceBetween": 40
                        }
                    }
                    }
                </script>
                <div class="swiper-wrapper">
            
                    <!-- Video 1 -->
                    <div class="swiper-slide">
                    <div class="video-item">
                        <div class="video-wrapper">
                        <iframe 
                            src="file:///C:/Users/USER/Downloads/WhatsApp%20Video%202025-02-19%20at%2018.20.26.mp4" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                        </div>
                        <h3>Identifica tu repuesto</h3>
                        <p>Mira cómo nuestros productos pueden ayudarte a mantener tu vehículo en perfecto estado.</p>
                    </div>
                    </div><!-- End Video Item -->
            
                    <!-- Video 2 -->
                    <div class="swiper-slide">
                    <div class="video-item">
                        <div class="video-wrapper">
                        <iframe 
                            src="file:///C:/Users/USER/Downloads/WhatsApp%20Video%202025-02-24%20at%2013.14.40.mp4" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                        </div>
                        <h3>Ubica nuestras tiendas</h3>
                        <p>Conoce más sobre nuestros servicios de entrega y atención al cliente.</p>
                    </div>
                    </div><!-- End Video Item -->
            
                    <!-- Video 3 -->
                    <div class="swiper-slide">
                    <div class="video-item">
                        <div class="video-wrapper">
                        <iframe 
                            src="file:///C:/Users/USER/Downloads/WhatsApp%20Video%202025-02-26%20at%2011.08.12.mp4" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                        </div>
                        <h3>Precios insuperables</h3>
                        <p>Descubre cómo nuestros repuestos originales mejoran el rendimiento de tu vehículo.</p>
                    </div>
                    </div><!-- End Video Item -->
            
                    <!-- Video 4 -->
                    <div class="swiper-slide">
                    <div class="video-item">
                        <div class="video-wrapper">
                        <iframe 
                            src="file:///C:/Users/USER/Downloads/WhatsApp%20Video%202025-02-26%20at%2011.08.15.mp4" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                        </div>
                        <h3>Variedad de productos</h3>
                        <p>Descubre cómo nuestros repuestos originales mejoran el rendimiento de tu vehículo.</p>
                    </div>
                    </div><!-- End Video Item -->
            
                    <!-- Agrega más videos aquí -->
            
                </div>
                <div class="swiper-pagination"></div>
                </div>
            </div>
            
            </section><!-- End Videos Section -->
        
        
            <!-- Stores Section -->
            <section id="stores" class="stores section dark-background">
            
            <img src="file:///C:/Users/USER/Downloads/1740585256841.jpg" class="stores-bg" alt="Fondo de repuestos de autos">
            
            <div class="container" data-aos="fade-up" data-aos-delay="100">
            
                <div class="section-header">
                <h2><span class="resaltar">Nuestras Tiendas</span></h2>
                <p>Conoce nuestras sucursales en todo el país</p>
                </div>
            
                <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                        "delay": 6000,
                        "disableOnInteraction": false
                    },
                    "slidesPerView": "auto",
                    "centeredSlides": true,
                    "spaceBetween": 30,
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                    }
                    }
                </script>
                <div class="swiper-wrapper">
            
                    <div class="swiper-slide">
                    <div class="store-item">
                        <div class="store-img-container">
                        <img src="https://corpsuperrepuestos.com/assets/img/imagenFrontalPateonUno.jpeg" class="store-img" alt="Fachada Tienda Principal">
                        <div class="store-overlay">
                            <h3>Tienda Principal</h3>
                            <p>Calle Central 123, Ciudad</p>
                            <a href="#" class="btn-visit">Ver ubicación</a>
                        </div>
                        </div>
                    </div>
                    </div><!-- End store item -->
            
                    <div class="swiper-slide">
                    <div class="store-item">
                        <div class="store-img-container">
                        <img src="https://corpsuperrepuestos.com/assets/img/imagenFrontalShaya.jpeg" class="store-img" alt="Fachada Tienda Norte">
                        <div class="store-overlay">
                            <h3>Tienda Norte</h3>
                            <p>Avenida Industrial 456, Zona Norte</p>
                            <a href="#" class="btn-visit">Ver ubicación</a>
                        </div>
                        </div>
                    </div>
                    </div><!-- End store item -->
            
                    <div class="swiper-slide">
                    <div class="store-item">
                        <div class="store-img-container">
                        <img src="https://corpsuperrepuestos.com/assets/img/imagenFrontalRepuestos1212.jpeg" class="store-img" alt="Fachada Tienda Sur">
                        <div class="store-overlay">
                            <h3>Tienda Sur</h3>
                            <p>Boulevard Automotriz 789, Distrito Sur</p>
                            <a href="#" class="btn-visit">Ver ubicación</a>
                        </div>
                        </div>
                    </div>
                    </div><!-- End store item -->
            
                    <div class="swiper-slide">
                    <div class="store-item">
                        <div class="store-img-container">
                        <img src="https://corpsuperrepuestos.com/assets/img/imagenFrotalJunin.jpeg" class="store-img" alt="Fachada Tienda Este">
                        <div class="store-overlay">
                            <h3>Tienda Este</h3>
                            <p>Carrera Motores 101, Sector Este</p>
                            <a href="#" class="btn-visit">Ver ubicación</a>
                        </div>
                        </div>
                    </div>
                    </div><!-- End store item -->
            
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                </div>
            
            </div>
            
            </section><!-- /Stores Section -->
        
          
            <!-- Métodos de Pago Section-->
            <section id="pago" class="pago section">
                
                <!-- Seccion Title -->
                <div class="container section-title" data-aos="fade up">
                <h2>Métodos de Pago</h2>
                <p>Nuestros <span class="resaltar">SUPER</span> MÉTODOS DE PAGO</p>
                </div> <!--End Section Title-->
            
            
            <!-- Compact Payment Methods Section -->
            <section id="payment-methods" class="compact-payment-methods section dark-background">
        
                <img src="https://st.depositphotos.com/1005404/3111/i/450/depositphotos_31118999-stock-photo-car-parts.jpg" class="payment-methods-bg" alt="Fondo de métodos de pago">
            
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                
                    <div class="section-header">
                    <h2 class="payment-title">Métodos de Pago</h2>
                    <p class="payment-subtitle">Aceptamos diversas formas de pago en nuestras tiendas ¡Visitanos!</p>
                    </div>
                
                    <div class="compact-payment-grid">
                    <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="150">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Maestro_2016.svg/1200px-Maestro_2016.svg.png" alt="Maestro">
                    </div>
                    
                    <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="200">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1200px-Mastercard-logo.svg.png" alt="Mastercard">
                    </div>
                    
                    <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="250">
                        <img src="https://vcvzlacambios.com/wp-content/uploads/2022/07/PAGO-MOVIL-ICON-1.png" alt="Pago Móvil">
                    </div>
                    
                    <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="300">
                        <img src="https://media.licdn.com/dms/image/v2/C4D12AQHlVmYMucjSIA/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1628177193073?e=2147483647&v=beta&t=OCSuZIVkaNhwK5gJAGHKlkW4qAKcRqIu6VZPJjSF4N8" alt="Visa">
                    </div>
                    
                    <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="350">
                        <img src="https://play-lh.googleusercontent.com/F4U2pL8z-Ic5FzCfe1xVXMWRvff6oEBIzDsyGRc4mE3bIUPiCfhuXXXvTOfcpVglKqs" alt="Zelle">
                    </div>
                
                    <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="400">
                        <img src="https://images.seeklogo.com/logo-png/59/2/binance-icon-logo-png_seeklogo-598330.png" alt="Binance">
                    </div>
                    </div>
                
                </div>        
        
            </section><!-- /Métodos de Pago Section-->

            <!-- Contact Section -->
            <section id="contact" class="contact section">
        
              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Contacto</h2>
                <p>Contactanos</p>
              </div><!-- End Section Title -->
        
              <div class="container" data-aos="fade-up" data-aos-delay="100">
        
                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                  <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.1946917331868!2d-66.91164721499187!3d10.491594506552174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5f7863cbe453%3A0x7c74abe1e74eedc1!2sTapicer%C3%ADa%20fuerzas%20Armadas!5e0!3m2!1ses!2snl!4v1749843218510!5m2!1ses!2snl" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
        
                <div class="row gy-4">
        
                  <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                      <i class="bi bi-geo-alt flex-shrink-0"></i>
                      <div>
                        <h3>Dirección</h3>
                        <p>Av. Principal Roca Tarpeya, Caracas, Venezuela</p>
                      </div>
                    </div><!-- End Info Item -->
        
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                      <i class="bi bi-telephone flex-shrink-0"></i>
                      <div>
                        <h3>Contactanos</h3>
                        <p>+58 4123097243</p>
                      </div>
                    </div><!-- End Info Item -->
        
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                      <i class="bi bi-envelope flex-shrink-0"></i>
                      <div>
                        <h3>Email</h3>
                        <p>ventas@repuestossuper.com</p>
                      </div>
                    </div><!-- End Info Item -->
        
                  </div>
        
                  <div class="col-lg-8">
                    <form action="https://formsubmit.co/gianniimperato6@gmail.com" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                      <div class="row gy-4">
        
                        <div class="col-md-6">
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>
        
                        <div class="col-md-6 ">
                          <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>
        
                        <div class="col-md-12">
                          <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>
        
                        <div class="col-md-12">
                          <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>
        
                        <div class="col-md-12 text-center">
                          <div class="loading">Loading</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Your message has been sent. Thank you!</div>
        
                          <button type="submit">Send Message</button>
                        </div>
        
                      </div>
                    </form>
                  </div><!-- End Contact Form -->
        
                </div>
        
              </div>
        
            </section><!-- /Contact Section -->
        
        </main>
        

        <footer id="footer" class="footer dark-background">

            <div class="footer-top">
              <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                      <span class="sitename">Corporación <strong>SUPER</strong></span>
                    </a>
                    <div class="footer-contact pt-3">
                      <p>Ubicados en toda el área Metropolitana de Caracas</p>
                      <p>Caracas, Venezuela</p>
                      <p class="mt-3"><strong>Telefono:</strong> <span>+58 4123097243</span></p>
                      <p><strong>Email:</strong> <span>ventas@repuestossuper.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                      <a href="https://x.com/REPUESTOSCASAN1"><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href="https://www.instagram.com/repuestoscasanova/?hl=es-la"><i class="bi bi-instagram"></i></a>
                      <a href="https://www.tiktok.com/@repuestoscasanova1"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nuestros Links</h4>
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Inicio</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Nosotros</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Servicios</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Productos</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Contacto</a></li>
                    </ul>
                  </div>
        
                  <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nuestros Servicios</h4>
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Taller: Super Panteón 1</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Taller: Super Shaya</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Servicio de Delivery</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Servicio de Envios Nacionales</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="#"> Servicio de Cotización</a></li>
                    </ul>
                  </div>
        
                  <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                      <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                  </div>
        
                </div>
              </div>
            </div>
        
            <div class="copyright">
              <div class="container text-center">
                <p>© <span>2025 Copyright</span> <strong class="px-1 sitename">Corporación <strong>SUPER</strong></strong> <span>All Rights Reserved</span></p>
                <div class="credits">
                  <!-- All the links in the footer should remain intact. -->
                  <!-- You can delete the links only if you've purchased the pro version. -->
                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                  <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                  Designed by <a href="https://bootstrapmade.com/">Gianni Imperato</a>
                </div>
              </div>
            </div>
        
        </footer>

          
        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>

    
    </body>





</html>
