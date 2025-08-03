@extends('layout')

@section('content')
    
    <!-- ============================================================== -->
    <!-- Start Techno Breatcome Area -->
    <!-- ============================================================== -->
    <div class="breatcome_area d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breatcome_title">
              <div class="breatcome_title_inner pb-2">
                <h2>Compañía</h2>
              </div>
              <div class="breatcome_content">
                <ul>
                  <li>
                    <a href="{{ route('pages.home') }}">Inicio</a>
                    <i class="fa fa-angle-right"></i> <span>Compañía</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Techno Breatcome Area -->
    <!-- ============================================================== -->

    <!--==================================================-->
    <!----- Start Techno About Area ----->
    <!--==================================================-->
    <div class="about_area pt-85 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
            <div class="about_thumb">
              <img src="assets/images/about-2.jpg" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
            <div class="section_title text_left mb-40 mt-3">
              <div class="section_sub_title uppercase mb-3">
                <h6>MÁS DE 35 AÑOS DE EXPERIENCIA</h6>
              </div>
              <div class="section_main_title">
                <h1>OPTEX-FA: Tu Socio en </h1>
                <h1><span>Innovación Industrial.</span></h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
              <div class="section_content_text bold pt-5">
                <p>
                  OPTEX FA pertenece al grupo OPTEX de Japón, reconocido 
                  mundialmente por su excelencia en la fabricación de 
                  fotosensores para seguridad doméstica, comercial e 
                  industrial.
                </p>
              </div>
            </div>
            <div class="singel_about_left mb-30">
              <div class="singel_about_left_inner mb-3">
                <div class="singel-about-content boder pl-4">
                  <p>
                    OPTEX FA, con 38 años de experiencia desde su inicio en 1987 como 
                    OEM para SICK AG de Alemania, se consolidó como líder en sensores 
                    industriales gracias a su calidad excepcional. En 1989, se creó 
                    en Kyoto el joint venture SICK-OPTEX, marcando el comienzo de una 
                    carrera vertiginosa en el desarrollo de sensores especializados, 
                    fabricados bajo esta marca durante una década. 
                  </p>
                  <p>
                    En 2002, OPTEX lanzó la división OPTEX FA (Future Advance) para 
                    enfocarse exclusivamente en sensores industriales, dejando a OPTEX 
                    dedicada a la seguridad, lo que destaca su innovación y 
                    especialización.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno About Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Flipbox Top Feature Area ----->
    <!--==================================================-->
    <div class="flipbox_area top_feature pb-70 two">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
            <div class="techno_flipbox mb-30">
              <div class="techno_flipbox_font">
                <div class="techno_flipbox_inner">
                  <div class="techno_flipbox_icon">
                    <div class="icon">
                      <i class="fa fa-leaf"></i>
                    </div>
                  </div>
                  <div class="flipbox_title">
                    <h3>Calidad japonesa</h3>
                  </div>
                </div>
              </div>
              <div class="techno_flipbox_back">
                <div class="techno_flipbox_inner">
                  <div class="flipbox_title">
                    <h3>Calidad japonesa</h3>
                  </div>
                  <div class="flipbox_desc pt-3">
                    <p>
                      Experimenta la precisión y fiabilidad japonesa en cada sensor, 
                      diseñados para su industria.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
            <div class="techno_flipbox mb-30">
              <div class="techno_flipbox_font">
                <div class="techno_flipbox_inner">
                  <div class="techno_flipbox_icon">
                    <div class="icon">
                      <i class="fa fa-globe"></i>
                    </div>
                  </div>
                  <div class="flipbox_title">
                    <h3>Presencia global</h3>
                  </div>
                </div>
              </div>
              <div class="techno_flipbox_back">
                <div class="techno_flipbox_inner">
                  <div class="flipbox_title">
                    <h3>Presencia global</h3>
                  </div>
                  <div class="flipbox_desc pt-3">
                    <p>
                      Líderes mundiales al alcance: Europa con SICK en celeste, y 
                      América/Asia con OPTEX FA en negro.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
            <div class="techno_flipbox mb-30">
              <div class="techno_flipbox_font">
                <div class="techno_flipbox_inner">
                  <div class="techno_flipbox_icon">
                    <div class="icon">
                      <i class="fa fa-line-chart"></i>
                    </div>
                  </div>
                  <div class="flipbox_title">
                    <h3>Innovación constante</h3>
                  </div>
                </div>
              </div>
              <div class="techno_flipbox_back">
                <div class="techno_flipbox_inner">
                  <div class="flipbox_title">
                    <h3>Innovación constante</h3>
                  </div>
                  <div class="flipbox_desc pt-3">
                    <p>
                      Innovamos desde Japón para potenciar la industria peruana con 
                      sensores avanzados de I+D
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Flipbox Top Feature Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Call Do Action Area ----->
    <!--==================================================-->
    <div
      class="call_do_action pt-85 pb-130 bg_color"
      style="background-image: url(assets/images/slider/slider-4.jpg)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section_title white text_center mb-60 mt-3">
              <div class="section_main_title">
                <h1>Explora nuestras soluciones industriales</h1>
                <h1>Solicita una cotización</h1>
              </div>
              <div class="button three mt-40">
                <a href="#"
                  >Contáctanos Ahora!<i class="fa fa-long-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Call Do Action Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Counter Area ----->
    <!--==================================================-->
    <!-- <div class="counter_area">
      <div class="container">
        <div class="row cntr_bg_up nagative_margin pt-50 pb-45">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_counter text_center mb-4">
              <div class="countr_text">
                <h1><span class="counter">15</span><span>K</span></h1>
              </div>
              <div class="counter_desc">
                <h5>Happy Clients</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_counter text_center mb-4">
              <div class="countr_text">
                <h1><span class="counter">1280</span><span>+</span></h1>
              </div>
              <div class="counter_desc">
                <h5>Account Number</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_counter text_center mb-4">
              <div class="countr_text">
                <h1><span class="counter">10</span><span>K</span></h1>
              </div>
              <div class="counter_desc">
                <h5>Finished Projects</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_counter text_center mb-4">
              <div class="countr_text">
                <h1><span class="counter">992</span><span>+</span></h1>
              </div>
              <div class="counter_desc">
                <h5>Win Awards</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--==================================================-->
    <!----- End Techno Counter Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Service Area ----->
    <!--==================================================-->
    <div class="service_area pt-85 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service_style_two mb-4">
              <div class="service_style_two_number mr-60">
                <h5>01</h5>
              </div>
              <div class="service_style_two_content">
                <div class="service_style_two_title pb-3">
                  <h4>Herencia japonesa y prestigio global:</h4>
                </div>
                <div class="service_style_two_text">
                  <p>
                    OPTEX FA pertenece al grupo OPTEX de Japón, reconocido mundialmente 
                    por su excelencia en la fabricación de fotosensores para 
                    seguridad doméstica, comercial e industrial. Esto refuerza 
                    su credibilidad y calidad.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service_style_two mb-4">
              <div class="service_style_two_number mr-60">
                <h5>02</h5>
              </div>
              <div class="service_style_two_content">
                <div class="service_style_two_title pb-3">
                  <h4>Innovación tecnológica desde 1987:</h4>
                </div>
                <div class="service_style_two_text">
                  <p>
                    Su historia comenzó con un OEM para SICK AG, una empresa 
                    alemana líder, y evolucionó hacia un joint venture 
                    (SICK-OPTEX) en 1989, destacando su capacidad para 
                    desarrollar sensores de alta calidad.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service_style_two mb-4">
              <div class="service_style_two_number mr-60">
                <h5>03</h5>
              </div>
              <div class="service_style_two_content">
                <div class="service_style_two_title pb-3">
                  <h4>Especialización en sensores industriales:</h4>
                </div>
                <div class="service_style_two_text">
                  <p>
                    Desde 2002, con la creación de OPTEX FA (Future Advance), 
                    la empresa se enfocó exclusivamente en sensores industriales, 
                    lo que la posiciona como un referente en aplicaciones 
                    especializadas.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service_style_two mb-4">
              <div class="service_style_two_number mr-60">
                <h5>04</h5>
              </div>
              <div class="service_style_two_content">
                <div class="service_style_two_title pb-3">
                  <h4>Presencia global estratégica:</h4>
                </div>
                <div class="service_style_two_text">
                  <p>
                    OPTEX FA tiene una distribución clara del mercado mundial, 
                    con sensores comercializados en Europa bajo la marca SICK 
                    (color celeste) y en Asia y América bajo su propio nombre 
                    (color negro). Esto demuestra su alcance y adaptabilidad.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service_style_two mb-4">
              <div class="service_style_two_number mr-60">
                <h5>05</h5>
              </div>
              <div class="service_style_two_content">
                <div class="service_style_two_title pb-3">
                  <h4>Colaboración con SICK AG:</h4>
                </div>
                <div class="service_style_two_text">
                  <p>
                    Continúan desarrollando series de sensores para SICK AG, lo que 
                    refuerza su posición como un socio confiable para gigantes de la 
                    industria.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service_style_two mb-4">
              <div class="service_style_two_number mr-60">
                <h5>06</h5>
              </div>
              <div class="service_style_two_content">
                <div class="service_style_two_title pb-3">
                  <h4>Diferenciación por calidad y diseño:</h4>
                </div>
                <div class="service_style_two_text">
                  <p>
                    Los sensores de OPTEX FA son reconocidos por su calidad superior y 
                    diseño distintivo (color negro en América y Asia), lo que los 
                    hace atractivos para clientes que buscan fiabilidad y estética.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Service Area ----->
    <!--==================================================-->

@endsection