<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Corporación Super Repuestos | Al rescate de tu vehiculo</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Font Awesome | Iconos -->
  <script src="https://kit.fontawesome.com/f92a465687.js" crossorigin="anonymous"></script>

  <!-- Favicons -->
  <link href="{{asset('assets/img/logoCorporacionPestanas.ico')}}" rel="Icono Corporación Super Repuestos">
  <link href="{{asset('assets/img/logoCorporacionPestanas.ico')}}" rel="Icono Corporación Super Repuestos">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

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

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/images/pruebaLogo.png')}}" alt="Logo Corporacion Super Repuestos">
        <!-- <h1 class="sitename">Corporación <strong>SUPER</strong></h1> -->
        <span></span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Inicio<br></a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Productos</a></li>
          <li><a href="#videos">Promociones</a></li>
          <li class="dropdown"><a href="#stores"><span>Cotizar</span> <i
                class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{Route('SuperCasanova.index')}}">Super Casanova</a></li>
              <li class="dropdown"><a href="{{Route('SuperShaya.index')}}"><span>Super Shaya</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{Route('ServicioTallerSuperShaya.index')}}">Taller de Servicio | Super Shaya</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="{{Route('SuperPanteonUno.index')}}"><span>Super Panteón 1</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{Route('ServicioTallerSuperPanteonUno.index')}}">Taller de Servicio | Super Panteón 1</a></li>
                </ul>
              </li>
              <li><a href="{{Route('SuperShai.index')}}">Super Shai</a></li>
              <li><a href="{{Route('SuperVictoria.index')}}">Super Victoria</a></li>
              <li><a href="{{Route('SuperJunin.index')}}">Super Junín</a></li>
              <li><a href="{{Route('SuperPanteonDos.index')}}">Super Panteón 2</a></li>
              <li><a href="{{Route('SuperSuspension.index')}}">Super Suspensión</a></li>
              <li><a href="{{Route('SuperEstrella.index')}}">Super Estrella</a></li>
              <li><a href="{{Route('SuperRepuestos1212.index')}}">Super Repuestos1212</a></li>

            </ul>
          </li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about">¡Enterate!</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{asset('assets/images/imagenFondoInicio.jpg')}}" alt="imagenFondo" data-aos="fade-in">

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
                <path class="cls-1"
                  d="M33.91,19.23c-.33,0-.58-.31-.49-.64l3.43-13.09c.33-1.24-.6-2.46-1.87-2.46h-4.57c-1.13,0-2.11.77-2.4,1.87l-8.45,32.27c-.17.65.32,1.28.99,1.28h6.2c.87,0,1.63-.59,1.85-1.43l3.5-13.37c.06-.22.26-.38.49-.38h18.95c.33,0,.58.31.49.64l-2.39,9.12c-1.31,4.99-5.77,8.46-10.86,8.46H5.36c-3.5,0-6.06-3.36-5.16-6.78L7.15,8.17C8.41,3.35,12.71,0,17.63,0h32.76c3.99,0,6.89,3.82,5.87,7.72l-2.91,11.13c-.06.22-.26.38-.49.38h-18.95ZM441.86,19.23c.23,0,.43-.16.49-.38l2.91-11.13c1.02-3.9-1.89-7.72-5.87-7.72h-32.76c-4.92,0-9.23,3.35-10.49,8.17l-6.95,26.55c-.9,3.43,1.66,6.78,5.16,6.78h33.42c5.1,0,9.56-3.47,10.86-8.46l2.39-9.12c.08-.32-.16-.64-.49-.64h-18.95c-.23,0-.43.16-.49.38l-3.5,13.37c-.22.84-.98,1.43-1.85,1.43h-6.2c-.67,0-1.16-.63-.99-1.28l8.45-32.27c.29-1.1,1.27-1.87,2.4-1.87h4.57c1.27,0,2.2,1.22,1.87,2.46l-3.43,13.09c-.08.32.16.64.49.64h18.95ZM110.11,7.72l-3.95,15.56h-.04l-2.5,9.76c-1.28,4.99-5.65,8.46-10.64,8.46h-32.74c-3.43,0-5.93-3.36-5.05-6.78l6.81-26.55c1.23-4.82,5.45-8.17,10.27-8.17h32.09c3.9,0,6.75,3.83,5.75,7.72ZM89.26,3.04h-4.48c-1.11,0-2.07.77-2.35,1.87l-8.27,32.26c-.17.66.31,1.3.97,1.3h6.07c.85,0,1.59-.6,1.81-1.45l3.52-13.74h.04l4.52-17.78c.32-1.23-.59-2.46-1.83-2.46ZM519.07,180.01l-4.74,18.65h-.05l-3,11.7c-1.53,5.98-6.77,10.14-12.76,10.14h-39.25c-4.11,0-7.11-4.03-6.05-8.13l8.16-31.83c1.47-5.78,6.53-9.79,12.31-9.79h38.47c4.68,0,8.09,4.59,6.89,9.26ZM494.07,174.39h-5.37c-1.33,0-2.48.92-2.82,2.24l-9.91,38.67c-.2.79.37,1.55,1.16,1.55h7.28c1.02,0,1.91-.72,2.17-1.74l4.22-16.47h.05l5.42-21.32c.38-1.48-.71-2.95-2.19-2.95ZM527.11,7.72l-3.95,15.56h-.04l-2.5,9.76c-1.28,4.99-5.65,8.46-10.64,8.46h-32.74c-3.43,0-5.93-3.36-5.05-6.78l6.81-26.55c1.23-4.82,5.45-8.17,10.27-8.17h32.09c3.9,0,6.75,3.83,5.75,7.72ZM506.26,3.04h-4.48c-1.11,0-2.07.77-2.35,1.87l-8.27,32.26c-.17.66.31,1.3.97,1.3h6.07c.85,0,1.59-.6,1.81-1.45l3.52-13.74h.04l4.52-17.78c.32-1.23-.59-2.46-1.83-2.46ZM275.11,7.72l-3.95,15.56h-.04l-2.5,9.76c-1.28,4.99-5.65,8.46-10.64,8.46h-32.74c-3.43,0-5.93-3.36-5.05-6.78l6.81-26.55c1.23-4.82,5.45-8.17,10.27-8.17h32.09c3.9,0,6.75,3.83,5.75,7.72ZM254.26,3.04h-4.48c-1.11,0-2.07.77-2.35,1.87l-8.27,32.26c-.17.66.31,1.3.97,1.3h6.07c.85,0,1.59-.6,1.81-1.45l3.52-13.74h.04l4.52-17.78c.32-1.23-.59-2.46-1.83-2.46ZM167.34,7.49l-4.37,15.69c-1.21,4.33-5.15,7.32-9.64,7.32h0l4.5,10.27c.15.34-.1.71-.47.71h-18.31c-.21,0-.39-.12-.47-.32l-4.13-10.14c-.44-1.08-1.99-.97-2.28.16l-2.52,9.91c-.06.23-.26.38-.49.38h-18.65c-.33,0-.58-.32-.49-.64L120.35,3.02l-2.75-2.34c-.27-.23-.11-.68.25-.68h43.8c3.91,0,6.74,3.73,5.69,7.49ZM142.82,25.74l5.46-20.28c.27-.99-.48-1.96-1.5-1.96h-5.18c-1.4,0-2.62.95-2.97,2.31l-4.84,19.02c-.28,1.1.55,2.17,1.69,2.17h5.7c.77,0,1.44-.52,1.64-1.26ZM69.05,179.79l-5.26,18.89c-1.45,5.21-6.2,8.82-11.61,8.82h0l5.42,12.36c.18.4-.12.86-.56.86h-22.05c-.25,0-.47-.15-.57-.38l-4.97-12.21c-.53-1.29-2.4-1.17-2.75.19l-3.04,11.94c-.07.27-.31.46-.59.46H.61c-.4,0-.7-.38-.59-.77l12.44-45.54-3.31-2.82c-.33-.28-.13-.81.3-.81h52.74c4.71,0,8.11,4.49,6.85,9.02ZM39.52,201.76l6.58-24.42c.32-1.19-.58-2.36-1.81-2.36h-6.24c-1.69,0-3.16,1.14-3.57,2.78l-5.83,22.9c-.34,1.33.66,2.62,2.03,2.62h6.86c.93,0,1.74-.62,1.98-1.51ZM331.34,7.49l-4.37,15.69c-1.21,4.33-5.15,7.32-9.64,7.32h0l4.5,10.27c.15.34-.1.71-.47.71h-18.31c-.21,0-.39-.12-.47-.32l-4.13-10.14c-.44-1.08-1.99-.97-2.28.16l-2.52,9.91c-.06.23-.26.38-.49.38h-18.65c-.33,0-.58-.32-.49-.64l10.33-37.82-2.75-2.34c-.27-.23-.11-.68.25-.68h43.8c3.91,0,6.74,3.73,5.69,7.49ZM306.82,25.74l5.46-20.28c.27-.99-.48-1.96-1.5-1.96h-5.18c-1.4,0-2.62.95-2.97,2.31l-4.84,19.02c-.28,1.1.55,2.17,1.69,2.17h5.7c.77,0,1.44-.52,1.64-1.26ZM221.34,7.49l-4.37,15.69c-.6,2.16-1.89,4-3.59,5.28-1.7,1.29-3.81,2.04-6.05,2.04h-18.36c-.53,0-1.06-.1-1.58-.21-.74-.15-1.04.18-1.23.89l-2.52,9.92c-.06.22-.26.38-.49.38h-18.65c-.34,0-.58-.32-.49-.64l10.33-37.82-2.75-2.34c-.27-.24-.1-.68.25-.68h43.8c3.91,0,6.74,3.73,5.69,7.49ZM200.78,3.5h-5.18c-1.4,0-2.62.95-2.97,2.31l-4.84,19.02c-.28,1.1.55,2.17,1.69,2.17h5.7c.77,0,1.44-.52,1.64-1.26l5.46-20.28c.27-.99-.48-1.96-1.5-1.96ZM196.71,180.34l-5.16,18.53c-.71,2.55-2.23,4.72-4.24,6.23-2.01,1.52-4.5,2.41-7.14,2.41h-21.68c-.63,0-1.25-.12-1.86-.24-.88-.18-1.23.21-1.45,1.05l-2.98,11.71c-.07.26-.31.45-.58.45h-22.02c-.4,0-.68-.38-.58-.76l12.2-44.66-3.25-2.76c-.32-.28-.12-.8.3-.8h51.72c4.62,0,7.96,4.4,6.72,8.84ZM172.43,175.63h-6.12c-1.65,0-3.09,1.12-3.51,2.73l-5.72,22.46c-.33,1.3.65,2.56,2,2.56h6.73c.91,0,1.7-.61,1.94-1.49l6.45-23.95c.32-1.17-.57-2.31-1.77-2.31ZM385.5,41c.06.26-.14.5-.4.5h-23.02c-.19,0-.35-.13-.4-.31l-1.64-6.87c-.04-.18-.21-.31-.4-.31h-17.64c-.12,0-.24.06-.32.15l-5.75,7.19c-.08.1-.2.15-.32.15h-7.94c-.33,0-.53-.38-.33-.65l25.37-35.71c.07-.09.09-.21.07-.32l-.87-4.34c-.05-.25.14-.49.4-.49h23.88c.19,0,.36.13.4.32l8.91,40.68ZM358.69,30l-3.28-13.85c-.08-.34-.53-.43-.73-.14l-9.61,13.85c-.19.27,0,.64.34.64h12.89c.26,0,.46-.25.4-.5ZM585.84,77.12l-9.35,34.79c-2.58,9.6-11.01,16.24-20.62,16.24h0l9.62,22.78c.31.74-.21,1.58-.99,1.58h-39.16c-.44,0-.84-.28-1.01-.7l-8.84-22.49c-.94-2.38-4.27-2.15-4.88.35l-5.39,21.99c-.12.5-.56.85-1.05.85h-39.88c-.72,0-1.24-.71-1.05-1.42l22.1-83.88-5.87-5.2c-.58-.51-.23-1.5.53-1.5h93.66c8.36,0,14.41,8.27,12.17,16.62ZM533.4,117.6l11.68-44.98c.57-2.19-1.02-4.35-3.21-4.35h-11.07c-2.99,0-5.6,2.11-6.34,5.11l-10.35,42.19c-.6,2.44,1.18,4.82,3.61,4.82h12.18c1.64,0,3.08-1.14,3.51-2.79ZM366.39,77.11l-9.69,34.8c-1.33,4.79-4.19,8.87-7.96,11.71-3.77,2.86-8.45,4.52-13.42,4.52h-40.72c-1.18,0-2.34-.22-3.5-.46-1.65-.34-2.31.4-2.72,1.96l-5.59,22c-.13.49-.58.84-1.09.84h-41.36c-.75,0-1.29-.71-1.09-1.42l22.91-83.88-6.1-5.19c-.6-.53-.22-1.51.55-1.51h97.15c8.67,0,14.95,8.27,12.62,16.61ZM320.79,68.26h-11.49c-3.11,0-5.81,2.11-6.59,5.12l-10.73,42.19c-.62,2.44,1.22,4.81,3.75,4.81h12.64c1.71,0,3.19-1.15,3.64-2.79l12.11-44.98c.6-2.2-1.06-4.35-3.33-4.35ZM451.58.65l1.47,2.21c.49.73.64,1.63.41,2.48l-9.53,35.65c-.07.25.12.5.38.5l18.25.02c.18,0,.33-.12.38-.29L474.4.53c.07-.25-.12-.5-.38-.5h-22.11c-.31,0-.5.35-.33.61ZM534.18.38l1.08.97c1.16,1.04,1.64,2.64,1.24,4.14l-9.46,35.74c-.03.13.06.25.19.25h9.32c.09,0,.17-.06.19-.15l6.93-27.74c.05-.18.3-.2.37-.03l11.5,27.82c.03.07.1.12.18.12h19.17c.09,0,.17-.06.19-.14L586.74.25c.04-.13-.06-.25-.19-.25l-9.56.03c-.09,0-.17.06-.19.15l-6.84,28.23c-.04.18-.3.21-.37.03L557.66.15c-.03-.07-.1-.12-.18-.12h-23.17c-.18,0-.27.22-.13.34ZM121.04,60.5H43.48c-13.06,0-24.48,8.8-27.8,21.43l-4.75,18.06c-2.33,8.85,4.35,17.51,13.5,17.51h39.05c3.02,0,5.22,2.86,4.45,5.78l-4.7,17.8c-.53,2.02-2.36,3.42-4.44,3.42H13.04c-1.13,0-2.24.31-3.21.88l-7.74,4.61c-1.18.7-.68,2.51.69,2.51h77.22c13.1,0,24.54-8.84,27.86-21.51l4.3-16.44c2.85-10.9-5.37-21.55-16.64-21.55h-36.92c-1.1,0-1.91-1.02-1.66-2.09l4.38-18.86c.28-1.2,1.35-2.06,2.59-2.06h44.59c1.18,0,2.33-.33,3.34-.94l9.89-6.06c1.16-.71.66-2.5-.7-2.5ZM388.04,170.5h-42.15c-7.1,0-13.3,4.78-15.11,11.65l-2.58,9.81c-1.27,4.81,2.36,9.52,7.34,9.52h21.22c1.64,0,2.84,1.55,2.42,3.14l-2.55,9.67c-.29,1.1-1.28,1.86-2.41,1.86h-24.85c-.61,0-1.22.17-1.75.48l-4.2,2.51c-.64.38-.37,1.36.37,1.36h41.97c7.12,0,13.34-4.8,15.14-11.69l2.79-10.64c1.32-5.06-2.49-10.01-7.72-10.01h-21.83c-.6,0-1.04-.55-.9-1.14l2.38-10.25c.15-.65.73-1.12,1.41-1.12h24.23c.64,0,1.27-.18,1.81-.51l5.38-3.29c.63-.39.36-1.36-.38-1.36ZM584.04,170.5h-42.15c-7.1,0-13.3,4.78-15.11,11.65l-2.58,9.81c-1.27,4.81,2.36,9.52,7.34,9.52h21.22c1.64,0,2.84,1.55,2.42,3.14l-2.55,9.67c-.29,1.1-1.28,1.86-2.41,1.86h-24.85c-.61,0-1.22.17-1.75.48l-4.2,2.51c-.64.38-.37,1.36.37,1.36h41.97c7.12,0,13.34-4.8,15.14-11.69l2.92-11.15c1.26-4.8-2.37-9.5-7.33-9.5h-22.36c-.6,0-1.04-.55-.9-1.14l2.38-10.25c.15-.65.73-1.12,1.41-1.12h24.23c.64,0,1.27-.18,1.81-.51l5.38-3.29c.63-.39.36-1.36-.38-1.36ZM134.11,63.43l1.93,2.75c1.74,2.48,2.32,5.6,1.58,8.54l-15.07,59.85c-2.29,9.09,4.59,17.92,13.97,17.92h61.34c13.08,0,24.52-8.78,27.92-21.4l18.35-68.25c.32-1.18-.57-2.35-1.8-2.35h-37.29c-.84,0-1.58.56-1.8,1.38l-22.05,81.75c-.22.81-.96,1.38-1.8,1.38h-16.14c-1.23,0-2.12-1.17-1.8-2.35l21.72-79.8c.32-1.18-.57-2.35-1.8-2.35h-45.74c-1.51,0-2.39,1.7-1.52,2.93ZM204.5,173.06l1.03,1.47c.93,1.32,1.23,2.98.84,4.55l-8.02,31.88c-1.22,4.84,2.44,9.54,7.44,9.54h32.67c6.96,0,13.06-4.67,14.87-11.4l9.77-36.35c.17-.63-.31-1.25-.96-1.25h-19.86c-.45,0-.84.3-.96.73l-11.74,43.54c-.12.43-.51.73-.96.73h-8.59c-.65,0-1.13-.62-.96-1.25l11.57-42.5c.17-.63-.3-1.25-.96-1.25h-24.36c-.8,0-1.27.9-.81,1.56ZM372.94,61.72l4.37,6.02c1.27,1.74,1.67,3.97,1.09,6.05l-20.58,73.62c-.71,2.56,1.21,5.09,3.86,5.09h77.8c.17,0,.33-.05.46-.15l8.67-6.46c.59-.44.28-1.39-.46-1.39h-46.83c-.51,0-.87-.48-.74-.97l8.89-32.92c.09-.34.39-.57.74-.57h39.13c.15,0,.3-.04.43-.13l9.02-6.01c.63-.42.33-1.41-.43-1.41h-46.02c-.51,0-.88-.49-.74-.98l8.89-30.46c.1-.33.4-.55.74-.55h47.09c4.13.83,5.6-6.54,5.98-9.12.07-.46-.29-.88-.76-.88h-99.97c-.63,0-.99.71-.62,1.22ZM76.53,172.14l2.28,3.14c.66.91.87,2.07.57,3.16l-10.74,38.41c-.37,1.33.63,2.66,2.02,2.66h40.59c.09,0,.17-.03.24-.08l4.52-3.37c.31-.23.15-.72-.24-.72h-24.43c-.26,0-.46-.25-.39-.51l4.64-17.17c.05-.18.21-.3.39-.3h20.42c.08,0,.16-.02.22-.07l4.71-3.13c.33-.22.17-.74-.22-.74h-24.01c-.27,0-.46-.26-.39-.51l4.64-15.89c.05-.17.21-.29.39-.29h24.57c2.16.43,2.92-3.41,3.12-4.76.04-.24-.15-.46-.4-.46h-52.16c-.33,0-.52.37-.32.64ZM275.53,172.14l2.28,3.14c.66.91.87,2.07.57,3.16l-10.74,38.41c-.37,1.33.63,2.66,2.02,2.66h40.59c.09,0,.17-.03.24-.08l4.52-3.37c.31-.23.15-.72-.24-.72h-24.43c-.26,0-.46-.25-.39-.51l4.64-17.17c.05-.18.21-.3.39-.3h20.42c.08,0,.16-.02.22-.07l4.71-3.13c.33-.22.17-.74-.22-.74h-24.01c-.27,0-.46-.26-.39-.51l4.64-15.89c.05-.17.21-.29.39-.29h24.57c2.16.43,2.92-3.41,3.12-4.76.04-.24-.15-.46-.4-.46h-52.16c-.33,0-.52.37-.32.64ZM398.27,172.57l1.51,1.52c.19.19.45.3.72.3h15.41c.67,0,1.16.64.97,1.29l-12.27,43.52c-.18.65.3,1.29.97,1.29h21.31c.46,0,.86-.31.98-.76l11.35-43.34c.12-.45.52-.76.98-.76h17.94c.56,0,1.01-.45,1.01-1.01v-3.11c0-.56-.45-1.01-1.01-1.01h-59.02c-1.08,0-1.62,1.31-.86,2.07Z" />
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
            <img src="{{asset('assets/images/imagenNosotros.png')}}" class="img-fluid" alt="Imagen Nosotros, Capacitación de Personal">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>Tu Mejor Aliado en Repuestos Multimarca</h3>
            <p class="fst-italic">
              Corporación <span class="resaltar">SUPER</span> Repuestos ha ofrecido repuestos originales y genéricos,
              calidad de productos al mejor precio, con más de 10 años en el mercado. Ubicados por toda el área
              metropolitana de Caracas, en más de 10 <span class="resaltar">SUPER</span> tiendas, ¡todas a tu servicio!
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Corporación Súper Repuestos se inspira y actúa de acuerdo a los
                  siguientes valores corporativos:</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Honestidad, Honradez, Compromiso, Seriedad, Responsabilidad,
                  Empatía y Respeto hacia las personas y el medioambiente.</span></li>
            </ul>
            <p>
              Somos una empresa dedicada a la compraventa,
              exportación, importación, almacenaje, distribución y
              comercialización en general al por mayor y detal de
              todo tipo de <span class="resaltar">SUPER</span> repuestos, partes y accesorios para todo
              tipo de vehículos, japoneses, americanos, coreanos,
              chinos y europeos.

            <div class="highlight-box mt-4 p-4">
              <h3 class="highlight-text text-center">
                <span style="color: goldenrod;">Potencia tu vehículo con repuestos de calidad <br>¡Encuentra todo lo que
                  necesitas, para cualquier marca, al mejor precio</span>
              </h3>
            </div>

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
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoJeep.svg')}}" class="img-fluid" alt="Jeep">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoFord.png')}}" class="img-fluid" alt="Ford">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoToyota.svg')}}" class="img-fluid"
                alt="Toyota">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoNissan.png')}}" class="img-fluid"
                alt="Nissan">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoMitsubishi.png')}}" class="img-fluid"
                alt="Mitsubishi">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoChevrolet.png')}}" class="img-fluid"
                alt="Chevrolet">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoChery.png')}}" class="img-fluid"
                alt="Chery">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoFiat.png')}}" class="img-fluid" alt="Fiat">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoHyundai.png')}}" class="img-fluid"
                alt="Hyundai">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoDongfeng.webp')}}" class="img-fluid"
                alt="Dongfeng">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoHonda.png')}}" class="img-fluid"
                alt="Honda">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoMazda.png')}}" class="img-fluid"
                alt="Mazda">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoKia.svg')}}" class="img-fluid" alt="Kia">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoJac.png')}}" class="img-fluid" alt="Jac">
            </div>
            <div class="swiper-slide"><img src="{{asset('assets/images/logosMultimarca/iconoHaima.png')}}" class="img-fluid"
                alt="Haima">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
              src="{{asset('assets/images/imagenVisionMision.jpg')}}" alt="Imagen Grupal de Equipo Casanova"></div>
          <div class="col-lg-6">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <!-- Reemplazar el icono con una imagen .png a futuros cambios -->
              <img src="{{asset('assets/images/pruebaIconoMision.svg')}}" alt="Icono Misión" class="flex-shrink-0 me-3"
                style="width: 50px; height: 50px;">
              <div>
                <h4><span class="resaltar">SUPER</span> MISIÓN</h4>
                <p>Satisfacer las necesidades de los clientes, de manera rápida y eficiente, al mismo tiempo superar sus
                  expectativas en materia de repuestos automotrices, aplicando la etiqueta de servicio. Asimismo, seguir
                  importando mercancía de calidad y prestigio, contando con el respaldo y garantía de los fabricantes.
                </p>
              </div>
            </div><!-- End Features Item -->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <img src="{{asset('assets/images/pruebaIconoVision.svg')}}" alt="Icono Visión" class="flex-shrink-0 me-3"
                style="width: 50px; height: 50px;">
              <div>
                <h4><span class="resaltar">SUPER</span> VISIÓN</h4>
                <p>Ser la empresa líder en la venta y distribución de repuestos automotrices, con el mayor y más variado
                  surtido de productos exclusivos y de primera calidad. Propiciando el mejoramiento continuo de nuestro
                  equipo de trabajo, con el fin de desarrollar un alto nivel de satisfacción y confianza que nos
                  convierta en la primera opción d los clientes y proveedores, contribuyendo de esta manera con el
                  desarrollo del país.</p>
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
              <div class="service-bg" style="background-image: url('assets/images/servicioTalleres.jpg');">
              </div>
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="{{Route('ServicioTallerSuperPanteonUno.index')}}" class="stretched-link">
                <h3>Servicio de Taller: Super Panteón 1</h3>
              </a>
              <p>Ofrecemos nuestro <span class="resaltar">SUPER</span> servicio de talleres, actualmente tenemos
                disponibles dos talleres para tu
                servicio, Super Shaya y <span class="resaltar">Super Panteón 1</span> Si buscas soluciones al momento
                ¡Visitanos!</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <!-- Fondo de la imagen .png para futuros cambios-->
              <div class="service-bg" style="background-image: url('assets/images/servicioTalleres2.jpeg');">
              </div>
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="{{Route('ServicioTallerSuperShaya.index')}}" class="stretched-link">
                <h3>Servicio de Taller: Super Shaya</h3>
              </a>
              <p>Ofrecemos nuestro <span class="resaltar">SUPER</span> servicio de talleres, actualmente tenemos
                disponibles dos talleres para tu
                servicio, Super Panteón 1 y <span class="resaltar">Super Shaya</span> Si buscas soluciones al momento
                ¡Visitanos!</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <!-- Fondo de la imagen .png para futuros cambios-->
              <div class="service-bg" style="background-image: url('assets/images/servicioDelivery.jpg');">
              </div>
              <div class="icon">
                <i class="bi bi-truck"></i>
              </div>
              <a href="https://wa.me/584242797050" class="stretched-link">
                <h3>Servicio de Delivery</h3>
              </a>
              <p>Ofrecemos nuestro <span class="resaltar">SUPER</span> servicio de Delivery a cualquier parte de la Gran
                Caracas, destacamos por solucionar tus problemas de inmediato! En pocos minutos tendrás en tus manos la
                pieza que resolverá tus problemas mecanicos!</p>
            </div>
          </div><!-- End Service Item -->

          <!-- Clients Section -->
          <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 450,
              "autoplay": {
                "delay": 1000
              },
              "slidesPerView": "auto",
              "pagination": {
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
                  <div class="swiper-slide"><img src="{{asset('assets/images/logosEnvios/iconoZoomEnvios.png')}}" class="img-fluid"
                      alt="Zoom">
                  </div>
                  <div class="swiper-slide"><img src="{{asset('assets/images/logosEnvios/iconoMrwEnvios.png')}}" class="img-fluid"
                      alt="MRW">
                  </div>
                  <div class="swiper-slide"><img src="{{asset('assets/images/logosEnvios/iconoDhlEnvios.jpg')}}" class="img-fluid"
                      alt="DHL">
                  </div>
                  <div class="swiper-slide"><img src="{{asset('assets/images/logosEnvios/iconoFedexEnvios.png')}}" class="img-fluid"
                      alt="Fedex">
                  </div>
                  <div class="swiper-slide"><img src="{{asset('assets/images/logosEnvios/iconoTealcaEnvios.jfif')}}" class="img-fluid"
                      alt="Tealca">
                  </div>
                  <div class="swiper-slide"><img src="{{asset('assets/images/logosEnvios/iconoDomesaEnvios.png')}}" class="img-fluid"
                      alt="Domesa">
                  </div>
                  <div class="swiper-slide"><img src="{{asset('assets/images/logosEnvios/iconoLibertyExpressEnvios.png')}}"
                      class="img-fluid" alt="Liberty Express">
                  </div>
                  <div class="swiper-slide"><img src="{{asset('assets/images/logosEnvios/iconoUpsEnvios.png')}}" class="img-fluid"
                      alt="UPS">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>

            </div>

          </section><!-- /Clients Section -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <!-- Fondo de la imagen .png para futuros cambios-->
              <div class="service-bg" style="background-image: url('assets/images/servicioEnviosNacionales.png');">
              </div>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>
              <a href="https://wa.me/584242797050" class="stretched-link">
                <h3>Servicio de Envios Nacionales</h3>
              </a>
              <p>Ofrecemos nuestro <span class="resaltar">SUPER</span> servicio de Envios a Nivel Nacional, no hay
                limites cuando se trata de ofrecer soluciones! En pocos minutos tendrás en tus manos la pieza que
                resolverá tus problemas mecanicos!</p>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <!-- Fondo de la imagen .png para futuros cambios-->
              <div class="service-bg" style="background-image: url('assets/images/servicioCotizacion');">
              </div>
              <div class="icon">
                <i class="bi bi-calculator"></i>
              </div>
              <a href="https://wa.me/584129139684" class="stretched-link">
                <h3>Servicio de Cotización</h3>
              </a>
              <p>Ofrecemos nuestro <span class="resaltar">SUPER</span>servicio de Cotización para clientes al mayor y al
                detal. Ponte en contacto con nuestros mejores aseores de ventas, para guiarte y darte una atención y
                experiencia cercana, profesional y personalizada.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <!-- Fondo de la imagen .png para futuros cambios-->
              <div class="service-bg" style="background-image: url('assets/images/servicioComentarioObservacion.jpeg');">
              </div>
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <a href="https://wa.me/584123097243" class="stretched-link">
                <h3>Comentarios u Observaciones</h3>
              </a>
              <p>Ofrecemos esta <span class="resaltar">SUPER</span> sección para entregar un espacio en el que nuestros
                clientes puedan realizar sugerencias de mejoras, solicitar apoyo técnico, ideas a tomar en cuenta o
                quejas directas con el servicio</p>
            </div>
          </div><!-- End Service Item -->

        </div>
      </div>

    </section><!-- End Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="{{asset('assets/images/fondoFalsoVistaMonitor.jpg')}}" alt="Fondo Falso Vista Monitor Super Repuestos"
        class="img-fluid fondo-falso-vista-monitor">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Servicio <span class="resaltar">SUPER</span> en Línea</h3>
              <p>¿Estás buscando un repuesto para tu vehiculo o camión? Comunicate con nuestros SUPER asesores y
                solicita asistencia. <br>Ubicamos el repuesto que necesitas en nuestras tiendas y almacenes.
                <br>¡Estamos para ayudarte!
              </p>
              <a class="cta-btn" href="https://wa.me/584129139684" target="_blank">¡Contactanos!</a>
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
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaShai/imagenProductoShai3.jpeg')}}" class="img-fluid"
                alt="Kit de Tren Delantero, Chery Grand Tigger 4x4 y 4x2">
              <div class="portfolio-info">
                <h4>Kit de Tren Delantero, Chery Grand Tigger 4x4 y 4x2</h4>
                <p>Repuestos Super Shai tiene todo tipo de repuestos para tu vehiculo y Camiones, tambien multimarcas!
                  Ven y aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones y descuentos. Cotiza
                  ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaShai/imagenProductoShai3.jpeg')}}"
                  title="Somos especialistas en repuestos para Camiones y multimarca, todo para tu vehiculo"
                  data-gallery="portfolio-gallery-shai" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-suspension">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaSuspension/imagenProductoSuspension2.jpeg')}}"
                class="img-fluid" alt="Par Mesetas Superiores, Jeep Cherookee 4G">
              <div class="portfolio-info">
                <h4>Par Mesetas Superiores, Jeep Cherookee 4G</h4>
                <p>Repuestos Super Suspensión tiene todo tipo de repuestos para tu vehiculo, Suspensiones y Tren
                  Delanteros, tambien multimarcas! Ven y aprovecha nuestros <span class="resaltar">SUPER</span> precios,
                  promociones y descuentos. Cotiza ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaSuspension/imagenProductoSuspension2.jpeg')}}"
                  title="Somos especialistas en Suspensiones y Tren Delanteros, tambien multimarca, todo para tu vehiculo"
                  data-gallery="portfolio-gallery-suspension" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-victoria">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaVictoria/imagenProductoVictoria1.jpeg')}}" class="img-fluid"
                alt="Kit de Tren Delantero, Chevrolet Optra">
              <div class="portfolio-info">
                <h4>Kit de Tren Delantero, Chevrolet Optra</h4>
                <p>Repuestos Super Victoria tiene todo tipo de repuestos para tu vehiculo, somos multimarcas! Ven y
                  aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones y descuentos. Cotiza
                  ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaVictoria/imagenProductoVictoria1.jpeg')}}"
                  title="Somos especialistas en repuestos multimarca, todo para tu vehiculo"
                  data-gallery="portfolio-gallery-victoria" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-junin">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaJunin/imagenProductoJunin1.jpeg')}}" class="img-fluid"
                alt="Chery Arauca y X1">
              <div class="portfolio-info">
                <h4>Chery Arauca y X1</h4>
                <p>Repuestos Super Junín tiene todo tipo de repuestos para tu vehiculo Chery, Jac, Dongfeng, Saic, Zotye
                  y Haima, tambien multimarcas! Ven y aprovecha nuestros <span class="resaltar">SUPER</span> precios,
                  promociones y descuentos. Cotiza ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaJunin/imagenProductoJunin1.jpeg')}}"
                  title="Somos especialistas en Chery, Jac, Dongfeng, Saic, Zotye y Haima"
                  data-gallery="portfolio-gallery-junin" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-shaya">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaShaya/imagenProductoShaya3.jpeg')}}" class="img-fluid"
                alt="Arranque, Mazda 3 y Mazda 6">
              <div class="portfolio-info">
                <h4>Arranque, Mazda 3 y Mazda 6</h4>
                <p>Repuestos Super Shaya tiene todo tipo de repuestos para tu vehiculo, somos multimarcas! Ven y
                  aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones y descuentos. Cotiza
                  ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaShaya/imagenProductoShaya3.jpeg')}}"
                  title="Somos especialistas en repuestos multimarca, todo para tu vehiculo"
                  data-gallery="portfolio-gallery-shaya" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-casanova">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaCasanova/imagenProductoCasanova1.jpeg')}}" class="img-fluid"
                alt="Mitsubishi, Kia y Hyundai">
              <div class="portfolio-info">
                <h4>Mitsubishi, Kia y Hyundai</h4>
                <p>Repuestos Super Casanova tiene todo tipo de repuestos para tu vehiculo Mitsubishi, Kia y Hyundai,
                  tambien multimarcas! Ven y aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones
                  y descuentos. Cotiza ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaCasanova/imagenProductoCasanova1.jpeg')}}"
                  title="Somos especialistas es Mitsubishi, Kia, Hyundai y multimarcas"
                  data-gallery="portfolio-gallery-casanova" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-panteon2">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaPanteonDos/imagenProductoPanteonDos1.jpeg')}}"
                class="img-fluid" alt="Base de Motor, Hyundai">
              <div class="portfolio-info">
                <h4>Base de Motor, Hyundai</h4>
                <p>Repuestos Super Panteón 2 tiene todo tipo de repuestos para tu vehiculo ¡Somos multimarcas! Ven y
                  aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones y descuentos. Cotiza
                  ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaPanteonDos/imagenProductoPanteonDos1.jpeg')}}"
                  title="Somos especialistas en repuestos para tu vehiculo multimarca"
                  data-gallery="portfolio-gallery-panteon2" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repuestos1212">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenProductoRepuestos12121.jpeg')}}"
                class="img-fluid" alt="Modulo Bomba de Gasolina Completa, Explorer 4.6">
              <div class="portfolio-info">
                <h4>Modulo Bomba de Gasolina Completa, Explorer 4.6</h4>
                <p>Tenemos todo tipo de repuestos para tu vehiculo Jeep y Ford, tambien somos multimarcas! Ven y
                  aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones y descuentos. Cotiza
                  ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenProductoRepuestos12121.jpeg')}}"
                  title="Somos especialistas en repuestos Jeep, Ford y multimarca, todo para tu vehiculo"
                  data-gallery="portfolio-gallery-repuestos1212" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-estrella">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaEstrella/imagenProductoEstrella3.jpeg')}}" class="img-fluid"
                alt="Bomba de Dirección, Chevrolet">
              <div class="portfolio-info">
                <h4>Bomba de Dirección, Chevrolet</h4>
                <p>Tenemos todo tipo de repuestos para tu vehiculo Fiat, Volkswagen y Renault, tambien somos
                  multimarcas! Ven y aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones y
                  descuentos. Cotiza ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaEstrella/imagenProductoEstrella3.jpeg')}}"
                  title="Somos especialistas en repuestos Fiat, Volkswagen, Renault y multimarca, todo para tu vehiculo"
                  data-gallery="portfolio-gallery-estrella" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
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
            <img src="{{asset('assets/images/estadisticasServiciosClientes.jpg')}}"
              alt="Imagen de Buena Atención al Cliente satisfecho con sus Repuestos" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <h3 class="fw-bold fs-2 mb-3">Nuestro <span class="resaltar">SUPER</span> Servicio</h3>
            <p>
              Contamos con clientes fieles que confian en nuestros porductos por su calidad y precio en el mercado,
              logrando así que Corporación <span class="resaltar">SUPER</span> Repuestos sea su casa de auto partes en
              todo momento.
            </p>

            <div class="row gy-4">

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-emoji-smile flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="2"
                      class="purecounter"></span>
                    <p><strong>Super Clientes</strong> <span>satisfechos por nuestra calidad</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-pin-map"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2"
                      class="purecounter"></span>
                    <p><strong>Super Tiendas</strong> <span>distribuidas para tu servicio</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-fire"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2"
                      class="purecounter"></span>
                    <p><strong>Super Multimarca</strong> <span>variedad para la salud de tu vehiculo</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-people flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2"
                      class="purecounter"></span>
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

            <!-- Video 1 Casanova -->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionCasanova.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super Casanova</h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">Mitsubishi, Kia,
                    Hyundai, tambien somos multimarcas</span>! No esperes más por tu repuesto, tenemos delivery a toda
                  el área metropolitana de Caracas y envíos nacionales. Ofrecemos los mejores precios del mercado en
                  nuestras <span class="resaltar">SUPER</span> tiendas.</p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 2 Estrella -->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionEstrella.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super Estrella</h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">Renault, Fiat,
                    Volkswagen, tambien somos multimarcas</span>! No esperes más por tu repuesto, tenemos delivery a
                  toda el área metropolitana de Caracas y envíos nacionales. Ofrecemos los mejores precios del mercado
                  en nuestras <span class="resaltar">SUPER</span> tiendas.</p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 3 Junín -->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionJunin.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super Junín</h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">Chery, Dongfeng, Jac,
                    Zotye, Haima, Hafei, tambien somos multimarcas</span>! No esperes más por tu repuesto, tenemos
                  delivery a toda el área metropolitana de Caracas y envíos nacionales. Ofrecemos los mejores precios
                  del mercado en nuestras <span class="resaltar">SUPER</span> tiendas.</p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 4 Panteón 1-->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosTiendaPanteonUno/promocionPanteonUno2.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super Panteón 1</h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">Chery, multimarcas y
                    servicio de taller</span>! No esperes más por tu repuesto, tenemos delivery a toda el área
                  metropolitana de Caracas y envíos nacionales. Ofrecemos los mejores precios del mercado en nuestras
                  <span class="resaltar">SUPER</span> tiendas.
                </p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 5 Panteón 2-->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionPanteonDos.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super Panteón 2</h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">repuestos
                    multimarcas</span>! No esperes más por tu repuesto, tenemos delivery a toda el área metropolitana de
                  Caracas y envíos nacionales. Ofrecemos los mejores precios del mercado en nuestras <span
                    class="resaltar">SUPER</span> tiendas.</p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 6 1212-->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionRepuestos1212.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super 1212 </h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">Jeep, Ford, tambien
                    somos multimarcas</span>! No esperes más por tu repuesto, tenemos delivery a toda el área
                  metropolitana de Caracas y envíos nacionales. Ofrecemos los mejores precios del mercado en nuestras
                  <span class="resaltar">SUPER</span> tiendas.
                </p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 7 Shai-->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionShai.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super Shai</h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">Chery, Camiones,
                    tambien somos multimarcas</span>! No esperes más por tu repuesto, tenemos delivery a toda el área
                  metropolitana de Caracas y envíos nacionales. Ofrecemos los mejores precios del mercado en nuestras
                  <span class="resaltar">SUPER</span> tiendas.
                </p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 8 Shaya-->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionShaya.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super Shaya</h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">repuestos
                    multimarcas</span>! No esperes más por tu repuesto, tenemos delivery a toda el área metropolitana de
                  Caracas y envíos nacionales. Ofrecemos los mejores precios del mercado en nuestras <span
                    class="resaltar">SUPER</span> tiendas.</p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 9 Suspensión-->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionSuspension.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super Suspensión</h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">suspensiones, tren
                    delanteros, tambien somos multimarcas</span>! No esperes más por tu repuesto, tenemos delivery a
                  toda el área metropolitana de Caracas y envíos nacionales. Ofrecemos los mejores precios del mercado
                  en nuestras <span class="resaltar">SUPER</span> tiendas.</p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 10 Victoria-->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionVictoria.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Repuestos Super Victoria</h3>
                <p>¡Visitanos y cotiza con nosotros! Somos especialistas en <span class="resaltar">repuestos
                    multimarcas</span>! No esperes más por tu repuesto, tenemos delivery a toda el área metropolitana de
                  Caracas y envíos nacionales. Ofrecemos los mejores precios del mercado en nuestras <span
                    class="resaltar">SUPER</span> tiendas.</p>
              </div>
            </div><!-- End Video Item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Videos Section -->


    <!-- Stores Section -->
    <section id="stores" class="stores section dark-background">

      <img src="{{asset('assets/images/imagenesTiendas/imagenFondoFachadaTienda.jpg')}}" class="stores-bg"
        alt="Fondo de Repuestos de Autos con Superheroe Superman">

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
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaCasanova/tiendaSuperCasanova1.jpg')}}" class="store-img"
                    alt="Fachada Tienda Repuestos Super Casanova">
                  <div class="store-overlay">
                    <h3>Super Casanova</h3>
                    <p>Av. Casanova, frente al Hotel Las Américas, Chacaíto</p>
                    <a href="https://www.instagram.com/repuestoscasanova/?hl=es-la" class="btn-visit"
                      target="_blank">Instagram</a>
                  </div>
                </div>
              </div>
            </div><!-- End store item -->

            <div class="swiper-slide">
              <div class="store-item">
                <div class="store-img-container">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaEstrella/imagenTiendaEstrella2.jpeg')}}"
                    class="store-img" alt="Fachada Tienda Repuestos Super Estrella">
                  <div class="store-overlay">
                    <h3>Super Estrella</h3>
                    <p>Avenida La Estrella, Caracas 1000, Distrito Capital, Venezuela</p>
                    <a href="https://www.instagram.com/repuestoslaestrellaa/" class="btn-visit"
                      target="_blank">Instagram</a>
                  </div>
                </div>
              </div>
            </div><!-- End store item -->

            <div class="swiper-slide">
              <div class="store-item">
                <div class="store-img-container">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaJunin/imagenTiendaJunin3.jpeg')}}" class="store-img"
                    alt="Fachada Tienda Repuestos Super Junín">
                  <div class="store-overlay">
                    <h3>Super Junín</h3>
                    <p>Av. sur 11, Caracas 1014, Distrito Capital, Venezuela</p>
                    <a href="https://www.instagram.com/repuestosjunin1212/?hl=es" class="btn-visit"
                      target="_blank">Instagram </a>
                  </div>
                </div>
              </div>
            </div><!-- End store item -->

            <div class="swiper-slide">
              <div class="store-item">
                <div class="store-img-container">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaPanteonDos/imagenTiendaPanteonDos1.jpeg')}}"
                    class="store-img" alt="Fachada Tienda Repuestos Super Panteón 2">
                  <div class="store-overlay">
                    <h3>Super Panteón 2</h3>
                    <p>Centro, Av. Panteon, Edif. San Francisco, Caracas 1080, Distrito Capital, Venezuela</p>
                    <a href="https://www.instagram.com/repuestossuperpanteon?igsh=Nnc4N21wOW85eG4y" class="btn-visit"
                      target="_blank">Instagram</a>
                  </div>
                </div>
              </div>
            </div><!-- End store item -->

            <div class="swiper-slide">
              <div class="store-item">
                <div class="store-img-container">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaPanteonUno/imagenTiendaPanteonUno3.jpeg')}}"
                    class="store-img" alt="Fachada Tienda Repuestos Super Panteón 1">
                  <div class="store-overlay">
                    <h3>Super Panteón 1</h3>
                    <p>C. Las Brisas, Caracas 1010, Distrito Capital, Venezuela</p>
                    <a href="https://www.instagram.com/repuestos_superpanteon?igsh=MWN1bTlzbTB0ZG0xZQ=="
                      class="btn-visit" target="_blank">Instagram</a>
                  </div>
                </div>
              </div>
            </div><!-- End store item -->

            <div class="swiper-slide">
              <div class="store-item">
                <div class="store-img-container">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenFrontalRepuestos1212.jpeg')}}"
                    class="store-img" alt="Fachada Tienda Repuestos Super Repuestos1212">
                  <div class="store-overlay">
                    <h3>Super Repuestos1212</h3>
                    <p>Av. Principal Roca Tarpeya, Caracas, Venezuela</p>
                    <a href="https://www.instagram.com/superrepuesto12?igsh=ZGM1eGVibGZxN2Q=" class="btn-visit"
                      target="_blank">Instagram</a>
                  </div>
                </div>
              </div>
            </div><!-- End store item -->

            <div class="swiper-slide">
              <div class="store-item">
                <div class="store-img-container">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaShai/imagenTiendaShai4.jpeg')}}" class="store-img"
                    alt="Fachada Tienda Repuestos Super Shai">
                  <div class="store-overlay">
                    <h3>Super Shai</h3>
                    <p>Av. sur 11, Caracas 1014, Distrito Capital, Venezuela</p>
                    <a href="https://www.instagram.com/repuestossupershai?igsh=MTY2YnRrNm1pdWR6aA==" class="btn-visit"
                      target="_blank">Instagram</a>
                  </div>
                </div>
              </div>
            </div><!-- End store item -->

            <div class="swiper-slide">
              <div class="store-item">
                <div class="store-img-container">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaShaya/imagenTiendaShaya4.jpeg')}}" class="store-img"
                    alt="Fachada Tienda Repuestos Super Shaya">
                  <div class="store-overlay">
                    <h3>Super Shaya</h3>
                    <p>Av. San Martin, Bloque de Arma, cerca de la E/S PDV la PAZ, Edif. Berliz PB, Caracas 1020,
                      Distrito Capital, Venezuela</p>
                    <a href="https://www.instagram.com/repuestosshaya/?hl=es" class="btn-visit"
                      target="_blank">Instagram</a>
                  </div>
                </div>
              </div>
            </div><!-- End store item -->

            <div class="swiper-slide">
              <div class="store-item">
                <div class="store-img-container">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaSuspension/imagenTiendaSuspension1.png')}}"
                    class="store-img" alt="Fachada Tienda Repuestos Super Suspensión">
                  <div class="store-overlay">
                    <h3>Super Suspensión</h3>
                    <p>Av. San Martín, Caracas 1020, Distrito Capital, Venezuela</p>
                    <a href="https://www.instagram.com/repuestosuspension/" class="btn-visit"
                      target="_blank">Instagram</a>
                  </div>
                </div>
              </div>
            </div><!-- End store item -->

            <div class="swiper-slide">
              <div class="store-item">
                <div class="store-img-container">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaVictoria/imagenTiendaVictoria1.jpg')}}" class="store-img"
                    alt="Fachada Tienda Repuestos Super Victoria">
                  <div class="store-overlay">
                    <h3>Super Victoria</h3>
                    <p>Av. Pdte. Medina, Caracas 1041, Distrito Capital, Venezuela</p>
                    <a href="https://www.instagram.com/repuestovictoria/?hl=es" class="btn-visit">Instagram</a>
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

        <img src="{{asset('assets/images/iconosMetodoPago/imagenFondoMetodoPago.jpg')}}" class="payment-methods-bg"
          alt="Fondo de métodos de pago">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="section-header">
            <h2 class="payment-title">Métodos de Pago</h2>
            <p class="payment-subtitle">Aceptamos diversas formas de pago en nuestras tiendas ¡Visitanos!</p>
          </div>

          <div class="compact-payment-grid">
            <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="150">
              <img src="{{asset('assets/images/iconosMetodoPago/iconoMetodoPagoMaestro.png')}}" alt="Maestro">
            </div>

            <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="200">
              <img src="{{asset('assets/images/iconosMetodoPago/iconoMetodoPagoMastercard.png')}}" alt="Mastercard">
            </div>

            <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="250">
              <img src="{{asset('assets/images/iconosMetodoPago/iconoMetodoPagoPagoMovil.png')}}" alt="Pago Móvil">
            </div>

            <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="300">
              <img src="{{asset('assets/images/iconosMetodoPago/iconoMetodoPagoVisa.png')}}" alt="Visa">
            </div>

            <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="350">
              <img src="{{asset('assets/images/iconosMetodoPago/iconoMetodoPagoZelle.png')}}" alt="Zelle">
            </div>

            <div class="compact-payment-item" data-aos="fade-in" data-aos-delay="400">
              <img src="{{asset('assets/images/iconosMetodoPago/iconoMetodoPagoBinance.png')}}" alt="Binance">
            </div>
          </div>

        </div>

      </section><!-- /Compact Payment Methods Section -->


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
          <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.1946917331868!2d-66.91164721499187!3d10.491594506552174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5f7863cbe453%3A0x7c74abe1e74eedc1!2sTapicer%C3%ADa%20fuerzas%20Armadas!5e0!3m2!1ses!2snl!4v1749843218510!5m2!1ses!2snl"
            frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <p>+58 4242797050</p>
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
            <form action="https://formsubmit.co/ventas@repuestossuper.com" method="post" class="php-email-form"
              data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nombre y Apellido" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email de Usuario" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Asunto de Email" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Solicitud, Cotización o Consulta" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Enviando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Tu mensaje ha sido enviado exitosamente, gracias!</div>

                  <button type="submit">Enviar mensaje</button>
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
              <p class="mt-3"><strong>Telefono:</strong> <span>+58 4242797050</span></p>
              <p><strong>Email:</strong> <span>ventas@repuestossuper.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nuestros Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero"> Inicio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about"> Nosotros</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Servicios</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#portfolio"> Productos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact"> Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{Route('ServicioTallerSuperPanteonUno.index')}}"> Taller: Super
                  Panteón 1</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{Route('ServicioTallerSuperShaya.index')}}"> Taller: Super Shaya</a>
              </li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://wa.me/584242797050"> Servicio de Delivery</a>
              </li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://wa.me/584242797050"> Servicio de Envios
                  Nacionales</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://wa.me/584129139684"> Servicio de Cotización</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Nuesto <span class="resaltar">SUPER</span> Logo Empresarial</h4>
            <p>Visitanos y cotiza en cada una de nuestras tiendas especializadas en repuestos Multimarcas, ubicadas en
              toda Caracas, estamos a tu servicio!</p>
            <img src="{{asset('assets/images/pruebaLogo.png')}}" alt="Logo Corporación SUPER Repuestos" class="img-fluid">
          </div>

        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>2025 Copyright</span> <strong class="px-1 sitename">Corporación <strong>SUPER</strong> Repuestos</strong>
          <span>All Rights Reserved</span>
        </p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://www.instagram.com/gianniantonio_?igsh=OTRrN2kxZ3czY2Zq">Gianni Imperato</a>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>

