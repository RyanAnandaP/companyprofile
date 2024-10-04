@extends('layouts.main')
@section('title','Online Trading')
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
                        <p data-target="#carouselExampleIndicators" class="m-0 p-0 text-center active" data-slide-to="0">1</p>
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
          $('[data-toggle="popover"]').popover();
          $('.popover-dismiss').popover({
            trigger: 'focus'
          })
        })
      </script>

@endsection
