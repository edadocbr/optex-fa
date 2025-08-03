<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Techno - IT Solutions Services HTML5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link
      rel="icon"
      type="image/png"
      sizes="56x56"
      href="/assets/images/fav-icon/icon.png"
    />
    <!-- FontAwesome -->
    <link 
      rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <!-- bootstrap CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/bootstrap.min.css"
      type="text/css"
      media="all"
    />
    <!-- carousel CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/owl.carousel.min.css"
      type="text/css"
      media="all"
    />
    <!-- nivo-slider CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/nivo-slider.css"
      type="text/css"
      media="all"
    />
    <!-- animate CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/animate.css"
      type="text/css"
      media="all"
    />
    <!-- animated-text CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/animated-text.css"
      type="text/css"
      media="all"
    />
    <!-- font-awesome CSS -->
    <link
      type="text/css"
      rel="stylesheet"
      href="/assets/fonts/font-awesome/css/font-awesome.min.css"
    />
    <!-- font-flaticon CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/flaticon.css"
      type="text/css"
      media="all"
    />
    <!-- theme-default CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/theme-default.css"
      type="text/css"
      media="all"
    />
    <!-- meanmenu CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/meanmenu.min.css"
      type="text/css"
      media="all"
    />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/owl.transitions.css"
      type="text/css"
      media="all"
    />
    <!-- venobox CSS -->
    <link
      rel="stylesheet"
      href="venobox/venobox.css"
      type="text/css"
      media="all"
    />
    <!-- widget CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/widget.css"
      type="text/css"
      media="all"
    />
    <!-- responsive CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/responsive.css"
      type="text/css"
      media="all"
    />
    <!-- modernizr js -->
    <script
      type="text/javascript"
      src="/assets/js/vendor/modernizr-3.5.0.min.js"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body>
    <!-- Loder Start-->
    <div class="loader-wrapper">
      <div class="loader"></div>
      <div class="loder-section left-section"></div>
      <div class="loder-section right-section"></div>
    </div>
    <!-- Loder End -->

    <!--==================================================-->
    <!----- Start	Techno Header Top Menu Area Css ----->
    <!--==================================================-->
    <div class="header_top_menu pt-2 pb-2 bg_color">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-8">
            <div class="header_top_menu_address">
              <div class="header_top_menu_address_inner">
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-envelope-o"></i>soporte@optex-fa.com / ventas@optex-fa.pe</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-phone"></i>9852-72098 / 9999-38660</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4">
            <div class="header_top_menu_icon">
              <div class="header_top_menu_icon_inner">
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End	Techno Header Top Menu Area Css ----->
    <!--===================================================-->

    <!--==================================================-->
    <!----- Start Techno Main Menu Area ----->
    <!--==================================================-->
    <div
      id="sticky-header"
      class="techno_nav_manu d-md-none d-lg-block d-sm-none d-none"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="menu">
            <a href="{{ route('pages.home') }}" class="logo"
              ><img class="down" src="/assets/images/1.png" alt="" />
              <img class="main_sticky" src="/assets/images/logo.png" alt=""
            /></a>
            <ul class="clearfix">
              <li>
                <a href="{{ route('pages.home') }}">Inicio</a>
              </li>
              <li>
                <a href="{{ route('pages.about') }}">Compañía</a>
              </li>
              <li>
                <a href="#">Productos</a>
                <ul>
                  <li><a href="{{ route('products.imagenes_cvs1') }}">Sensor de Imagenes CVS 1</a></li>
                  <li><a href="{{ route('products.desplazamiento') }}">Sensor de Desplazamiento</a></li>
                  <li><a href="{{ route('products.fotoelectrico') }}">Sensor Fotoeléctrico</a></li>
                  <li><a href="{{ route('products.laser') }}">Sensor Láser</a></li>
                  <li><a href="{{ route('products.fibra') }}">Sensor de Fibra</a></li>
                  <li><a href="{{ route('products.comparador_sincronizacion') }}">Comparador de Sincronización</a></li>
                  <li><a href="">Otros Productos</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Aplicaciones</a>
                <ul>
                  <li><a href="{{ route('aplications.automotriz') }}">Automotriz</a></li>
                  <li><a href="{{ route('aplications.alimentos_farmaceuticos') }}">Alimentos y farmaceuticos</a></li>
                  <li><a href="{{ route('aplications.electronica_semiconductores') }}">Electrónica y semiconductores</a></li>
                  <li><a href="{{ route('aplications.logistica_transporte') }}">Logística y transporte</a></li>
                  <!-- <li><a href="">Aplicaciones MVS</a></li> -->
                </ul>
              </li>
              <li>
                <a href="{{ route('pages.contact') }}">Contáctenos</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Techno Mobile Menu Area -->
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none">
      <div class="mobile-menu">
        <nav class="techno_menu">
          <ul class="clearfix">
            <li>
              <a href="{{ route('pages.home') }}">Inicio</a>
            </li>
            <li>
              <a href="{{ route('pages.about') }}">Compañía</a>
            </li>
            <li>
              <a href="#">Productos</a>
              <ul>
                <li><a href="{{ route('products.imagenes_cvs1') }}">Sensor de Imagenes CVS 1</a></li>
                <li><a href="{{ route('products.desplazamiento') }}">Sensor de Desplazamiento</a></li>
                <li><a href="{{ route('products.fotoelectrico') }}">Sensor Fotoeléctricos</a></li>
                <li><a href="{{ route('products.laser') }}">Sensor Láser</a></li>
                <li><a href="{{ route('products.fibra') }}">Sensor de Fibra</a></li>
                <li><a href="{{ route('products.comparador_sincronizacion') }}">Comparador de Sincronización</a></li>
                <li><a href="">Otros Productos</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Aplicaciones</a>
              <ul>
                <li><a href="{{ route('aplications.automotriz') }}">Automotriz</a></li>
                <li><a href="{{ route('aplications.alimentos_farmaceuticos') }}">Alimentos y farmaceuticos</a></li>
                <li><a href="{{ route('aplications.electronica_semiconductores') }}">Electrónica y semiconductores</a></li>
                <li><a href="{{ route('aplications.logistica_transporte') }}">Logística y transporte</a></li>
                <!-- <li><a href="">Aplicaciones MVS</a></li> -->
              </ul>
            </li>
            <li>
              <a href="{{ route('pages.contact') }}">Contáctenos</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Main Menu Area ----->
    <!--==================================================-->

    {{-- CONTENIDO DINÁMICO --}}
    @yield('content')

    <!--==================================================-->
    <!----- Start Techno Footer Middle Area ----->
    <!--==================================================-->
    <div
      class="footer-middle pt-95"
      style="background-image: url(/assets/images/call-bg.png)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget widgets-company-info">
              <div class="footer-bottom-logo pb-40">
                <img src="/assets/images/logo.png" alt="" />
              </div>
              <div class="company-info-desc">
                <p>
                  OPTEX FA: Líderes en sensores industriales, impulsando la innovación 
                  desde Japón. Parte del grupo OPTEX, brindamos soluciones confiables 
                  y de vanguardia para la industria global.
                </p>
              </div>
              <div class="follow-company-info pt-3">
                <div class="follow-company-text mr-3">
                  <a href="#"><p>Síguenos en</p></a>
                </div>
                <div class="follow-company-icon">
                  <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget widget-nav-menu">
              <h4 class="widget-title pb-4">Productos</h4>
              <div class="menu-quick-link-container ml-4">
                <ul id="menu-quick-link" class="menu">
                  <li><a href="{{ route('products.imagenes_cvs1') }}">Sensor de Imagenes CVS 1</a></li>
                  <li><a href="{{ route('products.desplazamiento') }}">Sensor de Desplazamiento</a></li>
                  <li><a href="{{ route('products.fotoelectrico') }}">Sensor Fotoeléctrico</a></li>
                  <li><a href="{{ route('products.laser') }}">Sensor Láser</a></li>
                  <li><a href="{{ route('products.fibra') }}">Sensor de Fibra</a></li>
                  <li><a href="{{ route('products.comparador_sincronizacion') }}">Comparador de Sincronización</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget widget-nav-menu">
              <h4 class="widget-title pb-4">Aplicaciones</h4>
              <div class="menu-quick-link-container ml-4">
                <ul id="menu-quick-link" class="menu">
                  <li><a href="{{ route('aplications.automotriz') }}">Automotriz</a></li>
                  <li><a href="{{ route('aplications.alimentos_farmaceuticos') }}">Alimentos y farmaceuticos</a></li>
                  <li><a href="{{ route('aplications.electronica_semiconductores') }}">Electrónica y semiconductores</a></li>
                  <li><a href="{{ route('aplications.logistica_transporte') }}">Logística y transporte</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget widgets-company-info">
              <h3 class="widget-title pb-4">Nuestra ubicación</h3>
              <div class="footer-social-info">
                <p>
                  <span>Dirección: </span>Av. Argentina Nº523 Tda. A12 - C.C. ACOPROM Lima 01- Perú.
                </p>
              </div>
              <div class="footer-social-info">
                <p><span>Teléfonos: </span>719 9810 / 719 9811 / 9852-72098 / 9999-38660</p>
              </div>
              <div class="footer-social-info">
                <p><span>Email: </span>soporte@optex-fa.pe / ventas@optex-fa.pe</p>
              </div>
            </div>
          </div>

        </div>
        <div class="row footer-bottom mt-70 pt-3 pb-1">
          <div class="col-lg-6 col-md-6">
            <div class="footer-bottom-content">
              <div class="footer-bottom-content-copy">
                <p>© 2025 OPTEX FA. Todos los derechos reservados.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Footer Middle Area ----->
    <!--==================================================-->

    <!-- jquery js -->
    <script
      type="text/javascript"
      src="/assets/js/vendor/jquery-3.2.1.min.js"
    ></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
    <!-- counterup js -->
    <script
      type="text/javascript"
      src="/assets/js/jquery.counterup.min.js"
    ></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
    <!-- wow js -->
    <script type="text/javascript" src="/assets/js/wow.js"></script>
    <!-- imagesloaded js -->
    <script
      type="text/javascript"
      src="/assets/js/imagesloaded.pkgd.min.js"
    ></script>
    <!-- venobox js -->
    <script type="text/javascript" src="/assets/venobox/venobox.js"></script>
    <!-- ajax mail js -->
    <script type="text/javascript" src="/assets/js/ajax-mail.js"></script>
    <!--  testimonial js -->
    <script type="text/javascript" src="/assets/js/testimonial.js"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="/assets/js/animated-text.js"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="/assets/venobox/venobox.min.js"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="/assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery nivo slider pack js -->
    <script
      type="text/javascript"
      src="/assets/js/jquery.nivo.slider.pack.js"
    ></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="/assets/js/jquery.meanmenu.js"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="/assets/js/jquery.scrollUp.js"></script>
    <!-- theme js -->
    <script type="text/javascript" src="/assets/js/theme.js"></script>
    <!-- jquery js -->
  </body>
</html>
