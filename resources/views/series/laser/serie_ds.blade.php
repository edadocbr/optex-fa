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
                  <img src="/assets/images/optex-fa/ds-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Láser Serie DS</span>
                  </div>

                  <h2 class="pb-3">
                    Detección de alta precisión con tecnología modular y 
                    respuesta ultrarrápida
                  </h2>

                  <p>
                    La serie DS ofrece solución láser versátil con tres tecnologías de 
                    detección (retro-reflectiva, difusa y barrera) para aplicaciones 
                    que van desde film transparente hasta largas distancias (70m). Su 
                    amplificador digital modular permite configuraciones flexibles 
                    con dos salidas independientes.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Tres tecnologías de detección: Retro-reflectivo (70m), difuso (1.5m) y barrera (haz de 2mm/30mm).</li>
                      <li>6 modos de teaching: Automático, 2 puntos y detección en transparencia sin detener producción.</li>
                      <li>Respuesta ultrarrápida: 60µs y salidas duales independientes.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Detección de bordes en film transparente (envases).</li>
                      <li>Verificación de roscas en componentes metálicos.</li>
                      <li>Posicionamiento de chips electrónicos en líneas pick-and-place.</li>
                    </ul>
                  </p>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Compatible con reflectores P250F para 70m de alcance. <br>
                    - Incluye lente opcional para haz lineal/circular (BL-W130L-1). <br>
                    - Conector E-CON para instalación rápida en entornos industriales.
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