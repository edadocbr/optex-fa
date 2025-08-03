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
                  <img src="/assets/images/optex-fa/dm-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensor RGB Serie DM</span>
                  </div>

                  <h2 class="pb-3">
                    Detección inteligente de color con selección automática 
                    de iluminación LED
                  </h2>

                  <p>
                    El sensor DM-18T combina tecnología RGB avanzada con un display 
                    numérico intuitivo para detección precisa de colores y marcas (tacas) 
                    en entornos industriales. Con capacidad para almacenar hasta 8 
                    configuraciones, optimiza el cambio rápido entre productos sin 
                    recalibración.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Selección automática de LED RGB: Microprocesador elige entre luz roja, verde o azul según el objetivo.</li>
                      <li>Dualidad operativa.</li>
                      <li>Configuración flexible: 8 bancos de memoria para almacenar parámetros.</li>
                      <li>Versiones de conexión: Cable incorporado o conector M8 (recto/tipo L).</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Impresión y embalaje: Verificación de colores en etiquetas multicolor.</li>
                      <li>Automotriz: Control de marcas de color en piezas plásticas.</li>
                      <li>Alimentación: Clasificación de productos por color en cintas transportadoras.</li>
                    </ul>
                  </p>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Precisión en movimiento: Funciona incluso con objetos en transporte rápido. <br>
                    - Compatibilidad: Modelos con IP67 para entornos exigentes. <br>
                    - Integración: Salidas configurables para PLCs y sistemas de control.
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