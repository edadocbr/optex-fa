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
                  <img src="/assets/images/optex-fa/7.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensores de Fibra Óptica Serie TGF/VGF-T</span>
                  </div>

                  <h2 class="pb-3">
                    Precisión adaptable con tecnología anti-diafonía y ajuste 
                    fino integrado
                  </h2>

                  <p>
                    Los sensores TGF/VGF-T combinan fibra óptica ultra-delgada (9mm) con 
                    un sistema de teaching inteligente y potenciómetro de ajuste fino. 
                    Disponibles en frecuencias estándar y alternativas (identificadas 
                    con "Z"), son ideales para aplicaciones donde la diafonía o la 
                    precisión milimétrica son críticas.
                  </p>

                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>4 modos de teaching: Automático, 2 puntos, límite ajustable y alta resolución (0.2mm).</li>
                      <li>Anti-diafonía: Modelos con frecuencia diferenciada (serie "Z") para evitar interferencias.</li>
                      <li>Diseño compacto: Perfil de 9mm para espacios reducidos.</li>
                      <li>Ajuste fino: Potenciómetro integrado para calibración precisa en aplicaciones sensibles.</li>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Electrónica: Conteo de chips IC en líneas de producción.</li>
                      <li>Farmacéutico: Control de pastillas en blister packs.</li>
                      <li>Automotriz: Identificación de piezas pequeñas en cintas transportadoras.</li>
                      <li>Embalaje: Detección de objetos transparentes o reflectivos.</li>
                    </ul>
                  </p>
               
                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - LED verde: Indicador de estado estable y detección confiable. <br>
                    - Palanca de bloqueo: Fijación segura de la fibra óptica. <br>
                    - Compatibilidad.
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