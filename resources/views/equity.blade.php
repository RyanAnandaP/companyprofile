@extends('layouts.main')
@section('title','Equity')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" >

        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <h1 data-aos="fade-up">Brokerage</h1>
              <h6 data-aos="fade-up" data-aos-delay="400" style="line-height: 2em">
                  {{-- Produk investasi yang paling diminati investor karena dapat memberikan tingkat keuntungan yang menarik. --}}
                  Investindo sebagai salah satu broker yang sudah berpengalaman lebih dari 20 tahun telah terbukti dapat melewati krisis ekonomi di Indonesia dan terus menyesuaikan dengan kebutuhan nasabah.
              </h6>
              <div data-aos="fade-up" data-aos-delay="400">
                <a href="/equity" class="btn-learn-more mr-2">Equity</a>
                <a href="/research" class="btn-learn-more mr-2">Research</a>
                <a href="/account" class="btn-learn-more bg-secondary text-white">Buka Akun Sekarang</a>
              </div>
            </div>
            <div class="col-lg-6 col-12 text-right">
                <img src="{{asset('images/broker.png')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->
    
      <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
      <script>
        $(document).ready(function(){
          $('#product-button').click(function(){
            window.location.href = '/product'
          })
          $('#career-button').click(function(){
            window.location.href = '/career'
          })
        })
      </script>

@endsection