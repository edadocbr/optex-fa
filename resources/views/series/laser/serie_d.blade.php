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
                  <img src="/assets/images/optex-fa/d-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores Láser Serie D</span>
                  </div>

                  <h2 class="pb-3">
                    Tecnología CMOS de vanguardia para detección precisa en
                    condiciones desafiantes
                  </h2>

                  <p>
                    La serie D combina sensores de imagen CMOS con algoritmos inteligentes 
                    para ofrecer detección confiable de objetos transparentes, 
                    reflectantes y de superficies irregulares. Con modelos que 
                    incluyen autoajuste (BGS-DL) y control manual, estos sensores 
                    son ideales para aplicaciones donde la precisión es crítica.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Tecnología CMOS: Detección del pico real de luz, superando limitaciones de sensores PSD.</li>
                      <li>Función FGS: Monitoreo inteligente de superficies en cintas transportadoras vibratorias.</li>
                      <li>Rangos amplios: Desde 40mm hasta 100m (modelos DT para larga distancia).</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Envases y Embalaje: Detección de bolsas de aluminio en líneas de envasado rápido (DR-500).</li>
                      <li>Manufactura de Precisión: Posicionamiento de tinta en impresoras industriales (DR-500).</li>
                      <li>Automotriz y Electrónica: Inspección de vidrio templado o plásticos transparentes (DR-Q150).</li>
                    </ul>
                  </p>
                 
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Serie BGS-DL: Ideal para objetos en movimiento sobre cintas transportadoras. <br>
                    - Serie DR-Q: Función AGC para materiales transparentes (PET, vidrio). <br>
                    - Serie DT: Alcance extendido (hasta 100m) para aplicaciones de larga distancia.
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