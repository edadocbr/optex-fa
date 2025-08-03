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
                  <img src="/assets/images/optex-fa/d2sa-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Láser Serie D2SA</span>
                  </div>

                  <h2 class="pb-3">
                    Amplificadores digitales con óptica láser modular para 
                    máxima flexibilidad
                  </h2>

                  <p>
                    Sistema de sensores láser de alta velocidad (hasta 60ms) con 
                    amplificadores digitales configurables como maestro/esclavo. 
                    Compatible con múltiples cabezales ópticos (retrorreflectantes, 
                    difusos y thru-beam) para adaptarse a cualquier desafío de detección 
                    industrial.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Dos salidas independientes por amplificador.</li>
                      <li>Distancias desde 0.25m hasta 70m (modelo DSR-9000).</li>
                      <li>Conexión en red: Hasta 30 unidades interconectadas.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Monitoreo de film transparente en líneas de envasado (DSR-800).</li>
                      <li>Detección de roscas internas en tornillería (DSR-100).</li>
                      <li>Control de posición de chips en equipos pick-and-place (DSTA-200).</li>
                    </ul>
                  </p>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Amplificadores disponibles en versiones 1CH y 2CH. <br>
                    - Modos operativos: Largo/Estándar/Rápido para ajustar velocidad-distancia. <br>
                    - Compatible con reflectores especiales para aumentar alcance (MP45/P250F).
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