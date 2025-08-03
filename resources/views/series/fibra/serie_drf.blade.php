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
                  <img src="/assets/images/optex-fa/1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores de Fibra Óptica Serie DRF</span>
                  </div>

                  <h2 class="pb-3">
                    Detección estable en ambientes desafiantes con 
                    tecnología diferencial
                  </h2>

                  <p>
                    Los sensores DRF combinan fibra óptica de alta precisión con 
                    un amplificador inteligente para operar en condiciones extremas 
                    (químicos, vibraciones, superficies irregulares). Su modo 
                    diferencial elimina falsas detecciones causadas por fondos 
                    variables, ideal para cintas transportadoras o piezas reflectivas.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>8 modos de detección: Incluye contador, diferencial y auto-teaching.</li>
                      <li>Tecnología APC: Compensación automática de intensidad lumínica.</li>
                      <li>Configuración flexible: Amplificador funciona como maestro/esclavo (cables intercambiables).</li>
                      <li>Robustez industrial: Resistente a interferencias químicas y físicas.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Farmacéutico: Conteo de pastillas en líneas de alta velocidad.</li>
                      <li>Electrónica: Detección de componentes en tarjetas PCB.</li>
                      <li>Logística: Control de botellas en cintas transportadoras irregulares.</li>
                      <li>Automotriz: Verificación de piezas metálicas reflectivas.</li>
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

        @include('partials.fibra.menu')

      </div>
    </div>
  </div>
  <!-- BLOG_AREA END -->

@endsection