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
                  <img src="/assets/images/optex-fa/j-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie J</span>
                  </div>

                  <h2 class="pb-3">
                    Robustez extrema y precisión para entornos 
                    industriales exigentes
                  </h2>

                  <p>
                    La Serie J ofrece sensores fotoeléctricos de alto rendimiento con 
                    protección IP67G y resistencia a impactos de 100G. Disponibles en 
                    tres tecnologías (barrera, retro-reflectivo polarizado y difuso), 
                    están diseñados para operar en condiciones extremas de humedad, 
                    vibración y espacios reducidos, gracias a su construcción epóxica 
                    y conectores M8 compactos.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Protección IP67G y resistencia a golpes de 100G.</li>
                      <li>3 tecnologías: Barrera (10m), retro-reflectivo polarizado (3m), difuso (80cm).</li>
                      <li>Montaje flexible: Agujeros ranurados para soportes M3/M4.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Monitoreo de cintas transportadoras en ambientes húmedos.</li>
                      <li>Detección de piezas en líneas de producción con vibraciones.</li>
                      <li>Control de posición en maquinaria pesada.</li>
                    </ul>
                  </p>
                  
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Conector M8 para instalación en espacios reducidos. <br>
                    - LED rojo visible (2mm a 30cm) para alineamiento preciso. <br>
                    - Material epóxico inyectado para máxima durabilidad.
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