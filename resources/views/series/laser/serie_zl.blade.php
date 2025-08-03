@extends('layout')

@section('content')
    
    <!-- BLOG AREA -->
  <div class="blog_area blog-details-area pt-100 pb-100" id="blog">
    <div class="container">

      @include('partials.laser.return_link')

      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <div class="blog_details">

                <div class="blog_dtl_thumb">
                  <img src="/assets/images/optex-fa/zl-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Láser Serie ZL</span>
                  </div>

                  <h2 class="pb-3">
                    Solución integral para detección precisa en larga 
                    distancia y corto alcance
                  </h2>

                  <p>
                    La Serie ZL representa la evolución en sensores láser industriales, 
                    combinando alto rendimiento, robustez y versatilidad. Estos sensores 
                    están diseñados para aplicaciones desafiantes donde se requiere 
                    precisión milimétrica, largas distancias de detección y resistencia 
                    a condiciones ambientales adversas.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Tres tecnologías: Barrera (30m), retro-reflectivo (10m) y difuso (40cm).</li>
                      <li>Respuesta ultrarrápida: 250µs para procesos de alta velocidad.</li>
                      <li>Diseño robusto: Protección IP67 y haz láser preciso (2mm-30mm).</li>
                      <li>Sin interferencia: Instalación múltiple sin diafonía.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Monitoreo de cintas transportadoras de alta velocidad.</li>
                      <li>Detección precisa de piezas pequeñas en electrónica.</li>
                      <li>Control de calidad en líneas de ensamblaje automotriz.</li>
                      <li>Verificación de paquetes en entornos logísticos húmedos.</li>
                    </ul>
                  </p>

                  <div class="blog_dtl_thumb pt-3">
                    <img src="assets/images/blog2.jpg" alt="" />
                  </div>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Configuración sencilla: Compatible con diversos modos de montaje. <br>
                    - Estabilidad garantizada: Funcionamiento confiable en vibraciones. <br>
                    - Certificaciones: Cumple con los estándares industriales más exigentes .
                  </blockquote>
                
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('partials.laser.menu')

      </div>
    </div>
  </div>
  <!-- BLOG_AREA END -->

@endsection