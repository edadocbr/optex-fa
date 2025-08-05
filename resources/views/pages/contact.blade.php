@extends('layout')

@section('content')

  <!-- ============================================================== -->
  <!-- Start Techno Breatcome Area -->
  <!-- ============================================================== -->
  <div class="breatcome_area d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breatcome_title">
            <div class="breatcome_title_inner pb-2">
              <h2>Contáctenos</h2>
            </div>
            <div class="breatcome_content">
              <ul>
                <li>
                  <a href="{{ route('pages.home') }}">Inicio</a>
                  <i class="fa fa-angle-right"></i> <span>Contáctenos</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Techno Breatcome Area -->
  <!-- ============================================================== -->

  <div class="contact_address_area pt-80 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section_title text_center mb-55">
            <div class="section_sub_title uppercase mb-3">
              <h6>CONTÁCTANOS AHORA!</h6>
            </div>
            <div class="section_main_title">
              <h1>Nosotros Estamos Aquí Para Ti</h1>
            </div>
            <div class="em_bar">
              <div class="em_bar_bg"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="single_contact_address text_center mb-30">
            <div class="contact_address_icon pb-3">
              <i class="fa fa-map-o"></i>
            </div>
            <div class="contact_address_title pb-2">
              <h4>Dirección</h4>
            </div>
            <div class="contact_address_text">
              <p>Av. Argentina Nº523 Tda. A12 - C.C. ACOPROM Lima 01- Perú.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="single_contact_address text_center mb-30">
            <div class="contact_address_icon pb-3">
              <i class="fa fa-envelope-o"></i>
            </div>
            <div class="contact_address_title pb-2">
              <h4>Email</h4>
            </div>
            <div class="contact_address_text">
              <p>soporte@optex-fa.pe <br> ventas@optex-fa.pe</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="single_contact_address text_center mb-30">
            <div class="contact_address_icon pb-3">
              <i class="fa fa-volume-control-phone"></i>
            </div>
            <div class="contact_address_title pb-2">
              <h4>Teléfonos</h4>
            </div>
            <div class="contact_address_text">
              <p>719 9810 / 719 9811 <br> 9852-72098 / 9999-38660</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--==================================================-->
  <!----- Start Techno Contact Area ----->
  <!--==================================================-->
  {{-- <div class="main_contact_area pt-80 bg_color2 pb-90">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section_title text_center mb-55">
            <div class="section_sub_title uppercase mb-3">
              <h6>CONTÁCTENOS</h6>
            </div>
            <div class="section_main_title">
              <h1>Contáctanos</h1>
              <h1>Ahora!</h1>
            </div>
            <div class="em_bar">
              <div class="em_bar_bg"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="contact_from">
            <form id="contact_form" action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form_box mb-30">
                    <input type="text" name="name" placeholder="Nombre" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form_box mb-30">
                    <input type="email" name="email" placeholder="Email" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form_box mb-30">
                    <input type="text" name="phone" placeholder="Número de teléfono" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form_box mb-30">
                    <input type="text" name="web" placeholder="Sitio web" />
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form_box mb-30">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Escriba su mensaje..."></textarea>
                  </div>
                  <div class="quote_btn text_center">
                    <button class="btn" type="submit">Enviar Mensaje</button>
                  </div>
                </div>
              </div>
            </form>
            <div id="status"></div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!--==================================================-->
  <!----- End Techno Contact Area ----->
  <!--==================================================-->

  <!--==================================================-->
  <!----- End Techno Map Area ----->
  <!--==================================================-->
  <div class="google_map_area">
    <div class="row-fluid">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="google_map_area">
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15607.876552832795!2d-77.08427944458008!3d-12.045644399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c90043d0a605%3A0x276997e4e180dd8b!2sCC%20ACOPROM!5e0!3m2!1ses!2spe!4v1754006842375!5m2!1ses!2spe"></iframe>
        </div>
      </div>
    </div>
  </div>
  <!--==================================================-->
  <!----- End Techno Map Area ----->
  <!--==================================================-->

@endsection