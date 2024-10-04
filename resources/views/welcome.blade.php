@extends('layouts.main')
@section('title','Home')
@section('content')


  <!-- ======= Hero Section ======= -->
  {{-- <section id="hero" class="d-flex align-items-center" style="background-image: url('{{asset('images/hero.jpg')}}'); background-size: cover;"> --}}
  <section id="hero" class="d-flex align-items-center" >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-none pt-5 pt-lg-0 order-2 order-lg-1 text-center" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('logo.png')}}" alt="images" class="w-75 img-fluid animated">
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Investindo Nusantara Sekuritas </h1>
          <h3 data-aos="fade-up" data-aos-delay="400">Perusahaan Efek Terpercaya</h3>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#about" class="btn-learn-more scrollto">Mulai</a>
          </div>
        </div>
        <div class="col-lg-6 d-none pt-5 pt-lg-0 order-2 order-lg-1 d-lg-flex text-center" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('logo.png')}}" alt="images" class="w-75 img-fluid animated">
        </div>
      </div>
    </div>

  </section>
  
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients clients pl-2 pr-2">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-aos="fade-up">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/companyprofile.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/corporategovernance.jpg')}}" alt="First slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section> --}}
    <!-- End Clients Section -->

    <!-- ======= Tentang Kami ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-4 col-sm-12 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="150">
            <img src="{{asset('images/about.png')}}" alt="" class="img-fluid">
          </div>
          <div class="col-lg-8 col-sm-12 " data-aos="fade-up" data-aos-delay="300">
            <p class="about-text" style="line-height: 2em">
              PT. Investindo Nusantara Sekuritas merupakan perusahaan efek yang didirikan pada tahun 1989. Investindo menyediakan layanan dan jasa sekuritas melalui produk Equity sebagai perantara pedagang efek nasabah baik untuk ritel maupun institusi dan Investment Banking sebagai jasa penjaminan emisi efek dan penasihat keuangan.  <br>
              Saat ini Investindo juga sedang mengembangkan divisi research untuk memberikan informasi terkini secara rutin kepada nasabah dan mengembangkan aplikasi Mobile Online Trading untuk memberikan kemudahan bagi Nasabahnya dalam berinvestasi dimana saja dan kapan saja.
              <br>
              <a href="/companyprofile" class="btn-learn-more mt-2">Cari Tau Lebih</a>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

   

    <!-- ======= Produk ======= -->
    <section id="services" class="services-welcome">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Produk</h2>
          <h5 class="text-center w-100">Ketahui produk-produk yang ditawarkan oleh Investindo!</h5>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box w-100" id="brokerage-btn" style="background-image: url('{{asset("images/brokerage.jpg")}}'); background-size:cover" onclick="" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title">Brokerage</h4>
              <p class="description">
                &ensp;<br>&ensp;<br>&ensp;
              </p>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box w-100" id="investment-banking-btn" style="background-image: url('{{asset("images/investmentbanking.jpg")}}'); background-size:cover" data-aos="fade-up" data-aos-delay="200">
              <h4 class="title text-white">Investment Banking</h4>
              <p class="description ">
                &ensp;<br>&ensp;<br>&ensp;
            </p>
            </div>
          </div>

          {{-- <div class="col-md-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" onclick="" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa fa-globe-asia"></i></div>
              <h4 class="title"><a href="">Online Trading</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Karir ======= -->
    <section id="career" class="career">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Karir</h2>
        </div>

        <div class="row content">
          <div class="col-sm-12 col-lg-8 mt-5 pt-5 mt-lg-0 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p class="about-text" style="line-height: 2em">
              Dengan pengalaman di dunia pasar modal yang sudah lebih dari 30 tahun, 
              Investindo menawarkan jenjang karir yang menarik bagi fresh graduates maupun profesional berpengalaman untuk 
              mencapai potensi maksimalnya. 
              <br><br>
              <a href="/career" class="btn-learn-more">Buka Peluang</a>
            </p>
          </div>
          <div class="col-sm-12 col-lg-4 mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <img src="{{asset('images/career.png')}}" alt="" class="img-fluid">
          </div>
        </div>

      </div>
    </section><!-- End Career Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Hubungi Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 d-none d-lg-block" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <img src="{{asset('images/contactus.png')}}" class="w-100" alt="" srcset="">
              {{-- <h3>Investindo Nusantara Sekuritas</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p> --}}
              
            </div>
          </div>

          <div class="col-lg-8 col-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="fa fa-map-marker-alt"></i>
                <p><a href="https://goo.gl/maps/pE24Eb7vVuSA6xar8">Plaza Asia, Lantai 17, Jl. Jend. Sudirman No.59, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190</a></p>
              </div>

              <div>
                <i class="fa fa-at"></i>
                <p><a href ='mailto:in@in-sekuritas.com' style = "text-decoration: none; color: black">in@in-sekuritas.com</a></p>
              </div>

              <div>
                <i class="fab fa-whatsapp font-weight-bold"></i>
                <p><a href="https://wa.me/628118385887">+62 8118-385-887</a></p>
              </div>

              <div>
                <i class="fab fa-instagram font-weight-bold"></i>
                <p><a href="https://instagram.com/investindo_sekuritas">investindo_sekuritas</a></p>
              </div>

              {{-- <div class="social-links">
                <a href="https://wa.me/628118385887" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://instagram.com/investindo_sekuritas" class="instagram"><i class="fab fa-instagram"></i></a>
              </div> --}}

            </div>
          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <script>
    $(document).ready(function(){

      $('#investment-banking-btn').click(function(){
            window.location.href = '/investmentbanking'
          })
          $('#brokerage-btn').click(function(){
            window.location.href = '/brokerage'
          })
    })
  </script>

@endsection