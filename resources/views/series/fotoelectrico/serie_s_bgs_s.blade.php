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
                  <img src="/assets/images/optex-fa/sbgs-s-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie S/BGS-S</span>
                  </div>

                  <h2 class="pb-3">
                    Compactos, ultra-rápidos y resistentes para integración en 
                    espacios reducidos
                  </h2>

                  <p>
                    La Serie S/BGS-S combina tamaño miniaturizado (17×10×20mm) con alto 
                    rendimiento industrial, ideal para equipos OEM y aplicaciones donde 
                    el espacio es crítico. Con tecnología BGS integrada y respuesta 
                    ltrarrápida (0.5ms), detecta eficientemente incluso objetos 
                    transparentes en entornos desafiantes.
                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Diseño ultracompacto: Entre los sensores BGS más pequeños del mercado.</li>
                      <li>Robustez extrema: Resistencia a golpes de 100G y protección IP67.</li>
                      <li>Tres tecnologías: Barrera (1.4m), retro-reflectivo polarizado (1.5m), difuso (200mm).</li>
                      <li>Precisión milimétrica: Haz de 1.5mm a 30mm de distancia.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Alimentación: Detección de dobles porciones en líneas de helados.</li>
                      <li>Electrónica: Montaje de componentes en PCBs.</li>
                      <li>Automoción: Suministro de piezas pequeñas en estaciones robóticas.</li>
                      <li>Embalaje: Control de films transparentes en envasadoras.</li>
                    </ul>
                  </p>
                  
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Versiones con conector M8 QD (CN/CP) o cable directo (N/P). <br>
                    - Tecnología polarizada para ignorar reflejos en superficies brillantes. <br>
                    - Compatible con integración en maquinaria de alta vibración.
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