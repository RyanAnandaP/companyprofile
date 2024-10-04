@extends('layouts.main')
@section('title','Produk')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" >

        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <h1 data-aos="fade-up">Produk</h1>
              <p data-aos="fade-up" data-aos-delay="400">Ketahui produk-produk yang ditawarkan oleh Investindo!</p>
              
              <div data-aos="fade-up" data-aos-delay="400">
                <a href="#services" class="btn-learn-more scrollto">Cari Tahu Lebih</a>
              </div>
            </div>
            <div class="col-lg-6 col-12 text-right">
                <img src="{{asset('images/products.png')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->
    
      <main id="main">
        <!-- ======= Produk ======= -->
        <section id="services" class="services">
            <div class="container">
    
            {{-- <div class="section-title" data-aos="fade-up">
                <h2>Produk</h2>
                <p>Ketahui produk-produk yang ditawarkan oleh IN!</p>
            </div> --}}
    
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box w-100" id="equity-btn" style="background-image: url('{{asset("images/equity.png")}}'); background-size:cover" onclick="" data-aos="fade-up" data-aos-delay="100">
                  {{-- <div class="icon"><i class="fa fa-chart-pie"></i></div> --}}
                  <h4 class="title">Brokerage</h4>
                  <p class="description">
                    &ensp;<br>&ensp;<br>&ensp;
                  </p>
                </div>
              </div>
    
              <div class="col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box w-100" id="investment-banking-btn" onclick="" style="background-image: url('{{asset("images/investmentbanking.png")}}'); background-size:cover" data-aos="fade-up" data-aos-delay="200">
                  {{-- <div class="icon"><i class="fa fa-university"></i></div> --}}
                  <h4 class="title">Investment Banking</h4>
                  <p class="description ">

                    &ensp;<br>&ensp;<br>&ensp;
                    {{-- <strong>Underwriting</strong><br>
                    Dengan pengalaman yang lebih dari 20 tahun dalam menangani berbagai transaksi di pasar modal, Divisi Investment Banking Investindo menyediakan jasa keuangan terbaik, baik penjaminan emisi saham dan obligasi maupun penasihat keuangan.
                    <br><br>
                    <strong>Corporate Finance & Advisory</strong><br>
                    Layanan jasa keuangan sesuai kebutuhan untuk membantu perusahaan anda. --}}
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
    
      </main><!-- End #main -->
    
      <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
      <script>
        $(document).ready(function(){
          $('#investment-banking-btn').click(function(){
            window.location.href = '/investmentbanking'
          })
          $('#equity-btn').click(function(){
            window.location.href = '/equity'
          })
          $('#product-button').click(function(){
            window.location.href = '/product'
          })
          $('#career-button').click(function(){
            window.location.href = '/career'
          })
        })
      </script>

@endsection