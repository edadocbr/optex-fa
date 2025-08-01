@extends('layout')

@section('content')

    <!-- BLOG AREA -->
  <div class="blog_area blog-details-area pt-100 pb-100" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-7 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <div class="blog_details">

                <div class="blog_dtl_thumb">
                  <img src="/assets/images/optex-fa/sensor-cvs-1.jpg" alt="" />
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
                    El CVS1 es el primer sensor de visión del mundo que integra 
                    cámara, iluminación y controlador en un diseño vertical compacto. 
                    Su tamaño reducido (similar al de un teléfono móvil) lo hace 
                    ideal para espacios limitados sin sacrificar potencia.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Procesador de color de 24 bits (16.7 millones de colores)</li>
                      <li>Pantalla TFT LCD de 1.5" con visualización en tiempo real.</li>
                      <li>Lámpara LED de alta intensidad y larga duración.</li>
                      <li>Cuerpo principal con solo 3 cables de conexión.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Verificación de niveles en botellas transparentes.</li>
                      <li>Clasificación de productos por color exacto.</li>
                      <li>Detección de ingredientes en alimentos.</li>
                      <li>Control de calidad en piezas industriales.</li>
                    </ul>
                  </p>

                  {{-- <div class="blog_dtl_thumb pt-3">
                    <img src="/assets/images/blog2.jpg" alt="" />
                  </div> --}}
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Compatible con entornos industriales 24/7. <br>
                    - Incluye soporte para montaje en rieles DIN. <br>
                    - Certificaciones internacionales de seguridad.
                  </blockquote>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BLOG_AREA END -->
    
@endsection