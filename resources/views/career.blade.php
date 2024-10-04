@extends('layouts.main')
@section('title', 'Karir')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Karir</h1>
                    <h6 data-aos="fade-up" data-aos-delay="400" style="line-height:2em">Investindo akan selalu membuka
                        kesempatan karir bagi anda yang kreatif dan inovatif.
                    </h6>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <a href="#careers" class="btn-learn-more scrollto">Lihat Lowongan Pekerjaan</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 text-right">
                    <img src="{{ asset('images/career1.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Career ======= -->
        <section class="careers">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Lowongan Pekerjaan</h2>
                </div>

                <div class="row">
                    @if ($jobs->count() == 0)
                        <div class="col-12 d-flex align-items-center text-center mb-5 mb-lg-0 flex-column">
                            <div class="image-wrapper d-flex justify-center text-center" data-aos="fade-up" data-aos-delay="400">
                                <img src="/empty.svg" class="object-fit-contain" style="width: 35rem; height: 40rem" >
                            </div>
                            <h5 class="text-center w-100" style="font-size: 2rem; font-weight:400" data-aos="fade-up" data-aos-delay="400">Ooops... Belum ada
                                lowongan baru niih...</h5>
                        </div>
                    @else
                        @foreach ($jobs as $job)
                            <div class="col-md-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box w-100" onclick="" data-aos="fade-up" data-aos-delay="100">
                                    <h4 class="title">{{ $job->name }}</h4>
                                    <p class="description">{{ $job->position }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>

            </div>
        </section><!-- End Services Section -->
        <span id="careers"></span>

    </main><!-- End #main -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script>
        $(document).ready(function() {
            $('#product-button').click(function() {
                window.location.href = '/product'
            })
            $('#career-button').click(function() {
                window.location.href = '/career'
            })
        })
    </script>

@endsection
