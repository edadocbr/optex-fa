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
                  <img src="/assets/images/optex-fa/j2-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie J2</span>
                  </div>

                  <h2 class="pb-3">
                    Precisión extrema en detección con visión angosta 
                    y supresión de fondos
                  </h2>

                  <p>
                    La Serie J2 combina tecnología de visión angosta (1.5mm de haz) y 
                    detección difusa de 1 metro en un diseño industrial IP67 resistente a 
                    impactos de 100G. Ideal para aplicaciones que requieren detección 
                    precisa a través de pequeñas aberturas o discriminación de objetos 
                    en fondos complejos, gracias a su función BGS (supresión de fondo).
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Visión ultra-angosta: Haz de 1.5mm para detección en espacios reducidos.</li>
                      <li>Doble tecnología: LED IR (100cm) y LED rojo (70cm) según necesidad.</li>
                      <li>Robustez industrial: IP67 y resistencia a golpes de 100G.</li>
                      <li>Configuración intuitiva: Teaching con un botón y ajuste remoto.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Detección de componentes a través de orificios pequeños en electrónica.</li>
                      <li>Clasificación de objetos por color en líneas de packaging.</li>
                      <li>Control de presencia en entornos con fondos variables (BGS).</li>
                      <li>Inspección de piezas en maquinaria con vibraciones.</li>
                    </ul>
                  </p>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Modelos disponibles con conector M8 (CN/CP) o cable directo (N/P). <br>
                    - Función BGS para ignorar fondos complejos automáticamente. <br>
                    - LED visible para alineamiento preciso en instalaciones críticas.
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