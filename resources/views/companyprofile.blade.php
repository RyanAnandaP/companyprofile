@extends('layouts.main')
@section('title', 'Profil Perusahaan')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Profil Perusahaan</h1>
                    {{-- <h3 data-aos="fade-up" data-aos-delay="400">Sejarah Singkat dan Visi & Misi Investindo</h3> --}}
                    <div data-aos="fade-up" data-aos-delay="400">
                        <a href="#history" class=" btn-learn-more scrollto mr-2 mb-2">Sejarah</a>
                        <a href="#visionmission" class=" btn-learn-more scrollto mr-2 mb-2">Visi & Misi</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 text-right">
                    <img src="{{ asset('images/companyprofile.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= History ======= -->
        <section id="" class="history">
            <div class="container">


                <div class="section-title" data-aos="fade-up">
                    <h2>Sejarah</h2>
                    <h5 style="line-height:2em" class="text-center w-100">Sejak 1989 Investindo Nusantara Sekuritas telah
                        berkembang sebagai perusahaan efek dan hingga kini terus menciptakan inovasi untuk menjadi yang
                        terbaik di Indonesia.</h5>
                </div>

                <div class="content">
                    <div class="col-12">
                        <h2 data-aos="fade-up"><strong>31 Tahun perkembangan Investindo</strong></h2>
                    </div>
                    <div style="margin-top: 8rem">
                        {{-- Timeline --}}

                        <section class="section-timeline container-xl" data-aos="fade-up">
                            <div class="container-fluid">
                                <div class="row">
                                    <div id="timeline">
                                        <div class="row timeline-movement timeline-movement-top">
                                            <div class="timeline-badge timeline-future-movement">
                                                <p>1989</p>
                                            </div>
                                        </div>
                                        <div class="row timeline-movement">
                                            <div class="timeline-badge center-left">

                                            </div>
                                            <div class="col-sm-6  timeline-item">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <div class="timeline-panel credits  anim animate fadeInLeft"
                                                            style="border-radius: 5px">
                                                            <ul class="timeline-panel-ul">
                                                                <div class="text-center">
                                                                    <li><a href="#" class="importo">Kelahiran
                                                                        </a></li>
                                                                    <li><span class="causale">PT. Anekareksa Securities
                                                                            Corporation, awal mula perjalanan dari 31 tahun
                                                                            Investindo. </span> </li>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row timeline-movement timeline-movement-top">
                                            <div class="timeline-badge timeline-future-movement">
                                                <p>1992</p>
                                            </div>
                                        </div>


                                        <div class="row timeline-movement">
                                            <div class="timeline-badge center-right">

                                            </div>
                                            <div class="offset-sm-6 col-sm-6  timeline-item">
                                                <div class="row">
                                                    <div class="offset-sm-1 col-sm-11">
                                                        <div class="timeline-panel debits  anim animate  fadeInRight"
                                                            style="border-radius: 5px">
                                                            <ul class="timeline-panel-ul">
                                                                <div class="text-center">
                                                                    <li><a href="#" class="importo">Sah!</a></li>
                                                                    <li><span class="causale">Mendapatkan izin sebagai
                                                                            Perantara Pedagang Efek. </span> </li>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row timeline-movement timeline-movement-top">
                                            <div class="timeline-badge timeline-future-movement">
                                                <p>1997</p>
                                            </div>
                                        </div>
                                        <div class="row timeline-movement">
                                            <div class="timeline-badge center-left">

                                            </div>
                                            <div class="col-sm-6  timeline-item">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <div class="timeline-panel credits  anim animate fadeInLeft"
                                                            style="border-radius: 5px">
                                                            <ul class="timeline-panel-ul">
                                                                <div class="text-center">
                                                                    <li><a href="#" class="importo">Perubahan
                                                                        </a></li>
                                                                    <li><span class="causale">PT. Anekareksa Securities
                                                                            Corporation berubah nama menjadi PT. Bira
                                                                            Sekuritas serta Memperluas Produk dan Layanan
                                                                            dengan mendapatkan izin sebagai Penjamin Emisi
                                                                            Efek</span> </li>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row timeline-movement timeline-movement-top">
                                            <div class="timeline-badge timeline-future-movement">
                                                <p>1999</p>
                                            </div>
                                        </div>

                                        <div class="row timeline-movement">
                                            <div class="timeline-badge center-right">

                                            </div>
                                            <div class="offset-sm-6 col-sm-6  timeline-item">
                                                <div class="row">
                                                    <div class="offset-sm-1 col-sm-11">
                                                        <div class="timeline-panel debits  anim animate  fadeInRight"
                                                            style="border-radius: 5px">
                                                            <ul class="timeline-panel-ul">
                                                                <div class="text-center">
                                                                    <li><a href="#" class="importo">Wajah Baru!</a>
                                                                    </li>
                                                                    <li><span class="causale">PT. Bira Sekuritas berubah
                                                                            nama menjadi PT. Investindo Nusantara Sekuritas.
                                                                        </span> </li>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row timeline-movement timeline-movement-top">
                                            <div class="timeline-badge timeline-future-movement">
                                                <p>2002</p>
                                            </div>
                                        </div>
                                        <div class="row timeline-movement">
                                            <div class="timeline-badge center-left">

                                            </div>
                                            <div class="col-sm-6  timeline-item">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <div class="timeline-panel credits  anim animate fadeInLeft"
                                                            style="border-radius: 5px">
                                                            <ul class="timeline-panel-ul">
                                                                <div class="text-center">
                                                                    <li><a href="#" class="importo">Jiwa Baru
                                                                        </a></li>
                                                                    <li><span class="causale">Dilakukan perubahan manajemen
                                                                            dengan standar investor oriented.</span> </li>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row timeline-movement timeline-movement-top">
                                            <div class="timeline-badge timeline-future-movement">
                                                <p>2010</p>
                                            </div>
                                        </div>

                                        <div class="row timeline-movement">
                                            <div class="timeline-badge center-right">

                                            </div>
                                            <div class="offset-sm-6 col-sm-6  timeline-item">
                                                <div class="row">
                                                    <div class="offset-sm-1 col-sm-11">
                                                        <div class="timeline-panel debits  anim animate  fadeInRight"
                                                            style="border-radius: 5px">
                                                            <ul class="timeline-panel-ul">
                                                                <div class="text-center">
                                                                    <li><a href="#" class="importo">Digitalisasi</a>
                                                                    </li>
                                                                    <li><span class="causale"
                                                                            style="font-size: 1rem; white-space:wrap">Investindo
                                                                            Nusantara
                                                                            Sekuritas mengeluarkan produk layanan Investindo
                                                                            Online Trading (INVITE)</span>
                                                                    </li>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row timeline-movement timeline-movement-top">
                                            <div class="timeline-badge timeline-future-movement">
                                                <p>2020</p>
                                            </div>
                                        </div>
                                        <div class="row timeline-movement">
                                            <div class="timeline-badge center-left">

                                            </div>
                                            <div class="col-sm-6  timeline-item">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <div class="timeline-panel credits  anim animate fadeInLeft"
                                                            style="border-radius: 5px">
                                                            <ul class="timeline-panel-ul">
                                                                <div class="text-center">
                                                                    <li><a href="#" class="importo">Hari Ini
                                                                        </a></li>
                                                                    <li><span class="causale">Dengan pengalaman 31 tahun,
                                                                            kami akan terus bertekad untuk berinovasi dalam
                                                                            membangun industri pasar modal.</span> </li>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- End of Timeline --}}
                    </div>
                </div>
            </div>
        </section><!-- End History Section -->


        <!-- ======= Vision & Mission ======= -->
        <section id="" class="visionmission">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel vert slide" data-ride="carousel" data-aos="fade-up">
                    <div class="row">
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <div class="carousel-indicators mt-0 pt-0">
                                <p data-target="#carouselExampleIndicators" class="mb-3 p-0 text-center active bg-transparent" style="font-size: 20px; font-weight: 600" data-slide-to="0">Visi</p>
                                <p data-target="#carouselExampleIndicators" class="m-0 p-0 text-center bg-transparent" style="font-size: 20px; font-weight: 600" data-slide-to="1">Misi</p>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex row" style="height: 15em !important;">
                                        <div class="col-12 col-lg-4">
                                            <img src="{{ asset('images/vision.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-8 col-12">
                                            <h6 class="text-left d-block"
                                                style="font-size:1.2em;font-family:'Raleway', sans-serif; line-height:1.5em;">
                                                Menjadi Perusahaan Efek yang handal dan terpercaya di bidang pasar modal dan
                                                keuangan.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex row" style="min-height: 15em !important;">
                                        <div class="col-lg-4 col-12">
                                            <img src="{{ asset('images/mission.png') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="col-lg-8 col-12">
                                            <h6 class="text-left d-block" style="line-height:2em">
                                                <ol
                                                    style="font-size:1.2em;font-family:'Raleway', sans-serif; list-style-type:upper-roman;">
                                                    <li>Membangun kepercayaan nasabah melalui pelayanan keuangan yang
                                                        menyeluruh dan komprehensif.</li>
                                                    <li>Menyediakan teknologi yang aman dan terpercaya.</li>
                                                    <li>Meningkatkan kualitas sumber daya manusia secara konsisten dan terus
                                                        menerus.</li>
                                                </ol>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span id="visionmission"></span>
            </div>
        </section>
        <!-- End Vision & Mission Section -->



    </main><!-- End #main -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="{{ asset('js/timeline.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#product-button').click(function() {
                window.location.href = '/product'
            })
            $('#career-button').click(function() {
                window.location.href = '/career'
            })
        })

        /**********************Scroll Animation "START"************************************/
        $(document).ready(function() {
            let $animation_elements = $('.anim');
            let $window = $(window);

            function check_if_in_view() {
                let window_height = $window.height();
                let window_top_position = $window.scrollTop();
                let window_bottom_position = (window_top_position + window_height);

                $.each($animation_elements, function() {
                    let $element = $(this);
                    let element_height = $element.outerHeight();
                    let element_top_position = $element.offset().top;
                    let element_bottom_position = (element_top_position + element_height);

                    //check to see if this current container is within viewport
                    if ((element_bottom_position >= window_top_position) &&
                        (element_top_position <= window_bottom_position)) {
                        $element.addClass('animated');
                    } else {
                        $element.removeClass('animated');
                    }
                });
            }

            $window.on('scroll resize', check_if_in_view);
            $window.trigger('scroll');
        });
        /**********************Scroll Animation "END"************************************/

        /**********************Change color of center aligned animated content small Circle  "START"************************************/
        $(document).ready(function() {
            $(" .debits").hover(function() {
                $(" .center-right").css("background-color", "#002a67");
                $
            }, function() {
                $(" .center-right").css("background-color", "#fff");
            });
        });
        $(document).ready(function() {
            $(".credits").hover(function() {
                $(".center-left").css("background-color", "#002a67");
            }, function() {
                $(".center-left").css("background-color", "#fff");
            });
        });
        /**********************Change color of center aligned animated content small Circle  "END"************************************/
    </script>

@endsection
