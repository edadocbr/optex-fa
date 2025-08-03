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
                  <img src="/assets/images/optex-fa/j3-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie J3</span>
                  </div>

                  <h2 class="pb-3">
                    Tecnología avanzada para detección de tacas y supresión de 
                    fondos en entornos exigentes
                  </h2>

                  <p>
                    La Serie J3 ofrece soluciones especializadas con tres tecnologías 
                    clave: detección de tacas, visión angosta retro-reflectiva y 
                    supresión de fondos (BGS/FGS). Diseñados para resistir vibraciones y 
                    condiciones húmedas (IP67), estos sensores destacan por su precisión 
                    milimétrica y tiempos de respuesta ultrarrápidos (200µs).
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Detección de tacas: Alcance de 10±2mm con LED verde GlanN2.</li>
                      <li>Visión angosta: Haz de 3.0mm para aplicaciones de alta precisión.</li>
                      <li>Tecnología BGS/FGS: Supresión automática de fondos complejos.</li>
                      <li>Robustez industrial: IP67 y resistencia a impactos de 100G.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Verificación de tacas en piezas metálicas o plásticas.</li>
                      <li>Control de objetos delgados en cintas transportadoras (FGS).</li>
                      <li>Alineación de componentes en electrónica de precisión.</li>
                      <li>Detección en entornos con vibraciones constantes.</li>
                    </ul>
                  </p>
                  
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Disponible en versiones frontal y lateral para espacios reducidos. <br>
                    - Configuración simplificada: Teaching con un botón o remoto. <br>
                    - Conectores M8 y opciones de cable para integración flexible.
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