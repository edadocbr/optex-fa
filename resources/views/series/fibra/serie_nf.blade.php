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
                  <img src="/assets/images/optex-fa/11.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores de Fibra Óptica Serie NF</span>
                  </div>

                  <h2 class="pb-3">
                    Solución versátil con más de 75 tipos de fibras para aplicaciones especializadas
                  </h2>

                  <p>
                    La serie NF ofrece la gama más amplia de fibras ópticas industriales 
                    (más de 75 tipos estándar + opciones personalizadas), diseñadas para 
                    resolver desafíos complejos en entornos críticos como semiconductores, 
                    líquidos y superficies reflectantes. Su tecnología adaptable 
                    garantiza detección precisa incluso en condiciones extremas.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Portafolio completo: 75+ fibras estándar + 11 tipos especializados para semiconductores.</li>
                      <li>Detección en condiciones críticas: Gotas de agua/refrigerante (NP-TA02).</li>
                      <li>Robustez industrial: Diseños resistentes a químicos y vibraciones.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Semiconductores: Detección de obleas en cámaras limpias.</li>
                      <li>Procesos químicos: Monitoreo de nivel en tanques de refrigerante.</li>
                      <li>Manufactura avanzada: Verificación de fechas en laminados transparentes.</li>
                      <li>Embalaje inteligente: Detección de etiquetas en envases metálicos.</li>
                    </ul>
                  </p>
  
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Fibras especiales: Opciones para alta temperatura (hasta 150°C) y resistencia química. <br>
                    - Integración sencilla: Compatibilidad con sistemas VRF-1 y NPC para amplificación. <br>
                    - Certificaciones: Cumple con estándares para entornos explosivos (ATEX opcional).
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