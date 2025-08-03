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
                  <img src="/assets/images/optex-fa/bgsyfgs-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie BGS/FGS</span>
                  </div>

                  <h2 class="pb-3">
                    Solución inteligente para detección de objetos delgados 
                    en fondos complejos
                  </h2>

                  <p>
                    La Serie BGS/FGS utiliza tecnología PSD (Position Sensitive Device)
                    para detectar objetos delgados o de bajo contraste sobre fondos 
                    irregulares. Especialmente diseñados para fajas transportadoras 
                    con vibraciones, estos sensores identifican eficientemente materiales 
                    delgados, superficies negras/ásperas y objetos con hasta 3mm de 
                    rugosidad a 100mm de distancia.
                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Tecnología FGS: Supresión de primer plano para ignorar fondos variables.</li>
                      <li>Display numérico: Ajuste preciso de sensibilidad con visualización clara.</li>
                      <li>Rangos configurables: 50-100mm (BGS) y 50-250mm (FGS).</li>
                      <li>Robustez industrial: Resistencia a golpes de 100G e histéresis ajustable.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Detección de tarjetas electrónicas en cintas transportadoras.</li>
                      <li>Control de envases metálicos delgados (latas) en líneas de envasado.</li>
                      <li>Monitoreo de materiales textiles o films en procesos de fabricación.</li>
                      <li>Verificación de piezas oscuras sobre fondos irregulares.</li>
                    </ul>
                  </p>

                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Modelos disponibles con salida NPN/PNP y conexión M8 (CN/CP). <br>
                    - Efectivo en superficies con rugosidad ≤3mm (a 100mm de distancia). <br>
                    - Display digital integrado para calibración en tiempo real.
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