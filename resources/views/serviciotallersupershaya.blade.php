<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Servicio de Taller: Super Shaya | Corporación Super Repuestos
  </title>
  <meta name="description" content="Corporación Super Repuestos, tu mejor aliado en repuestos multimarca, es una empresa dedicada a la venta de repuestos y accesorios para vehículos, ofreciendo productos de alta calidad y un servicio excepcional.">
  <meta name="keywords" content="Corporación Super Repuestos, repuestos multimarca, venta de repuestos, accesorios para vehículos, servicio excepcional, calidad en repuestos, repuestos de alta calidad, empresa de repuestos, repuestos y accesorios, vehiculos, automóviles, camionetas, motos, repuestos para autos, repuestos para camionetas, repuestos para motos, accesorios de vehículos, venta de accesorios, servicio al cliente, atención al cliente, repuestos confiables, repuestos duraderos, Jeep, Ford, Chevrolet, Toyota, Nissan, Hyundai, Kia, Volkswagen, Honda, Mitsubishi, Subaru, Mazda, Suzuki, Isuzu, repuestos para Ford, repuestos para Chevrolet, repuestos para Toyota, repuestos para Nissan, repuestos para Hyundai, repuestos para Kia, repuestos para Volkswagen, repuestos para Honda, repuestos para Mitsubishi, repuestos para Subaru, repuestos para Mazda, repuestos para Suzuki, repuestos para Isuzu">
  <meta name="author" content="Gianni Imperato" />
  <meta name="copyright" content="Corporación Super Repuestos" />
  <meta name="robots" content="index"/>

  <!-- Favicons -->
  <link href="{{asset('assets/images/favicon.ico')}}" rel="Icono Corporación Super Repuestos">
  <link href="{{asset('assets/images/favicon.ico')}}" rel="Icono Corporación Super Repuestos">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Font Awesome | Iconos -->
  <script src="https://kit.fontawesome.com/f92a465687.js" crossorigin="anonymous"></script>

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

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/images/pruebaLogo.png')}}" alt="logoCorporacionSuper">
        <!-- <h1 class="sitename">Corporación SUPER</h1> -->
        <!-- <span>.</span> -->
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

      <a class="btn-getstarted" href="{{ route('home') }}#about">¡Enterate!</a>


      <!-- Espacio para incluir el Portal mediante un botón -->
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
                        Intranet
                    </a>

                    <!-- @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                        >
                            Register
                        </a>
                    @endif -->
                @endauth
            </nav>
        @endif

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading heading-con-imagen">
        <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaShaya/imagenFondoShaya.jpg')}}" alt="Flyer Servicio de Taller Super Shaya" class="imagen-hero">
        <div class="contenido-heading text-center">
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h1><span class="resaltar2">Servicio de Taller:</span> <span class="resaltar">SUPER</span> <span class="resaltar2">Shaya</span></h1>
              <p class="mb-0">Tenemos para nuestros <span class="resaltar">SUPER</span> clientes un servicio de taller para tu vehiculo, ofrecemos
                mantenimiento, reparación, escaneo, limpieza y mucho más. Visita nuestros centros especializados para el
                cuidado de tu vehiculo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li class="current">Taller de Servicio: Super Shaya</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaShaya/imagenTiendaShaya1.jpeg')}}" alt="Imagen Servicio de Taller Super Shaya 1">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaShaya/imagenTallerShaya1.jpeg')}}" alt="Imagen Servicio de Taller Super Shaya 2">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>¡Visitanos!</h3>
              <ul>
                <li><strong>Dirección</strong>: Av. San Martin, Bloque de Arma, cerca de la E/S PDV la PAZ, Edif. Berliz PB, Caracas 1020, Distrito Capital, Venezuela</li>
                <li><strong>Horarios</strong>: ¡Enterate de nuestros <span class="resaltar">SUPER</span> horarios!
                    <br>Lun - Vie | 8:00 am - 6:00 pm <br>Sab | 8:00 am - 4:00 pm
                </li>
                <li><strong>Tiktok</strong>: <a href="https://www.tiktok.com/@repuestosshaya?_t=ZM-8xwcFRnTdWY&_r=1" target="_blank">@repuestosshaya</a></li>
                <li><strong>Instagram</strong>: <a href="https://www.instagram.com/repuestosshaya/?hl=es" target="_blank">@repuestosshaya</a></li>
                <li><strong>Email</strong>: <a href="mailto:repuestosshaya@gmail.com">repuestosshaya@gmail.com</a></li>
            </ul>
            </div>

            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>¡Comunícate con nosotros!</h2>
              <div class="row">
                <!-- Columna 1 -->
                <div class="col-md-4">
                  <ul class="list-unstyled contact-list">
                    <li><i class="fab fa-whatsapp text-success me-2"></i><a href="https://wa.me/584242090580" 
                      target="_blank">Lucas</a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->


    <!-- Métodos de Pago Section-->
    <section id="pago" class="pago section">

      <!-- Seccion Title -->
      <div class="container section-title" data-aos="fade up">
        <h2>Métodos de Pago</h2>
      </div> <!--End Section Title-->

      <!-- Compact Payment Methods Section -->
      <section id="payment-methods" class="compact-payment-methods section dark-background">

        <img src="{{asset('assets/images/iconosMetodoPago/imagenFondoMetodoPago.jpg')}}" class="payment-methods-bg" alt="Fondo de métodos de pago">

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
        <h2>ubicación</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.1557213931956!2d-66.9441178!3d10.4883879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5fba979a98f7%3A0x68e16a1f0a086401!2sRepuestos%20Super%20Shaya%20c.a!5e0!3m2!1ses!2sfr!4v1752256833095!5m2!1ses!2sfr"
            frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

      </div>

      </div>

    </section><!-- /Contact Section -->


  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
              <span class="sitename">Corporación <strong>SUPER</strong></span>
            </a>
            <div class="footer-contact pt-3">
              <p>Av. San Martin, Bloque de Arma, cerca de la E/S PDV la PAZ, Edif. Berliz PB, Caracas 1020, Distrito Capital, Venezuela</p>
              <p>Caracas, Venezuela</p>
              <p class="mt-3"><strong>Telefono:</strong> <span>+58 4242797050</span></p>
              <p><strong>Email:</strong> <span>repuestosshaya@gmail.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="https://www.threads.com/@repuestosshaya?hl=es"><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/repuestosshaya/?hl=es"><i class="bi bi-instagram"></i></a>
              <a href="https://www.tiktok.com/@repuestosshaya?_t=ZM-8xwcFRnTdWY&_r=1"><i class="bi bi-tiktok"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nuestros Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#hero"> Inicio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#about"> Nosotros</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#services"> Servicios</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#portfolio"> Productos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#contact"> Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{Route('ServicioTallerSuperPanteonUno.index')}}"> Taller: Super Panteón 1</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{Route('ServicioTallerSuperShaya.index')}}"> Taller: Super Shaya</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://wa.me/584242797050"> Servicio de Delivery</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://wa.me/584242797050"> Servicio de Envios Nacionales</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://wa.me/584129139684"> Servicio de Cotización</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Nuesto <span class="resaltar">SUPER</span> Logo Empresarial</h4>
            <p>Visitanos y cotiza en cada una de nuestras tiendas especializadas en repuestos Multimarcas, ubicadas en toda Caracas, estamos a tu servicio!</p>
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
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>