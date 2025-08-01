@extends('layout')

@section('content')

  <!-- BLOG AREA -->
  <div class="blog_area blog-details-area pt-100 pb-100" id="blog">
    <div class="container">

      @include('partials.desplazamiento.return_link')
     
      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <div class="blog_details">

                <div class="blog_dtl_thumb">
                  <img src="/assets/images/optex-fa/serie-cd3.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensor de Desplazamiento Serie CD3</span>
                  </div>

                  <h2 class="pb-3">
                    Precisión CMOS industrial con detección de picos reales
                  </h2>

                  <p>
                    El sensor CD3 utiliza un sistema de triangulación con imagen 
                    CMOS para mediciones precisas, superando las limitaciones de 
                    sensores PSD convencionales. Detecta el valor de pico real de 
                    la luz reflejada, incluso en superficies difíciles.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Inmune a reflectividad variable (vidrio, metales, caucho negro).</li>
                      <li>Precisión ±4mm en el modelo CD3-30.</li>
                      <li>Salida analógica con ajuste de Span/Offset (±50% del rango nominal).</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Electrónica: Detección de virutas en PCBs.</li>
                      <li>Automotriz: Medición de espesores en caucho.</li>
                      <li>Manufactura: Control de diámetros en engranajes.</li>
                      <li>Embalaje: Verificación de grosores en materiales reflectivos.</li>
                    </ul>
                  </p>

                  <div class="blog_dtl_thumb pt-3">
                    <img src="/assets/images/optex-fa/serie-cd3-2.jpg" alt="" />
                  </div>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Alimentación: 12-24V DC (conector M12 IP67). <br>
                    - Temperatura operación: -10°C a 55°C. <br>
                    - Certificaciones: CE, RoHS, IP67.
                  </blockquote>
                
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('partials.desplazamiento.menu')

      </div>
    </div>
  </div>
  <!-- BLOG_AREA END -->

@endsection