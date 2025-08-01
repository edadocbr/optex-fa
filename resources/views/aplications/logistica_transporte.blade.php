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
                <h2>Logística y transporte</h2>
              </div>
              <div class="breatcome_content">
                <ul>
                  <li>
                    <a href="{{ route('pages.home') }}">Inicio</a>
                    <i class="fa fa-angle-right"></i> <span>Aplicaciones</span>
                    <i class="fa fa-angle-right"></i> <span>Logística y transporte</span>
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

    <!--==================================================-->
    <!----- Start Techno Blog Area ----->
    <!--==================================================-->
    <div class="blog_area pt-85 pb-65">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog mb-30">
              <div class="single_blog_thumb pb-4">
                <a href="javascript:;"
                  ><img src="/assets/images/optex-fa/01-bgz-z30n.jpg" width="348" height="258" alt=""
                /></a>
              </div>
              <div class="single_blog_content pl-4 pr-4">
                <div class="blog_page_title pb-35">
                  <h3>
                    <a href="javascript:;">
                      Detector de presencia de objetos en rodillos
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog mb-30">
              <div class="single_blog_thumb pb-4">
                <a href="javascript:;"
                  ><img src="/assets/images/optex-fa/02-bgs-20n.jpg" width="348" height="258" alt=""
                /></a>
              </div>
              <div class="single_blog_content pl-4 pr-4">
                <div class="blog_page_title pb-35">
                  <h3>
                    <a href="javascript:;">
                      Sensores con espejo
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog mb-30">
              <div class="single_blog_thumb pb-4">
                <a href="javascript:;"
                  ><img src="/assets/images/optex-fa/03-zr-350n.jpg" width="348" height="258" alt=""
                /></a>
              </div>
              <div class="single_blog_content pl-4 pr-4">
                <div class="blog_page_title pb-35">
                  <h3>
                    <a href="javascript:;">
                      Detecion de cajas en fajas de alta velocidad
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog mb-4">
              <div class="single_blog_thumb pb-4">
                <a href="javascript:;"
                  ><img src="/assets/images/optex-fa/70-bgs-v80.jpg" width="348" height="258" alt=""
                /></a>
              </div>
              <div class="single_blog_content pl-4 pr-4">
                <div class="blog_page_title pb-35">
                  <h3>
                    <a href="javascript:;">
                      Sensores universales de voltaje
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog mb-4">
              <div class="single_blog_thumb pb-4">
                <a href="javascript:;"
                  ><img src="/assets/images/optex-fa/71-v2t-2000.jpg" width="348" height="258" alt=""
                /></a>
              </div>
              <div class="single_blog_content pl-4 pr-4">
                <div class="blog_page_title pb-35">
                  <h3>
                    <a href="javascript:;">
                      Sensores de larga distancia para puertas
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog mb-4">
              <div class="single_blog_thumb pb-4">
                <a href="javascript:;"
                  ><img src="/assets/images/optex-fa/73-v3r-1000.jpg" width="348" height="258" alt=""
                /></a>
              </div>
              <div class="single_blog_content pl-4 pr-4">
                <div class="blog_page_title pb-35">
                  <h3>
                    <a href="javascript:;">
                      Sensores retro reflectivos de larga distancia
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- start pagination -->
        <div class="row">
          <div class="col-md-12">
            <div class="paginations">
              <ul class="page-numbers">
                <li>
                  <span aria-current="page" class="page-numbers current"
                    >1</span
                  >
                </li>
                <li><a class="page-numbers" href="#">2</a></li>
                <li><a class="page-numbers" href="#">3</a></li>
                <li><a class="page-numbers" href="#">4</a></li>
                <li>
                  <a class="next page-numbers" href="#"
                    ><i class="fa fa-long-arrow-right"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Blog Area ----->
    <!--==================================================-->

@endsection