@extends('layouts.main')
@section('title','Research')
@section('content')

    <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" >

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">{{__('Research')}}</h1>
          <h6 data-aos="fade-up" data-aos-delay="400" style="line-height:2em">
            Divisi Research Investindo menyediakan laporan analisa saham dan pasar sebagai pelengkap informasi untuk membantu investor dalam membuat keputusan investasi. Laporan yang kami sediakan merupakan hasil dari analisa mendalam, yang disertai dengan rating dan nilai wajar dari saham tersebut.
          </h6>
          <div data-aos="fade-up" data-aos-delay="400">
            <a href="#summary" class="btn-learn-more scrollto">{{__('Lihat Research')}}</a>
          </div>
        </div>
        <div class="col-lg-6 col-12 text-right">
            <img src="{{asset('images/research1.png')}}" alt="" class="img-fluid">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Research ======= -->
    <section class="history">
      <div class="container">


        <div class="section-title" data-aos="fade-up">
            <h2>Ini testing</h2>
        </div>

        <div id="carouselExampleIndicators" class="carousel vert slide" data-ride="carousel" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-3 col-6 d-flex align-items-center justify-content-center">
              <div class="carousel-indicators mt-0 pt-0">
                <p data-target="#carouselExampleIndicators" class="mb-4 p-1 text-center active" style = "font-size: 16px; font-weight: 600; background: transparent" data-slide-to="0">Trend</p>
                <p data-target="#carouselExampleIndicators" class="mb-4 p-1 text-center" style = "font-size: 16px; font-weight: 600; background: transparent" data-slide-to="1">Technical Review</p>
                <p data-target="#carouselExampleIndicators" class="mb-4 p-1 text-center" style = "font-size: 16px; font-weight: 600; background: transparent" data-slide-to="2">Recommendation</p>
                <p data-target="#carouselExampleIndicators" class="mb-4 p-1 text-center" style = "font-size: 16px; font-weight: 600; background: transparent" data-slide-to="3">Strategy</p>
                <p data-target="#carouselExampleIndicators" class="p-1 text-center" style = "font-size: 16px; font-weight: 600; background: transparent" data-slide-to="4">Corporate Action</li>
              </div>
            </div>
            <div class="col-lg-9 col-6">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-flex align-items-center" style="min-height: 20em !important;">
                    <p class="text-left d-block" style="font-size: 1.5em; font-family:'Raleway', sans-serif; font-weight:600;">
                      Kami menyediakan analisa trend secara short term, medium term, dan long term.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex align-items-center" style="min-height: 20em !important;">
                    <p class="text-left d-block" style="font-size: 1.5em; font-family:'Raleway', sans-serif; font-weight:600;">
                      {{-- <span style="font-size: 4em; font-family:'Raleway', sans-serif; font-weight:700;">Mudah & Nyaman</span> <br> --}}
                      Kami menyediakan analisa teknikal yang dapat membantu investor mengambil keputusan.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex align-items-center" style="min-height: 20em !important;">
                    <p class="text-left d-block" style="font-size: 1.5em; font-family:'Raleway', sans-serif; font-weight:600;">
                      {{-- <span style="font-size: 4em; font-family:'Raleway', sans-serif; font-weight:700;">Fee Kompetitif</span> <br> --}}
                      Kami merekomendasikan range buy dan target untuk menjadi bahan pertimbangan.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex align-items-center" style="min-height: 20em !important;">
                    <p class="text-left d-block" style="font-size: 1.5em; font-family:'Raleway', sans-serif; font-weight:600;">
                      {{-- <span style="font-size: 4em; font-family:'Raleway', sans-serif; font-weight:700;">Aman dan Terpercaya</span> <br> --}}
                      Kami membantu anda untuk menyusun strategi dalam berinvestasi saham tersebut.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex align-items-center" style="min-height: 20em !important;">
                    <p class="text-left d-block" style="font-size: 1.5em; font-family:'Raleway', sans-serif; font-weight:600;">
                      {{-- <span style="font-size: 4em; font-family:'Raleway', sans-serif; font-weight:700;">Aman dan Terpercaya</span> <br> --}}
                      Membantu anda untuk memonitor setiap kejadian material terkait aksi-aksi korporasi seperti deviden, stock split, dan rights issue.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <span id="research"></span>

      </div>
    </section><!-- End Research Section -->


    <!-- ======= Summary ======= -->
    <section class="history">
      <div class="container">


        <div class="section-title" data-aos="fade-up">
            <h2>Summary</h2>
        </div>

        <ul class="nav nav-pills nav-justified" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" id="daily-tab" data-toggle="tab" href="#daily" role="tab" aria-controls="daily" aria-selected="true">Daily Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly Report</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly Report</a>
          </li>
        </ul>
        <div class="tab-content" id="corporate-tabs">
          <span id="summary"></span>
          {{-- === Daily Report === --}}
          <div class="tab-pane fade show active" id="daily" role="tabpanel" aria-labelledby="daily-tab">
            <div class="container">
              <div class="row content">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                  @foreach($dailies as $summary)
                    {{-- Report Card --}}
                    <div class="card w-100 mt-4 p-4" style="background-color: #eee;border-radius:2em; border:0px; box-shadow:  5px 5px 10px #cacaca,  -5px -5px 10px #ffffff;">
                      <div class="card-title text-left">
                        <h6 style="font-size: 1.8em; font-family:'Raleway', sans-serif; font-weight:500;">
                          <div class="row">
                            <div class="col-lg-6 col-12 d-flex align-items-center h-100">
                              <h3><strong>Daily Report - {{date('d M Y',strtotime($summary->created_at))}}</strong></h3>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block text-right">
                              <a href="/public_admin_web/reports/{{$summary->file_name}}" class="btn-learn-more scrollto">{{__('Download Report')}}</a>
                            </div>
                            <div class="col-12 d-block d-lg-none">
                              <a href="/public_admin_web/reports/{{$summary->file_name}}" class="btn-learn-more scrollto">{{__('Download Report')}}</a>
                            </div>
                          </div>

                        </h6>
                      </div>
                      <div class="card-body text-left pb-2 pl-0 pr-0 pt-0">
                        <hr>
                        <p id="preview-{{$summary->id}}" class="d-block" >
                          {{\Illuminate\Support\Str::limit(strip_tags(Illuminate\Mail\Markdown::parse($summary->description)),110,'...')}}
                          <a onclick="readmore({{$summary->id}})" class="text-primary" id="read-btn-{{$summary->id}}">Read More</a>
                        </p>
                        <div id="show-all-{{$summary->id}}" class="d-none" >
                          {{Illuminate\Mail\Markdown::parse($summary->description) }}
                          <a onclick="hide({{$summary->id}})" class="text-primary" id="hide-btn-{{$summary->id}}">Hide</a>
                        </div>
                        <strong>disclaimer on</strong>
                      </div>
                    </div>
                    {{-- End of Report Card --}}
                  @endforeach

                </div>
              </div>
            </div>
          </div>
          {{-- === End of Daily Report === --}}

          {{-- === Weekly Report === --}}
          <div class="tab-pane fade show" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
            <div class="container">
              <div class="row content">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">

                  @foreach($weeklies as $summary)
                    {{-- Report Card --}}
                    <div class="card w-100 mt-4 p-4" >
                      <div class="card-title text-left">
                        <h6 style="font-size: 1.8em; font-weight:500;">
                          <div class="row">
                            <div class="col-lg-6 col-12 d-flex align-items-center h-100">
                              <h3><strong>Weekly Report - {{date('d M Y',strtotime($summary->created_at))}}</strong></h3>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block text-right">
                              <a href="/public_admin_web/reports/{{$summary->file_name}}" class="btn-learn-more scrollto">{{__('Download Report')}}</a>
                            </div>
                            <div class="col-12 d-block d-lg-none">
                              <a href="/public_admin_web/reports/{{$summary->file_name}}" class="btn-learn-more scrollto">{{__('Download Report')}}</a>
                            </div>
                          </div>

                        </h6>
                      </div>
                      <div class="card-body text-left pb-2 pl-0 pr-0 pt-0">
                        <hr>
                        <p id="preview-{{$summary->id}}" class="d-block" >
                          {{\Illuminate\Support\Str::limit(strip_tags(Illuminate\Mail\Markdown::parse($summary->description)),110,'...')}}
                          <a onclick="readmore({{$summary->id}})" class="text-primary" id="read-btn-{{$summary->id}}">Read More</a>
                        </p>
                        <div id="show-all-{{$summary->id}}" class="d-none" >
                          {{Illuminate\Mail\Markdown::parse($summary->description) }}
                          <a onclick="hide({{$summary->id}})" class="text-primary" id="hide-btn-{{$summary->id}}">Hide</a>
                        </div>
                        <strong>disclaimer on</strong>
                      </div>
                    </div>
                    {{-- End of Report Card --}}
                  @endforeach

                </div>
              </div>
            </div>
          </div>
          {{-- === End of Weekly Report === --}}


          {{-- === Monthly Report === --}}
          <div class="tab-pane fade show" id="monthly" role="tabpanel" aria-labelledby="weekly-tab">
            <div class="container">
              <div class="row content">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">

                  @foreach($monthlies as $summary)
                    {{-- Report Card --}}
                    <div class="card w-100 mt-4 p-4" >
                      <div class="card-title text-left">
                        <h6 style="font-size: 1.8em; font-weight:500;">
                          <div class="row">
                            <div class="col-lg-6 col-12 d-flex align-items-center h-100">
                              <h3><strong>Monthly Report - {{date('d M Y',strtotime($summary->created_at))}}</strong></h3>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block text-right">
                              <a href="/public_admin_web/reports/{{$summary->file_name}}" class="btn-learn-more scrollto">{{__('Download Report')}}</a>
                            </div>
                            <div class="col-12 d-block d-lg-none">
                              <a href="/public_admin_web/reports/{{$summary->file_name}}" class="btn-learn-more scrollto">{{__('Download Report')}}</a>
                            </div>
                          </div>

                        </h6>
                      </div>
                      <div class="card-body text-left pb-2 pl-0 pr-0 pt-0">
                        <hr>
                        <p id="preview-{{$summary->id}}" class="d-block" >
                          {{\Illuminate\Support\Str::limit(strip_tags(Illuminate\Mail\Markdown::parse($summary->description)),110,'...')}}
                          <a onclick="readmore({{$summary->id}})" class="text-primary" id="read-btn-{{$summary->id}}">Read More</a>
                        </p>
                        <div id="show-all-{{$summary->id}}" class="d-none" >
                          {{Illuminate\Mail\Markdown::parse($summary->description) }}
                          <a onclick="hide({{$summary->id}})" class="text-primary" id="hide-btn-{{$summary->id}}">Hide</a>
                        </div>
                        <strong>disclaimer on</strong>
                      </div>
                    </div>
                    {{-- End of Report Card --}}
                  @endforeach

                </div>
              </div>
            </div>
          </div>
          {{-- === End of Monthly Report === --}}

          <!--{{-- === Monthly Report === --}}-->
          <!--<div class="tab-pane fade show" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">-->
          <!--  <div class="container">-->
          <!--    <div class="row content">-->
          <!--      <div class="col-12" data-aos="fade-up" data-aos-delay="200">-->

          <!--        @foreach($summaries as $summary)-->
          <!--          @if($summary->type == 'monthly')-->
          <!--          {{-- Report Card --}}-->
          <!--          <div class="card w-100 mt-4 p-4" style="background-color: #eee;border-radius:2em; border:0px; box-shadow:  5px 5px 10px #cacaca,  -5px -5px 10px #ffffff;">-->
          <!--            <div class="card-title text-left">-->
          <!--              <h6 style="font-size: 1.8em; font-family:'Raleway', sans-serif; font-weight:500;">-->
          <!--                <div class="row">-->
          <!--                  <div class="col-lg-6 col-12 d-flex align-items-center h-100">-->
          <!--                    <h3><strong>Montly Report - {{date('M Y',strtotime($summary->created_at))}}</strong></h3>-->
          <!--                  </div>-->
          <!--                  <div class="col-lg-6 d-none d-lg-block text-right">-->
          <!--                    <a href="/downloads/{{$summary->file_name}}" class="btn-learn-more scrollto">{{__('Download Report')}}</a>-->
          <!--                  </div>-->
          <!--                  <div class="col-12 d-block d-lg-none">-->
          <!--                    <a href="/downloads/{{$summary->file_name}}" class="btn-learn-more scrollto">{{__('Download Report')}}</a>-->
          <!--                  </div>-->
          <!--                </div>-->

          <!--              </h6>-->
          <!--            </div>-->
          <!--            <div class="card-body text-left pb-2 pl-0 pr-0 pt-0">-->
          <!--              <hr>-->
          <!--              <p id="preview-{{$summary->id}}" class="d-block" >-->
          <!--                {{\Illuminate\Support\Str::limit(strip_tags(Illuminate\Mail\Markdown::parse($summary->description)),110,'...')}}-->
          <!--                <a onclick="readmore({{$summary->id}})" class="text-primary" id="read-btn-{{$summary->id}}">Read More</a>-->
          <!--              </p>-->
          <!--              <div id="show-all-{{$summary->id}}" class="d-none" >-->
          <!--                {{Illuminate\Mail\Markdown::parse($summary->description) }}-->
          <!--                <a onclick="hide({{$summary->id}})" class="text-primary" id="hide-btn-{{$summary->id}}">Hide</a>-->
          <!--              </div>-->
          <!--              <strong>disclaimer on</strong>-->
          <!--            </div>-->
          <!--          </div>-->
          <!--          {{-- End of Report Card --}}-->
          <!--          @endif-->
          <!--        @endforeach-->

                </div>
              </div>
            </div>
          </div>
          {{-- === End of Monthly Report === --}}


        </div>




      </div>
    </section>
    <!-- End Summary Section -->



  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <script src="{{asset('js/jquery.tabulation.es6.js')}}"></script>
  <script>
    function readmore(id){
      $('#show-all-'+id).addClass('d-block')
      $('#show-all-'+id).removeClass('d-none')
      $('#preview-'+id).addClass('d-none')
      $('#preview-'+id).removeClass('d-block')
    }
    function hide(id){
      $('#show-all-'+id).addClass('d-none')
      $('#show-all-'+id).removeClass('d-block')
      $('#preview-'+id).addClass('d-block')
      $('#preview-'+id).removeClass('d-none')
    }
    $(document).ready(function(){
      $('#product-button').click(function(){
        window.location.href = '/product'
      })
      $('#career-button').click(function(){
        window.location.href = '/career'
      })
    })
  </script>

	<script>
		$('.js-tabulation').tabulation();

		$('[data-tabulation-id="second"]').tabulation({
			default: '2',
			nav: 'navigationActive',
			tab: 'tabulationActive',
			beforeSet: function(index) {
				return index !== '3';
			},
			afterSet: function(index) {
				console.log(`now active index is "${index}"`);
			}
		});
	</script>

@endsection
