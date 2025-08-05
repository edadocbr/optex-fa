@extends('layout')

@section('content')

    <!--==================================================-->
    <!----- Start Techno Slider Area ----->
    <!--==================================================-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/assets/images/optex-fa/optex-fa-banner1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/images/optex-fa/optex-fa-banner2.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/images/optex-fa/optex-fa-banner3.jpeg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/images/optex-fa/optex-fa-banner4.jpeg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--==================================================-->
    <!----- End Techno Slider Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Flipbox Top Feature Area ----->
    <!--==================================================-->
    <div
      class="feature_area pt-100 pb-10"
      style="background-image: url(/assets/images/new/abs-bg7.png)"
      ;>

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_feature_seven">
              <div class="single_feature_six_seven_icon">
                <div class="icon">
                  <i class="fa fa-rocket"></i>
                </div>
              </div>
              <div class="single_feature_seven_content">
                <h4>Innovación Japonesa</h4>
                <p>
                  Heredamos la excelencia del grupo OPTEX de Japón, desarrollando 
                  sensores industriales de vanguardia con tecnología avanzada desde 1987.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_feature_seven">
              <div class="single_feature_six_seven_icon">
                <div class="icon">
                  <i class="fa fa-check-circle-o"></i>
                </div>
              </div>
              <div class="single_feature_seven_content">
                <h4>Calidad Superior</h4>
                <p>
                  Nuestros sensores, reconocidos globalmente, ofrecen 
                  precisión y fiabilidad, respaldados por décadas de 
                  experiencia y colaboraciones con líderes como SICK AG.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_feature_seven">
              <div class="single_feature_six_seven_icon">
                <div class="icon">
                  <i class="fa fa-puzzle-piece"></i>
                </div>
              </div>
              <div class="single_feature_seven_content">
                <h4>Soluciones Personalizadas</h4>
                <p>
                  Diseñamos sensores especializados para aplicaciones industriales 
                  específicas, adaptándonos a las necesidades únicas de cada 
                  cliente en Asia y América.
                </p>
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
    <!----- Start Techno About Area ----->
    <!--==================================================-->
    <div class="about_area pt-85 pb-130">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
            <div class="about_thumb">
              <img src="/assets/images/optex-fa/about-company.jpeg" height="600" alt="" />
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
                    en Kyoto el joint venture SICK-OPTEX, marcando el comienzo de una. [...]
                  </p>
                </div>
              </div>
              <div class="singel_about_left_inner pl-4">
                <div class="button two">
                  <a href="{{ route('pages.about') }}">Leer Más</a>
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
    <!----- Start Techno Call Do Action Area ----->
    <!--==================================================-->
    <div class="call_do_action pt-85 pb-130 bg_color" style="background-image: url(/assets/images/slider/slider-4.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section_title white text_center mb-60 mt-3">
              <div class="section_main_title">
                <h1>Ponga en Marcha Nuestros Productos</h1>
                <h1>y Automatice Su Industria</h1>
              </div>
              <div class="button three mt-40">
                <a href="{{ route('pages.contact') }}">Contáctenos<i class="fa fa-long-arrow-right"></i></a>
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
    <!----- Start Techno Service Area ----->
    <!--==================================================-->
    <div class="service_area pt-100 pb-50">
      <div class="container">
        <div class="row">
          <!-- Start Section Tile -->
          <div class="col-lg-12">
            <div class="section_title text_center mb-50 mt-3">
              <div class="section_sub_title uppercase mb-3">
                <h6>Productos</h6>
              </div>
              <div class="section_main_title">
                <h1>Mire Nuestros <span>Productos</span></h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!--Service owl curousel -->
          <div class="service_list owl-carousel curosel-style">
            <!-- Start Service Testimonial -->
            <div class="col-lg-12">
              <div class="service_style_12">
                <div class="service_style_12_thumb">
                  <img src="/assets/images/optex-fa/sensor-cvs-1.jpg" width="348" height="231" alt="" />
                </div>
                <div class="service_style12_content">
                  <div class="service_style_12_content_inner">
                    <a href="{{ route('products.imagenes_cvs1') }}">Sensor de Imágenes CVS1</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start Service Testimonial -->
            <div class="col-lg-12">
              <div class="service_style_12">
                <div class="service_style_12_thumb">
                  <img src="/assets/images/optex-fa/cd33_50.jpg" width="348" height="231" alt="" />
                </div>
                <div class="service_style12_content">
                  <div class="service_style_12_content_inner">
                    <a href="{{ route('products.desplazamiento') }}">Sensor de Desplazamiento</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start Service Testimonial -->
            <div class="col-lg-12">
              <div class="service_style_12">
                <div class="service_style_12_thumb">
                  <img src="/assets/images/optex-fa/CRD_300CP.jpg" width="348" height="231" alt="" />
                </div>
                <div class="service_style12_content">
                  <div class="service_style_12_content_inner">
                    <a href="{{ route('products.fotoelectrico') }}">Sensor Fotoeléctrico</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Start Service Testimonial -->
            <div class="col-lg-12">
              <div class="service_style_12">
                <div class="service_style_12_thumb">
                  <img src="/assets/images/optex-fa/bgs_dl.jpg" width="348" height="231" alt="" />
                </div>
                <div class="service_style12_content">
                  <div class="service_style_12_content_inner">
                    <a href="{{ route('products.laser') }}">Sensor Láser</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Start Service Testimonial -->
            <div class="col-lg-12">
              <div class="service_style_12">
                <div class="service_style_12_thumb">
                  <img src="/assets/images/optex-fa/fd_ml02.jpg" width="348" height="231" alt="" />
                </div>
                <div class="service_style12_content">
                  <div class="service_style_12_content_inner">
                    <a href="{{ route('products.fibra') }}">Sensor de Fibra</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Start Service Testimonial -->
            <div class="col-lg-12">
              <div class="service_style_12">
                <div class="service_style_12_thumb">
                  <img src="/assets/images/optex-fa/tmc_1.jpg" width="348" height="231" alt="" />
                </div>
                <div class="service_style12_content">
                  <div class="service_style_12_content_inner">
                    <a href="{{ route('products.comparador_sincronizacion') }}">Comparador de Sincronización</a>
                  </div>
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

    <!--==================================================-->
    <!----- Start Techno How IT Work Area ----->
    <!--==================================================-->
    <div class="how_it_work pt-50 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section_title text_center mb-60 mt-3">
              <div class="section_sub_title uppercase mb-3">
                <h6>EN LA INDUSTRIA</h6>
              </div>
              <div class="section_main_title">
                <h1>Aplicaciones Industriales</h1>
              </div>
              <div class="em_bar">
                <div class="em_bar_bg"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_it_work mb-4">
              <div class="single_it_work_content pl-2 pr-2">
                <div class="single_it_work_content_list pb-5">
                  <span>1</span>
                </div>
                <div class="single_work_content_title pb-2">
                  <h4>Automotriz</h4>
                </div>
                <div class="single_it_work_content_text pt-1">
                  <p>
                    Sensores OPTEX FA optimization la automatización en líneas de 
                    ensamblaje automotriz, garantizando precision en detección, 
                    control de calidad y seguridad de maquinaria para una producción 
                    eficiente.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_it_work mb-4">
              <div class="single_it_work_content pl-2 pr-2">
                <div class="single_it_work_content_list pb-5">
                  <span>2</span>
                </div>
                <div class="single_work_content_title pb-2">
                  <h4>Alimentos y farmacéuticos</h4>
                </div>
                <div class="single_it_work_content_text pt-1">
                  <p>
                    Nuestros sensores de alta precisión cumplen con estrictos 
                    estándares de higiene, asegurando detección confiable en procesos 
                    de envasado, inspección y producción en entornos estériles.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_it_work mb-4">
              <div class="single_it_work_content pl-2 pr-2">
                <div class="single_it_work_content_list three pb-5">
                  <span>3</span>
                </div>
                <div class="single_work_content_title pb-2">
                  <h4>Electrónica y semiconductores</h4>
                </div>
                <div class="single_it_work_content_text pt-1">
                  <p>
                    Tecnología avanzada de OPTEX FA permite detección ultraprecisa en 
                    la fabricación de componentes electrónicos, mejorando la calidad y 
                    velocidad en procesos de alta tecnología.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single_it_work mb-4">
              <div class="single_it_work_content pl-2 pr-2">
                <div class="single_it_work_content_list three pb-5">
                  <span>4</span>
                </div>
                <div class="single_work_content_title pb-2">
                  <h4>Logística y transporte</h4>
                </div>
                <div class="single_it_work_content_text pt-1">
                  <p>
                    Soluciones de sensores OPTEX FA agilizan la clasificación automatizada, 
                    gestión de inventarios y seguimiento en almacenes, incrementando la 
                    eficiencia en operaciones logísticas.
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno How IT Work Area ----->
    <!--==================================================-->

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush