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
                  <img src="/assets/images/optex-fa/serie-cd1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensor de Desplazamiento Serie CD1</span>
                  </div>

                  <h2 class="pb-3">
                    Precisión industrial en un diseño compacto con 
                    configuración remota
                  </h2>

                  <p>
                    El sensor CD1 combina amplificador y sensor en una sola unidad, 
                    ofreciendo medición precisa de desplazamiento sin necesidad de 
                    componentes externos. Su sistema integrado simplifica la instalación y 
                    reduce puntos de falla.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Alcance estándar: 2000 ±100mm.</li>
                      <li>Precisión: ±1mm en distancias cortas (5-6mm).</li>
                      <li>Configuración remota: Teaching sin tocar el sensor.</li>
                      <li>Resistencia industrial: Carcasa IP67.</li>
                      <li>Adaptabilidad: 3 modos de sensibilidad.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Control de nivel en empaques alimentarios.</li>
                      <li>Verificación de altura de componentes.</li>
                      <li>Inspección de tapas en envasado de bebidas.</li>
                      <li>Monitoreo de partes mecánicas.</li>
                    </ul>
                  </p>

                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Compatible con entradas de teaching remoto para integración OEM. <br>
                    - Salida analógica lineal proporcional a la distancia medida. <br>
                    - Certificado para uso en ambientes industriales exigentes.
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