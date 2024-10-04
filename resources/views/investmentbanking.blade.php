@extends('layouts.main')
@section('title','Investment Banking')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" >

        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <h1 data-aos="fade-up">Investment Banking</h1>
              <p data-aos="fade-up" data-aos-delay="400" style="line-height:2em">
                Dengan pengalaman lebih dari 20 tahun dalam menangani transaksi di Pasar Modal, 
                Divisi Investment Banking Investindo menyediakan jasa keuangan terbaik seperti penjaminan emisi saham (Underwriting) 
                dan jasa penasihat keuangan (Financial Advisory).
              </p>
              
              <div data-aos="fade-up" data-aos-delay="400">
                <a href="#underwriting" class="btn-learn-more scrollto">Underwriting</a>
                <a href="#financialadvisory" class="btn-learn-more ml-2 scrollto">Financial Advisory</a>
              </div>
            </div>
            <div class="col-lg-6 col-12 text-right mt-5 pt-5 pt-lg-0 mt-lg-0">
                <img src="{{asset('images/investmentbanking.png')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->
    
      <main id="main">

        <!-- ======= Underwriting ======= -->
        <section id="" class="services">
          <div class="container">

            <div class="section-title" data-aos="fade-up">
              <h2>Underwriting</h2>
              <h5 class="text-center w-100">Sebagai underwriter, Investindo mengkoordinasi proses penerbitan dan membantu nasabah untuk:</h5>
            </div>

            <div class="row">

              <div class="col-lg-3 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                {{-- <div class="icon-box w-100 bg-success card-box-1" data-aos="fade-up" data-aos-delay="100"> --}}
                <div class="icon-box w-100 card-box-1" data-aos="fade-up" data-aos-delay="100" style="background-color:#b8de6f">
                  <div class="card-icon-1 h-100">
                    <div class="d-flex align-items-center justify-content-center"><img src="{{asset('images/report.png')}}" alt="report" class="w-50"></div>
                  </div>
                  <div class="card-description-1 h-100 align-items-center">
                    <p class="description text-white text-center">
                      Mempersiapkan prospektus, ringkasan, dan dokumen lainnya .
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                <div class="icon-box w-100 bg-warning card-box-2" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="icon-box w-100 card-box-2" data-aos="fade-up" data-aos-delay="100" style="background-color:#f39233"> --}}
                  <div class="card-icon-2 h-100">
                    <div class="d-flex align-items-center justify-content-center"><img src="{{asset('images/transaction.png')}}" alt="transaction" class="w-50"></div>
                  </div>
                  <div class="card-description-2 h-100 align-items-center">
                    <p class="description text-white text-center">
                      Mempersiapkan struktur transaksi .
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                {{-- <div class="icon-box w-100 bg-danger card-box-3" data-aos="fade-up" data-aos-delay="100"> --}}
                <div class="icon-box w-100 card-box-3" data-aos="fade-up" data-aos-delay="100" style="background-color: #f1e189">
                  <div class="card-icon-3 h-100">
                    <div class="d-flex align-items-center justify-content-center"><img src="{{asset('images/research.png')}}" alt="research" class="w-50"></div>
                  </div>
                  <div class="card-description-3 h-100 align-items-center">
                    <p class="description text-white text-center">
                      Melakukan analisa mendalam  kondisi pasar untuk menyusun strategi pemasaran &amp; penjualan yang maksimal.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                {{-- <div class="icon-box w-100 bg-info card-box-4" data-aos="fade-up" data-aos-delay="100"> --}}
                <div class="icon-box w-100 card-box-4" data-aos="fade-up" data-aos-delay="100" style="background-color:#01c5c4">
                  <div class="card-icon-4 h-100">
                    <div class="d-flex align-items-center justify-content-center"><img src="{{asset('images/enterprise.png')}}" alt="enterprise" class="w-50"></div>
                  </div>
                  <div class="card-description-4 h-100 align-items-center">
                    <p class="description text-white text-center">
                      Membangun citra perusahaan selama penerbitan
                    </p>
                  </div>
                </div>
              </div>


            </div>

          </div>
          <span id="underwriting"></span>
          <div class="row mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12 text-center">
              <span style="border: none" class="btn-learn-more" id="view-ipo">View IPOs</span>
            </div>
          </div>
        </section><!-- End Underwriting -->

        <!-- ======= I[PO] ======= -->
        <section id="services" class="services">
          <div class="container">
  
          <div class="section-title" data-aos="fade-up">
              <h2>Initial Public Offering (IPO)</h2>
          </div>
  
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5 class="text-center w-100">Lead Underwriting</h5>
            </div>
            @foreach($projects as $project)
            <div class="col-md-3 col-6 d-flex align-items-stretch mt-4 mb-lg-0" data-toggle="modal" data-target="#{{$project->code}}">
              <div class="icon-box w-100"onclick="" data-aos="fade-up" data-aos-delay="100" style="background-image: url('{{asset('/public_admin_web/images/'.$project->logo)}}'); 
                background-position:right bottom;
                background-repeat:no-repeat;
                background-size: 30% 30%;">
                
                <h5 class="title">{{$project->name}}</h5>
                <p class="description">
                  {{$project->year}} <br>
                  {{number_format($project->shares)}} shares
                </p>
              </div>
            </div>

            {{-- IPO Modal --}}
            @if($project->description != 'lorem ipsum')
            <div class="modal fade" id="{{$project->code}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content rounded-lg">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{$project->name}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-3">
                                      <img src="{{asset('/public_admin_web/images/'.$project->logo)}}" alt="" style="max-width:100%">
                                  </div>
                                  <div class="col-md-9 text-justify">
                                      {{$project->description}}
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            @endif
            {{-- End of IPO Modal --}}
            @endforeach

            {{-- Joint Underwriting --}}
            <div class="col-12 mt-5" data-aos="fade-up">
              <h5 class="text-center w-100">Joint Underwriting</h5>
            </div>
            @foreach($join as $project)
            <div class="col-md-3 col-6 d-flex align-items-stretch mt-4 mb-lg-0" data-toggle="modal" data-target="#{{$project->code}}">
              <div class="icon-box w-100"onclick="" data-aos="fade-up" data-aos-delay="100" style="background-image: url('{{asset('/public_admin_web/images/'.$project->logo)}}'); 
                background-position:right bottom;
                background-repeat:no-repeat;
                background-size: 30% 30%;">
                
                <h5 class="title">{{$project->name}}</h5>
                <p class="description">
                  {{$project->year}} <br>
                  {{number_format($project->shares)}} shares
                </p>
              </div>
            </div>

            {{-- IPO Modal --}}
            @if($project->description != 'lorem ipsum')
            <div class="modal fade" id="{{$project->code}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content rounded-lg">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{$project->name}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-3">
                                      <img src="{{asset('/public_admin_web/images/'.$project->logo)}}" alt="" style="max-width:100%">
                                  </div>
                                  <div class="col-md-9 text-justify">
                                      {{$project->description}}
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            @endif
            {{-- End of IPO Modal --}}
            @endforeach
            {{-- End of Underwriting --}}
            
  
  
          </div>
  
          </div>
      </section><!-- End Services Section -->

        <!-- ======= Financial Advisory ======= -->
        <section id="" class="services">
          <div class="container">

            <div class="section-title" data-aos="fade-up">
              <h2>Financial Advisory</h2>
              <h5 class="text-center w-100">Investindo juga memberikan jasa layanan penasihat keuangan yang terdiri dari:</h5>
            </div>

            <div class="row">

              <div class="col-lg-4 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100" id="merger">
                  <div class="row">
                    <div class="col-2">
                      <div class="icon d-flex align-items-center justify-content-center" id="merger-icon"><img src="{{asset('images/merge.png')}}" alt="merge" class="w-100"></div>
                    </div>
                    <div class="col d-flex align-items-center">
                      <h4 class="title d-inline ml-2 ml-lg-4">Merger & Acquisition</h4>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100" id="privatization">
                  <div class="row">
                    <div class="col-2">
                      <div class="icon d-flex align-items-center justify-content-center" id="privatization-icon"><img src="{{asset('images/privatization.png')}}" alt="privatization" class="w-100"></div>
                    </div>
                    <div class="col d-flex align-items-center">
                      <h4 class="title d-inline ml-2 ml-lg-4">Privatization & Divestment</h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100" id="pre-ipo">
                  <div class="row">
                    <div class="col-2">
                      <div class="icon d-flex align-items-center justify-content-center" id="pre-ipo-icon"><img src="{{asset('images/advisory.png')}}" alt="advisory" class="w-75"></div>
                    </div>
                    <div class="col d-flex align-items-center">
                      <h4 class="title d-inline ml-2 ml-lg-4">Pre-IPO Financing  &amp; Advisory</h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100" id="restructure">
                  <div class="row">
                    <div class="col-2">
                      <div class="icon d-flex align-items-center justify-content-center" id="restructure-icon"><img src="{{asset('images/financialrestructure.png')}}" alt="financialrestructure" class="w-100"></div>
                    </div>
                    <div class="col d-flex align-items-center">
                      <h4 class="title d-inline ml-2 ml-lg-4">Financial Restructuring</h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100" id="rights-issue">
                  <div class="row">
                    <div class="col-2">
                      <div class="icon d-flex align-items-center justify-content-center" id="rights-issue-icon"><img src="{{asset('images/rightissue.png')}}" alt="rightissue" class="w-100"></div>
                    </div>
                    <div class="col d-flex align-items-center">
                      <h4 class="title d-inline ml-2 ml-lg-4">Rights Issue</h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-12 d-flex align-items-stretch mb-2 mb-lg-0 mt-4">
                <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100" id="valuation">
                  <div class="row">
                    <div class="col-2">
                      <div class="icon d-flex align-items-center justify-content-center" id="valuation-icon"><img src="{{asset('images/businessvaluation.png')}}" alt="businessvaluation" class="w-100"></div>
                    </div>
                    <div class="col d-flex align-items-center">
                      <h5 class="title d-inline ml-2 ml-lg-4">Business Valuation</h5>
                    </div>
                  </div>
                </div>
              </div>
              
              <span id="financialadvisory" class="pt-5 mt-5"></span>
            </div>

          </div>
        </section><!-- End Financial Advisory -->

        


        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h4>Hubungi Divisi Investment Banking Kami</h4>
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
                <p><a href="mailto:in@in-sekuritas.com" style = "text-decoration: none; color: black">in@in-sekuritas.com</a></p>
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
    
      <script src="{{asset('js/ib.js')}}"></script>

@endsection