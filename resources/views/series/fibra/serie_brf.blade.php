@extends('layout')

@section('content')
    
  <!-- BLOG AREA -->
  <div class="blog_area blog-details-area pt-100 pb-100" id="blog">
    <div class="container">

      @include('partials.fibra.return_link')
     
      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <div class="blog_details">

                <div class="blog_dtl_thumb">
                  <img src="/assets/images/optex-fa/3.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensor de Fibra Óptica Serie FBR</span>
                  </div>

                  <h2 class="pb-3">
                    Tecnología precisa para detección rápida y confiable
                  </h2>

                  <p>
                    Los sensores de fibra óptica de la serie FBR son dispositivos 
                    compactos y versátiles diseñados para ofrecer detección precisa 
                    en una amplia gama de aplicaciones industriales. Con capacidades de alta 
                    velocidad, detección de objetos extremadamente pequeños y detección 
                    especializada como humedad y tacas, estos sensores son ideales para 
                    entornos exigentes que requieren máxima precisión y fiabilidad.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Velocidad ultrarrápida: Modelos de alta velocidad con respuesta de hasta 50 µs.</li>
                      <li>Detección especializada: Incluye modelos únicos para detección de humedad (serie BIF-W).</li>
                      <li>Alta precisión: Capacidad para detectar objetos tan pequeños como 0.015 mm (modelo NF-DT01).</li>
                      <li>Distancia de detección extendida: Hasta 4 metros con lentes especiales (NF-TK77).</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Líneas de producción automática.</li>
                      <li>Control de calidad en envases.</li>
                      <li>Industria farmacéutica.</li>
                      <li>Sistemas de transporte industrial.</li>
                    </ul>
                  </p>
          
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - La detección de humedad solo es posible con el modelo exclusivo BIF-W, que es único en el mercado. <br>
                    - Para prevenir interferencias entre amplificadores, se deben instalar en grupos de 4 unidades. <br>
                    - Existen distintos tipos de cables para conexión maestro/esclavo (DOL-LL1903-02M y DOL-LL1901-02M), los cuales no están incluidos con los amplificadores.
                  </blockquote>
                
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('partials.fibra.menu')

      </div>
    </div>
  </div>
  <!-- BLOG_AREA END -->

@endsection