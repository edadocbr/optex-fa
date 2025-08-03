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
                  <img src="/assets/images/optex-fa/v-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie V</span>
                  </div>

                  <h2 class="pb-3">
                    Alta potencia y versatilidad para largas distancias en 
                    condiciones adversas
                  </h2>

                  <p>
                    La Serie V ofrece sensores fotoeléctricos de voltaje universal 
                    (12-240VDC/24-240VAC) diseñados para operar en las condiciones más 
                    exigentes. Con distancias de detección excepcionales (hasta 40m en 
                    modo barrera) y fuente de luz de alta potencia, garantizan un 
                    rendimiento estable incluso con polvo, humo o niebla. Disponibles 
                    con salidas de relé o transistor, son ideales para aplicaciones 
                    industriales pesadas.

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Alcance extendido: Barrera (40m), retro-reflectivo (10m), difuso (3m).</li>
                      <li>Alimentación universal: Compatible con 12-240VDC y 24-240VAC.</li>
                      <li>Opciones de salida: Relé (AC/DC) o transistor (DC).</li>
                      <li>Función temporizador: Ajuste de delays (0.1-10 segundos).</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Monitoreo de cintas transportadoras en minería y construcción.</li>
                      <li>Detección de piezas grandes en industria automotriz.</li>
                      <li>Control de nivel en silos y tolvas con polvo.</li>
                      <li>Sistemas de manejo de materiales a larga distancia.</li>
                    </ul>
                  </p>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Carcasa robusta con grado de protección IP67 (modelos estándar). <br>
                    - Disponible con conector M12 QD para instalación rápida. <br>
                    - Función BGS incorporada en modelo BGS-V2000 para supresión de fondos.
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