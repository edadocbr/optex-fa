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
                  <img src="/assets/images/optex-fa/v2-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie V2</span>
                  </div>

                  <h2 class="pb-3">
                    Detección de larga distancia con precisión milimétrica en entornos exigentes
                  </h2>

                  <p>
                    La Serie V2 combina tecnología de barrera (20m) y retro-reflectiva 
                    polarizada (8m) en un diseño robusto IP67. Con haz láser estrecho 
                    (3°) y lentes de largo alcance, ofrece detección estable incluso 
                    con polvo o niebla. Disponible con salidas de relé o transistor 
                    (incluyendo versión M12 QD), es ideal para aplicaciones de seguridad 
                    y control industrial.

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Alcance extendido: Barrera (20m), retro-reflectivo polarizado (8m).</li>
                      <li>Precisión superior: Haz de 3° para detectar objetos pequeños a distancia.</li>
                      <li>Diseño versátil: Conector giratorio 90° que mantiene IP67.</li>
                      <li>Robustez industrial: Carcasa reforzada y lentes resistentes a condiciones adversas.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Control de acceso en puertas industriales y estacionamientos.</li>
                      <li>Monitoreo de objetos en cintas transportadoras con polvo.</li>
                      <li>Conteo preciso de llantas en líneas de producción.</li>
                      <li>Detección de pequeñas piezas en entornos con vibraciones.</li>
                    </ul>
                  </p>

                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Modelos BGS con cubierta reforzada para 80cm de detección. <br>
                    - Área muerta reducida (1cm) para máxima eficiencia. <br>
                    - Compatible con voltajes DC manteniendo protección IP67 en conexión giratoria.
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