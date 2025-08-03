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
                  <img src="/assets/images/optex-fa/srq-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie SRQ</span>
                  </div>

                  <h2 class="pb-3">
                    Detección infalible de objetos transparentes en entornos 
                    industriales desafiantes
                  </h2>

                  <p>
                    La Serie SR-Q está específicamente diseñada para detección confiable 
                    e objetos transparentes como botellas PET, vidrio y displays (CRT/TFT). 
                    Con tecnología avanzada que supera interferencias electromagnéticas
                    y resiste golpes de 100G, es la solución ideal para industrias con 
                    altos estándares de fiabilidad. Disponible en versiones con 
                    cable (500mm) y conector M8 QD (800mm).
                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Detección precisa: Identifica cualquier diseño/material de botellas transparentes.</li>
                      <li>Inmunidad a interferencias: Cumple estándares IEC contra ruido eléctrico/variadores.</li>
                      <li>Robustez extrema: Resistencia 100G a golpes/vibraciones.</li>
                      <li>Reflector V-60K: Anti-empañamiento para ambientes húmedos.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Bebidas: Control de botellas (PET/vidrio) en líneas de llenado rápido.</li>
                      <li>Farmacéutica: Verificación de frascos/ampollas en esterilización.</li>
                      <li>Plásticos: Detección de films/blisters en empacadoras automáticas.</li>
                      <li>Electrónica: Inspección de pantallas (LCD/CRT) en líneas de montaje.</li>
                    </ul>
                  </p>

                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Reflector compacto V-45 para espacios reducidos. <br>
                    - Versiones NPN/PNP con salidas configurables. <br>
                    - Supera pruebas de interferencia por relés/variadores de frecuencia.
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