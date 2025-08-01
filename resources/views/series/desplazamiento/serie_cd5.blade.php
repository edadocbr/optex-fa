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
                  <img src="/assets/images/optex-fa/serie-cd5-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensor de Visión de Color CVS1</span>
                  </div>

                  <h2 class="pb-3">
                    Sensor de visión del tamaño de 
                    la palma de la mano
                  </h2>

                  <p>
                    El CD5 de Optex-FA representa la vanguardia en sensores láser 
                    industriales, combinando precisión submicroscópica (hasta 0.02µm) 
                    con flexibilidad de configuración. Diseñado para entornos
                    exigentes, su tecnología Tri-CORE garantiza mediciones estables 
                    en superficies reflectivas, oscuras o translúcidas (vidrio, 
                    caucho negro, acero inoxidable). Con opciones de cabezales 
                    autónomos o controlador multi-sensor, es ideal para aplicaciones 
                    de control de calidad, medición de espesores y alineación en 
                    líneas de producción.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Tri-CORE: Procesamiento digital de sub-píxeles (65,536 divisiones) para corrección de errores en tiempo real.</li>
                      <li>Inmunidad a interferencias: Tecnología anti cross-talk para multi-sensores.</li>
                      <li>Conexión triple: Hasta 3 cabezales simultáneos para cálculos combinados.</li>
                      <li>Aplicaciones destacadas en varias industrias.</li>
                    </ul>
                  </p>

                  <h2>
                    Casos de éxito:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Electrónica: Medición de espesores en vidrio templado.</li>
                      <li>Automotriz: Control de deformación en piezas metálicas.</li>
                      <li>Automotriz: Control de deformación en piezas metálicas.</li>
                      <li>Manufactura: Detección de warpage en PCBs.</li>
                    </ul>
                  </p>

                  <div class="blog_dtl_thumb pt-3">
                    <img src="/assets/images/optex-fa/serie-cd5-2.jpg" alt="" />
                  </div>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Alimentación: 24V DC (conector de 50 pines). <br>
                    - Temperatura: -10°C a 55°C operación. <br>
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