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
                  <img src="/assets/images/optex-fa/z-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Fotoeléctricos Serie Z</span>
                  </div>

                  <h2 class="pb-3">
                    Detección robusta y versátil para entornos industriales exigentes
                  </h2>

                  <p>
                    La Serie Z ofrece sensores fotoeléctricos de alto rendimiento con 
                    resistencia a golpes de 100G y protección IP67. Diseñados para 
                    operar en condiciones adversas, incluyen modelos especializados 
                    para detección de objetos transparentes (botellas PET, vidrio) y 
                    prevención de diafonía, permitiendo instalación múltiple sin 
                    interferencias.
                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>3 tecnologías principales: Barrera (12m), retro-reflectivo (3.6m), difuso (70cm).</li>
                      <li>Inmunidad a interferencias: Instalación lado a lado sin diafonía.</li>
                      <li>Construcción industrial: Carcasa resistente a golpes 100G e IP67.</li>
                      <li>Opciones de conexión: Cable directo o conector M8 QD.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Bebidas: Detección de botellas (PET/vidrio) en líneas de llenado.</li>
                      <li>Automoción: Control de piezas en líneas de montaje con vibraciones.</li>
                      <li>Embalaje: Verificación de materiales transparentes en envasadoras.</li>
                      <li>Electrónica: Montaje de componentes en PCBs.</li>
                    </ul>
                  </p>

                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Modelos económicos disponibles para aplicaciones estándar. <br>
                    - Agujeros roscados para instalación segura y anti-vibraciones. <br>
                    - Compatible con reflectores polarizados (-100-POLF) para mayor precisión.
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