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
                  <img src="/assets/images/optex-fa/bgs-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie BGS</span>
                  </div>

                  <h2 class="pb-3">
                    Detección inteligente adaptada a necesidades específicas de la industria electrónica
                  </h2>

                  <p>
                    La Serie BGS ofrece soluciones especializadas para detección de 
                    circuitos impresos y componentes electrónicos, con modelos optimizados 
                    para diferentes condiciones operativas. Desde la detección confiable 
                    de tarjetas negras hasta la inmunidad a ruidos electromagnéticos, 
                    estos sensores combinan precisión y robustez en diseños compactos.
                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>BGS-2S25: Especializado en tarjetas PCB negras.</li>
                      <li>BGS-2S15: Supresión de ruido para entornos con variadores de frecuencia.</li>
                      <li>BGS-2S10: Compacto para espacios reducidos con alta repetibilidad.</li>
                      <li>BGS-2S30T: Incluye temporizador OFF delay (0-100ms).</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Inspección de tarjetas de circuitos impresos (PCBs).</li>
                      <li>Detección de componentes electrónicos en líneas de montaje.</li>
                      <li>Control de calidad en entornos con interferencias electromagnéticas.</li>
                      <li>Monitoreo de piezas pequeñas en espacios confinados.</li>
                    </ul>
                  </p>

                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Protección IP67 contra chorros de agua y polvo. <br>
                    - Disponible en versiones con conector M8 QD o cable directo. <br>
                    - Temporizador integrado para aplicaciones de control preciso.
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