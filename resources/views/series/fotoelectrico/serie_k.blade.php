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
                  <img src="/assets/images/optex-fa/k-1.jpg" alt="" />
                </div>

                <div class="blog_dtl_content">

                  <div class="blog_dtl_top_bs pt-2">
                    <span>Sensor Fotoeléctrico Serie K</span>
                  </div>

                  <h2 class="pb-3">
                    Fiabilidad y precisión en la detección de botellas 
                    PET transparentes
                  </h2>

                  <p>
                    Los sensores fotoeléctricos de la serie K están especialmente 
                    diseñados para la detección precisa de productos de vidrio y PET. 
                    Gracias a su diseño robusto con carcasa de acero inoxidable y 
                    u alta inmunidad a interferencias eléctricas, son ideales para 
                    ambientes industriales exigentes. Su diseño compacto y facilidad
                    de instalación los convierten en una opción confiable y eficiente 
                    para líneas de producción automatizadas.
                  <h2>
                    Características clave:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Cubierta de acero inoxidable: Brinda protección mecánica superior frente a impactos o entornos hostiles.</li>
                      <li>Tuercas de instalación integradas: Permiten un montaje rápido, fácil y sin riesgo de dañar las roscas.</li>
                      <li>Protección IP67: A prueba de polvo y resistente al agua, ideal para aplicaciones en ambientes húmedos.</li>
                      <li>Alta inmunidad al ruido: Cumple con los estándares VDE, garantizando confiabilidad en entornos eléctricos ruidosos.</li>
                      <li>Diseño compacto y resistente: Soporta hasta 8 kgf·cm de torque y trabaja con cables delgados resistentes a agua, aceite y calor.</li>
                    </ul>
                  </p>

                  <h2>
                    Aplicaciones industriales:
                  </h2>
                  <p>
                    <ul class="ml-3">
                      <li>Conteo de botellas PET en fajas transportadoras: A alta velocidad sin perder precisión.</li>
                      <li>Detección de botellas apiladas en paletas: Asegura conteo confiable incluso en configuraciones densas.</li>
                      <li>Detección a través de aberturas angostas: Capaz de identificar botellas transparentes a través de pequeños orificios.</li>
                      <li>Verificación en líneas de embotellado: Detección efectiva de productos de vidrio o plástico transparente.</li>
                    </ul>
                  </p>

                  <blockquote>
                    <h5>Notas importantes:</h5>
                    - Ideal para detección de productos transparentes como vidrio o PET, incluso con espacios reducidos. <br>
                    - El sensor cuenta con entrada de prueba para verificación del funcionamiento (tipo barrera KT-700). <br>
                    - Disponible en versiones tipo barrera, retro-reflectivo con filtro de polarización y difuso reflectivo, con rangos de detección de hasta 7 m.
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