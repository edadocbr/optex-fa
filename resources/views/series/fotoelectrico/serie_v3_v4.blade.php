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
                  <img src="/assets/images/optex-fa/v3v4-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie V3/V4</span>
                  </div>

                  <h2 class="pb-3">
                    Mantenimiento rápido y alto rendimiento para aplicaciones 
                    industriales exigentes
                  </h2>

                  <p>
                    La Serie V3/V4 ofrece sensores fotoeléctricos modulares con sistema
                    de desconexión rápida, ideal para mantenimiento eficiente. Con 
                    distancias de detección extendidas (hasta 40m en modo barrera) y 
                    potente fuente de luz, garantizan operación confiable en entornos 
                    con polvo/suciedad. Disponible en versiones con cable (V3) y M12 QD 
                    (V4) para flexibilidad de instalación.
                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Sistema modular: Cuerpo sensor separable de la base para reemplazo rápido.</li>
                      <li>Largo alcance: Barrera (40m), retro-reflectivo (10m), difuso (1.3m).</li>
                      <li>Opciones de conexión: Terminales (AC) o conector M12 QD (V4).</li>
                      <li>Versiones de salida: Relé (AC/DC) y transistor (NPN/PNP).</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Control de acceso en áreas industriales.</li>
                      <li>Monitoreo de objetos en cintas transportadoras sucias.</li>
                      <li>Reemplazo directo de unidades UR-34 (retro-reflectivas).</li>
                      <li>Sistemas que requieren mantenimiento frecuente sin desconexión de cables.</li>
                    </ul>
                  </p>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Compatible con 24-240V AC/DC (modelos V4). <br>
                    - Diseño optimizado para condiciones con polvo/neblina. <br>
                    - Base permanente permite cambiar solo el cuerpo del sensor.
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