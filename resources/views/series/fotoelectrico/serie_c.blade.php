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
                  <img src="/assets/images/optex-fa/c-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie C</span>
                  </div>

                  <h2 class="pb-3">
                    Robustez industrial y precisión en detección de objetos
                  </h2>

                  <p>
                    La Serie C de sensores fotoeléctricos combina precisión alemana con 
                    robustez industrial, ofreciendo tres tecnologías de detección en 
                    carcasa metálica de níquel-bronce. Diseñados para resistir vibraciones 
                    intensas, químicos corrosivos y aceites, estos sensores son la solución 
                    ideal para líneas de producción donde fallar no es una opción. Su 
                    inyección epóxica garantiza estanqueidad y larga vida útil incluso 
                    en las condiciones más adversas.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Tres tecnologías en carcasa metálica: Barrera (15m), retro-reflectivo (3m) y polarizado (1m).</li>
                      <li>Resistencia extrema: Cuerpo de níquel-bronce que supera 10x la vida útil de sensores plásticos.</li>
                      <li>Configuración remota: Teaching sin tocar el sensor.</li>
                      <li>Montaje versátil: Opciones M12 QD, cable directo y accesorios giratorios 90°.</li>
                      <li>Detección infalible: Filtro de polarización integrado para superficies reflectantes.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Industria pesada: Monitoreo de piezas en prensas hidráulicas vibrantes.</li>
                      <li>Alimentación: Conteo de envases en líneas de envasado rápido.</li>
                      <li>Carpintería: Posicionamiento milimétrico de tableros de madera.</li>
                      <li>Química: Detección en áreas con vapores corrosivos.</li>
                    </ul>
                  </p>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Material epóxico inyectado para máxima resistencia. <br>
                    - Compatible con conectores rectos y en L (90°). <br>
                    - Superior a sensores plásticos en durabilidad y resistencia química.
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