<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tienda | Repuestos Super 1212</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logoCorporacionPestanas.ico')}}" rel="Icono Corporación Super Repuestos">
  <link href="{{asset('assets/img/logoCorporacionPestanas.ico')}}" rel="Icono Corporación Super Repuestos">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

<body class="portfolio-details-page">

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

      <a class="btn-getstarted" href="index.html#about">¡Enterate!</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading heading-con-imagen">
        <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenFondoRepuestos1212.jpg')}}" alt="Flyer Super Repuestos1212" class="imagen-hero">
        <div class="contenido-heading text-center">
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h1><span class="resaltar2">Repuestos</span> <span class="resaltar">SUPER</span> <span class="resaltar2">1212</span></h1>
                <p class="mb-0"><strong>¡No busques más! Tenemos todo lo que necesitas para el mantenimiento y funcionamiento de tu vehículo. Somos especialistas en <span class="resaltar">Jeep y Ford</span> tambien somos multimarca! En el SUPER multimarcas de Caracas contamos con cualquier tipo de repuesto para tu vehiculo y servicios de taller, ofreciendo la mejor calidad, excelente atención y precios insuperables.</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li class="current">Super Repuestos1212</li>
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
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenTiendaRepuestos12121.jpeg')}}" alt="Tienda Super Repuestos1212 1">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenTiendaRepuestos12122.jpeg')}}" alt="Tienda Super Repuestos1212 2">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenTiendaRepuestos12123.jpeg')}}" alt="Tienda Super Repuestos1212 3">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenTiendaRepuestos12124.jpeg')}}" alt="Tienda Super Repuestos1212 4">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>¡Visitanos!</h3>
              <ul>
                <li><strong>Dirección</strong>: Av. Principal Roca Tarpeya, Caracas, Venezuela</li>
                <li><strong>Horarios</strong>: ¡Enterate de nuestros <span class="resaltar">SUPER</span> horarios!
                    <br>Lun - Vie | 8:00 am - 6:00 pm <br>Sab | 8:00 am - 4:00 pm <br>Dom | 9:00 am - 1:00 pm
                </li>
                <li><strong>Tiktok</strong>: <a href="https://www.tiktok.com/@super_repuesto12?_t=ZM-8xwLOHe9RnZ&_r=11" target="_blank">@super_repuesto12</a></li>
                <li><strong>Instagram</strong>: <a href="https://www.instagram.com/superrepuesto12?igsh=ZGM1eGVibGZxN2Q=" target="_blank">@superrepuesto12</a></li>
                <li><strong>Email</strong>: <a href="mailto:superrepuestos27@gmail.com">superrepuestos27@gmail.com</a></li>
            </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>¡Comunícate con nosotros!</h2>
              <div class="row">
                <!-- Columna 1 -->
                <div class="col-md-4">
                  <ul class="list-unstyled contact-list">
                    <li><i class="fab fa-whatsapp text-success me-2"></i><a href="https://wa.me/584142563866"
                        target="_blank">Edinson</a></li>
                    <li><i class="fab fa-whatsapp text-success me-2"></i><a href="https://wa.me/584142256738"
                        target="_blank">Rolando</a></li>
                    <li><i class="fab fa-whatsapp text-success me-2"></i><a href="https://wa.me/584142382384"
                        target="_blank">Yaquelin</a></li>
                    <li><i class="fab fa-whatsapp text-success me-2"></i><a href="https://wa.me/584242508538"
                        target="_blank">Roibert</a></li>
                  </ul>
                </div>

                <!-- Columna 2 -->
                <div class="col-md-4">
                  <ul class="list-unstyled contact-list">
                    <li><i class="fab fa-whatsapp text-success me-2"></i><a href="https://wa.me/584242522774"
                        target="_blank">Ronier</a></li>
                    <li><i class="fab fa-whatsapp text-success me-2"></i><a href="https://wa.me/584142359337"
                        target="_blank">Jose</a></li>
                    <li><i class="fab fa-whatsapp text-success me-2"></i><a href="https://wa.me/584242552646"
                        target="_blank">Josvier</a></li>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Productos</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Repuestos1212</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-casanova">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenProductoRepuestos12121.jpeg')}}" class="img-fluid" alt="Modulo Bomba de Gasolina Completa Explorer 4.6">
              <div class="portfolio-info">
                <h4>Modulo Bomba de Gasolina Completa, Explorer 4.6</h4>
                <p>Tenemos todo tipo de repuestos para tu vehiculo Jeep y Ford, tambien somos multimarcas! Ven y aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones y descuentos. Cotiza ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenProductoRepuestos12121.jpeg')}}" title="Somos especialistas en repuestos Jeep, Ford y multimarca, todo para tu vehiculo"
                  data-gallery="portfolio-gallery-repuestos1212" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-casanova">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenProductoRepuestos12122.jpeg')}}" class="img-fluid" alt="Tapa Valvula con Codo, Aveo">
              <div class="portfolio-info">
                <h4>Tapa Valvula con Codo, Aveo</h4>
                <p>Tenemos todo tipo de repuestos para tu vehiculo Jeep y Ford, tambien somos multimarcas! Ven y aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones y descuentos. Cotiza ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenProductoRepuestos12122.jpeg')}}" title="Somos especialistas en repuestos Jeep, Ford y multimarca, todo para tu vehiculo"
                  data-gallery="portfolio-gallery-repuestos1212" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-casanova">
              <img src="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenProductoRepuestos12123.jpeg')}}" class="img-fluid" alt="Kit de Tren Delantero, Arauca">
              <div class="portfolio-info">
                <h4>Kit de Tren Delantero, Arauca</h4>
                <p>Tenemos todo tipo de repuestos para tu vehiculo Jeep y Ford, tambien somos multimarcas! Ven y aprovecha nuestros <span class="resaltar">SUPER</span> precios, promociones y descuentos. Cotiza ahora!</p>
                <a href="{{asset('assets/images/imagenesTiendas/imagenTiendaRepuestos1212/imagenProductoRepuestos12123.jpeg')}}" title="Somos especialistas en repuestos Jeep, Ford y multimarca, todo para tu vehiculo"
                  data-gallery="portfolio-gallery-repuestos1212" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->


    <!-- Videos Section -->
    <section id="videos" class="videos section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Videos Promocionales</h2>
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
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosUbicacionTiendas/videoUbicacionRepuestos1212.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Identifica tu repuesto</h3>
                <p>Mira cómo nuestros productos pueden ayudarte a mantener tu vehículo en perfecto estado.</p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 2 -->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosTiendaRepuestos1212/promocion12121.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Ubica nuestras tiendas</h3>
                <p>Conoce más sobre nuestros servicios de entrega y atención al cliente.</p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 3 -->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosTiendaRepuestos1212/promocion12122.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
                </div>
                <h3>Precios insuperables</h3>
                <p>Descubre cómo nuestros repuestos originales mejoran el rendimiento de tu vehículo.</p>
              </div>
            </div><!-- End Video Item -->

            <!-- Video 4 -->
            <div class="swiper-slide">
              <div class="video-item">
                <div class="video-wrapper">
                  <video controls preload="metadata">
                    <source src="{{asset('assets/images/videosTiendas/videosTiendaRepuestos1212/promocion12123.mp4')}}"
                      type="video/mp4"> Tu navegador no soporta el elemento de video.
                  </video>
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
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.1946917331868!2d-66.91164721499187!3d10.491594506552174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5f7863cbe453%3A0x7c74abe1e74eedc1!2sTapicer%C3%ADa%20fuerzas%20Armadas!5e0!3m2!1ses!2snl!4v1749843218510!5m2!1ses!2snl" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">Corporación <strong>SUPER</strong></span>
            </a>
            <div class="footer-contact pt-3">
              <p>Av. Principal Roca Tarpeya, Caracas, Venezuela</p>
              <p>Caracas, Venezuela</p>
              <p class="mt-3"><strong>Telefono:</strong> <span>+58 4242797050</span></p>
              <p><strong>Email:</strong> <span>superrepuestos27@gmail.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/superrepuesto12?igsh=ZGM1eGVibGZxN2Q="><i class="bi bi-instagram"></i></a>
              <a href="https://www.tiktok.com/@super_repuesto12?_t=ZM-8xwLOHe9RnZ&_r=11"><i class="bi bi-tiktok"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nuestros Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="index.html#hero"> Inicio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="index.html#about"> Nosotros</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="index.html#services"> Servicios</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="index.html#portfolio"> Productos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="index.html#contact"> Contacto</a></li>
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