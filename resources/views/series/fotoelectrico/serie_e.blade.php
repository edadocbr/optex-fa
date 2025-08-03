@extends('layout')

@section('content')

    <!-- BLOG AREA -->
  <div class="blog_area blog-details-area pt-100 pb-100" id="blog">
    <div class="container">

      @include('partials.fotoelectrico.return_link')
     
      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <div class="blog_details">

                <div class="blog_dtl_thumb">
                  <img src="/assets/images/optex-fa/e-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie E</span>
                  </div>

                  <h2 class="pb-3">
                    Precisión milimétrica en el espacio más reducido
                  </h2>

                  <p>
                    La Serie E revoluciona la detección industrial con sensores 
                    ultracompactos de solo 3.5mm de grosor, diseñados para 
                    integrarse donde otros no caben. Disponibles en versiones 
                    barrera (500mm alcance) y difusa (100mm), son ideales para aplicaciones 
                    de alta precisión en electrónica, automoción y packaging. Su diseño 
                    con conector M8 y LEDs visibles simplifica el mantenimiento en 
                    líneas de producción ajustadas.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Perfil ultra-delgado de 3.5mm para espacios críticos.</li>
                      <li>Tecnología Light/Dark On configurable según necesidad.</li>
                      <li>Conector M8 industrial y protección anti-vibraciones.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Alineación de circuitos integrados en electrónica.</li>
                      <li>Detección de láminas transparentes en packaging.</li>
                      <li>Control de posición en brazos robóticos compactos.</li>
                    </ul>
                  </p>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Modelos disponibles con alcances de 100mm a 500mm. <br>
                    - LEDs de estado visibles desde ambos lados del sensor. <br>
                    - Resistente a vibraciones y entornos industriales exigentes.
                  </blockquote>
                
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('partials.fotoelectrico.menu')

      </div>
    </div>
  </div>
  <!-- BLOG_AREA END -->
    
@endsection