@extends('layouts.main')
@section('title','Equity')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" >

        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <h1 data-aos="fade-up">Equity</h1>
              <p data-aos="fade-up" data-aos-delay="400" style="line-height:2em">
                Dengan pengalaman lebih dari 20 tahun, Investindo berkomitmen untuk menjadi mitra terbaik investasi saham untuk nasabah perorangan maupun institusi. Kami melayani penjualan efek ekuitas di pasar perdana dan melakukan kegiatan sebagai perantara pedagang efek ekuitas di pasar sekunder. 
              </p>
              <div data-aos="fade-up" data-aos-delay="400">
                <a href="#why" class="btn-learn-more scrollto">Mengapa Investindo?</a>
              </div>
            </div>
            <div class="col-lg-6 col-12 text-right mt-5 pt-5 pt-lg-0 mt-lg-0">
                <img src="{{asset('images/equity.png')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->
    
      <main id="main">

        <!-- ======= Why ======= -->
        <section class="services">
          <div class="container">

            <div class="section-title" data-aos="fade-up">
              <h2>Mengapa Investindo?</h2>
            </div>
                <div id="carouselExampleIndicators" class="carousel vert slide" data-ride="carousel" data-aos="fade-up">
                  <div class="row">
                    <div class="col-lg-3 col-2 d-flex align-items-center justify-content-center">
                      <div class="carousel-indicators mt-0 pt-0">
                        <p data-target="#carouselExampleIndicators" class="mb-3 p-1 text-center active" style="font-size: 24px; font-weight:500; background: transparent" data-slide-to="0">1</p>
                        <p data-target="#carouselExampleIndicators" class="mb-3 p-1 text-center" style="font-size: 24px; font-weight:500; background: transparent" data-slide-to="1">2</p>
                        <p data-target="#carouselExampleIndicators" class="mb-3 p-1 text-center" style="font-size: 24px; font-weight:500; background: transparent" data-slide-to="2">3</p>
                        <p data-target="#carouselExampleIndicators" class="p-1 text-center" style="font-size: 24px; font-weight:500; background: transparent" data-slide-to="3">4</p>
                      </div>
                    </div>
                    <div class="col-lg-9 col-10">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="d-flex align-items-center" style="height: 15em !important;">
                            <h5 class="text-left d-block">
                              <span style="font-size: 2em; font-weight:700;">Real Time Trading</span> <br>
                              Menyediakan perkembangan harga saham yang terjadi dengan cepat dan tepat. 
                            </h5>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="d-flex align-items-center" style="height: 15em !important;">
                            <h5 class="text-left d-block">
                              <span style="font-size: 2em; font-family:'Raleway', sans-serif; font-weight:700;">Mudah &amp; Nyaman</span> <br>
                              Terus beradaptasi untuk kemudahan berinvestasi.
                            </h5>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="d-flex align-items-center" style="height: 15em !important;">
                            <h5 class="text-left d-block">
                              <span style="font-size: 2em; font-family:'Raleway', sans-serif; font-weight:700;">Aman &amp; Terpercaya</span> <br>
                              Menggunakan sistem teknologi mutakhir untuk menjaga keamanan anda dalam berinvestasi. 
                            </h5>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="d-flex align-items-center" style="height: 15em !important;">
                            <h5 class="text-left d-block">
                              <span style="font-size: 2em; font-family:'Raleway', sans-serif; font-weight:700;">Fee Kompetitif</span> <br>
                              Broker fee yang rendah menjadi daya tarik investor untuk berinvestasi melalui <strong><i>INVITE</i></strong>.
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

            
                <span id="why"></span>
            

          </div>
        </section><!-- End Why -->


        <!-- ======= Why ======= -->
        <section class="services">
          <div class="container">

            <div class="section-title" data-aos="fade-up">
              <h2>Online Trading</h2>
              <h5 class="text-center w-100">Trading dari mana saja menggunakan <i>platform</i> pilihanmu</h5>
            </div>

            <div class="row">

              <div class="col-lg-3 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                {{-- <div class="icon-box w-100 bg-success card-box-1" data-aos="fade-up" data-aos-delay="100"> --}}
                <div class="icon-box w-100 card-box-5" data-aos="fade-up" data-aos-delay="100" style="background-color:#1cb0f9">
                  <div class="card-icon-1 h-100">
                    <div class="d-flex align-items-center justify-content-center">
                      <img src="{{asset('images/apple.png')}}" alt="apple" class="w-50 d-none d-lg-block">
                      <img src="{{asset('images/apple.png')}}" alt="apple" class="w-25 d-lg-none d-block">
                    </div>
                  </div>
                  <div class="card-description-1 h-100 align-items-center">
                    <p class="description text-white text-center">
                      <a href="https://apps.apple.com/id/app/invite/id1570077919" class="text-white">App Store</a>
                      <!-- Coming Soon -->
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                {{-- <div class="icon-box w-100 bg-warning card-box-2" data-aos="fade-up" data-aos-delay="100"> --}}
                <div class="icon-box w-100 card-box-1" data-aos="fade-up" data-aos-delay="100" style="background-color:#76bb55">
                  <div class="card-icon-2 h-100">
                    <div class="d-flex align-items-center justify-content-center">
                      <img src="{{asset('images/playstore.png')}}" alt="transaction" class="w-50 d-none d-lg-block">
                      <img src="{{asset('images/playstore.png')}}" alt="transaction" class="w-25 d-lg-none d-block">
                    </div>
                  </div>
                  <div class="card-description-2 h-100 align-items-center">
                    <p class="description text-white text-center">
                      <a href="https://play.google.com/store/apps/details?id=co.id.investindosekuritas.invite" class="text-white">Play Store</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4" id="windows-button">
                {{-- <div class="icon-box w-100 bg-danger card-box-3" data-aos="fade-up" data-aos-delay="100"> --}}
                <div class="icon-box w-100 card-box-6" data-aos="fade-up" data-aos-delay="100" style="background-color: #034ade">
                  <div class="card-icon-3 h-100">
                    <div class="d-flex align-items-center justify-content-center">
                      <img src="{{asset('images/windows.png')}}" alt="research" class="w-50 d-none d-lg-block">
                      <img src="{{asset('images/windows.png')}}" alt="research" class="w-25 d-lg-none d-block">
                    </div>
                  </div>
                  <div class="card-description-3 h-100 align-items-center">
                    <p class="description text-white text-center">
                      <a href="/downloads/invite.msi" class="text-white">Windows</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4" id="web-button">
                {{-- <div class="icon-box w-100 bg-info card-box-4" data-aos="fade-up" data-aos-delay="100"> --}}
                <div class="icon-box w-100 card-box-4" data-aos="fade-up" data-aos-delay="100" style="background-color:#01c5c4">
                  <div class="card-icon-4 h-100">
                    <div class="d-flex align-items-center justify-content-center">
                      <img src="{{asset('images/browser.png')}}" alt="enterprise" class="w-50 d-none d-lg-block">
                      <img src="{{asset('images/browser.png')}}" alt="enterprise" class="w-25 d-lg-none d-block">
                    </div>
                  </div>
                  <div class="card-description-4 h-100 align-items-center">
                    <p class="description text-white text-center">
                      <a href="https://invite.investindosekuritas.co.id/" class="text-white" href="">Web</a>
                    </p>
                  </div>
                </div>
              </div>


            </div>

          </div>
          <span id="ot"></span>
        </section><!-- End Why -->
    
      </main><!-- End #main -->
    
      <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
      <script>
        $(document).ready(function(){
          $('#product-button').click(function(){
            window.location.href = '/product'
          })
          $('#career-button').click(function(){
            window.location.href = '/career'
          })
          $('#windows-button').click(function(){
            window.location.href = '/downloads/invite.msi'
          })
          $('#web-button').click(function(){
            window.location.href = 'https://invite.investindosekuritas.co.id/'
          })
          $('[data-toggle="popover"]').popover();
          $('.popover-dismiss').popover({
            trigger: 'focus'
          })
        })
      </script>

@endsection