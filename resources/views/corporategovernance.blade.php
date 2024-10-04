@extends('layouts.main')
@section('title', 'Tata Kelola Perusahaan')
@section('content')

    <!-- ======= Hero Section ======= -->
    <!-- <section id="hero" class="d-flex align-items-center pb-5" >

            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                  <h1 data-aos="fade-up">{{ __('Tata Kelola Perusahaan') }}</h1>
                </div>
                <div class="col-lg-6 col-12 text-right mt-5 pt-5 pt-lg-0 mt-lg-0">
                    <img src="{{ asset('images/corporategovernance.png') }}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </section> -->
    <!-- End Hero -->

    <main id="main" class="h-100">
        <section class="corporate" style="height: fit-content">
            <div class="container mt-5 pt-5">
                <ul class="nav nav-pills nav-justified" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="true">Manajemen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="structure-tab" data-toggle="tab" href="#structure" role="tab"
                            aria-controls="structure" aria-selected="false">Struktur Organisasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="legal-tab" data-toggle="tab" href="#legal" role="tab"
                            aria-controls="legal" aria-selected="false">Nomor Izin Usaha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="report-tab" data-toggle="tab" href="#report" role="tab"
                            aria-controls="report" aria-selected="false">Laporan Keuangan</a>
                    </li>
                </ul>

                <div class="tab-content" id="corporate-tabs">
                    {{-- ===Organization Structre=== --}}
                    <div class="tab-pane fade" id="structure" role="tabpanel" aria-labelledby="structure-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-10 offset-1 d-flex justify-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ asset('images/strucktur-organisasi-new.png') }}" alt="" class="w-100 img-fluid h-auto" style="margin-top: 3rem">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of Organization Structure --}}

                    {{-- === Directors' Profile === --}}
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        <!-- ======= Directors ======= -->
                        <section id="directors" class="directors">
                            <div class="container">

                                <div class="row" data-aos="fade-up">
                                    <div class="col-md-4 d-flex align-items-stretch justify-content-center mb-5" data-toggle="modal" data-target="#gani">
                                        <div class="icon-box text-center w-100 hover" onclick="" data-aos="fade-up" data-aos-delay="300">
                                          <img src="{{asset('images/Profile_pG.jpg')}}" alt="" class="circle" style="border-radius:50%; object-fit:cover">
                                          <h4 class="description mt-3"><strong>Darsuki Gani</strong></h4>
                                          <p class="description">Komisaris Utama</p>
                                        </div>
                                      </div>

                                    <div class="col-md-4 d-flex align-items-stretch justify-content-center mb-5"
                                        data-toggle="modal" data-target="#yosep">
                                        <div class="icon-box text-center w-100 hover" onclick="" data-aos="fade-up"
                                            data-aos-delay="400">
                                            <img src="{{ asset('images/Profile_pY.jpg') }}" alt="" class="circle"
                                                style="border-radius:50%; object-fit:cover">
                                            <h4 class="description mt-3"><strong>Joseph Pulo</strong></h4>
                                            <p class="description">Komisaris Independen</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch justify-content-center mb-5"
                                        data-toggle="modal" data-target="#jeffry">
                                        <div class="icon-box text-center w-100 hover" onclick="" data-aos="fade-up"
                                            data-aos-delay="400">
                                            <img src="{{ asset('images/Full_pJ.jpg') }}" alt="" class="circle"
                                                style="border-radius:50%; object-fit:cover">
                                            <h4 class="description mt-3"><strong>Jeffry Jutan</strong></h4>
                                            <p class="description">Komisaris</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch justify-content-center mb-5"
                                        data-toggle="modal" data-target="#jenny">
                                        <div class="icon-box text-center w-100 hover" onclick="" data-aos="fade-up"
                                            data-aos-delay="200">
                                            <img src="{{ asset('images/Profile_bJ.jpg') }}" alt="" class="circle"
                                                style="border-radius:50%; object-fit:cover">
                                            <h4 class="description mt-3"><strong>Jenny Kang</strong></h4>
                                            <p class="description">Direktur Utama</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch justify-content-center mb-5"
                                        data-aos="fade-up" data-toggle="modal" data-target="#yenni">
                                        <div class="icon-box text-center w-100 hover" onclick="" data-aos="fade-up"
                                            data-aos-delay="100">
                                            <img src="{{ asset('images/Profile_bY.jpg') }}" alt="" class="circle"
                                                style="border-radius:50%; object-fit:cover">
                                            <h4 class="description mt-3"><strong>Yenni</strong></h4>
                                            <p class="description">Direktur</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch justify-content-center mb-5"
                                        data-aos="fade-up" data-toggle="modal" data-target="#iwan">
                                        <div class="icon-box text-center w-100 hover" onclick="" data-aos="fade-up"
                                            data-aos-delay="100">
                                            <img src="{{ asset('images/Profile_pI.jpg') }}" alt="" class="circle"
                                                style="border-radius:50%; object-fit:cover">
                                            <h4 class="description mt-3"><strong>Iwan Hartono</strong></h4>
                                            <p class="description">Direktur</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </section><!-- End Services Section -->


                    </div>
                    {{-- End of Directors' Profile --}}

                    {{-- === Legal Numbers === --}}
                    <div class="tab-pane fade" id="legal" role="tabpanel" aria-labelledby="legal-tab">
                        <div class="row mt-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-12">
                                <h6 class="text-justify">
                                    Izin Usaha Perantara Pedagang Efek berdasarkan Surat Keputusan Ketua Badan Pengawas
                                    Pasar Modal (Bapepam dan LK) d/h Otoritas Jasa Keuangan <text class="text-primary">No.
                                        Kep-207/PM/1992 tanggal 14 April 1992.</text><br>
                                    <br>
                                    Izin Usaha Penjamin Emisi Efek berdasarkan Surat Keputusan Ketua Badan Pengawas Pasar
                                    Modal (Bapepam dan LK) d/h Otoritas Jasa Keuangan <text class="text-primary">No.
                                        Kep-04/PM/PEE/1997 tanggal 11 Juni 1997</text>.
                                </h6>
                            </div>
                        </div>
                    </div>
                    {{-- End of Legal Numbers --}}


                    {{-- === Financial Report === --}}
                    <div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report-tab">
                        <div class="row mt-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-6 text-right">
                                <h5>2018</h5>
                            </div>
                            <div class="col-6 text-left">
                                <a href="/download/2018/financial-report">
                                    Download
                                </a>
                            </div>
                            <div class="col-6 text-right mt-4">
                                <h5>2019</h5>
                            </div>
                            <div class="col-6 text-left mt-4">
                                <a href="/download/2019/financial-report">
                                    Download
                                </a>
                            </div>
                            <div class="col-6 text-right mt-4">
                                <h5>2020</h5>
                            </div>
                            <div class="col-6 text-left mt-4">
                                <a href="/download/2020/financial-report">
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- End of Financial Report --}}

                </div>



            </div>
            </div>
        </section>


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

    <!-- modals -->
    <!-- modals -->
    {{-- Modals --}}
    <div class="modal fade" id="gani" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content rounded-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Darsuki Gani</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/Full_pG.jpg') }}" alt="" style="max-width:100%">
                            </div>
                            <div class="col-md-9 text-justify">
                                <p>Masuk menjadi Manajer di PT Bank Pensiunan Militer Medan pada tahun 1966 menjadi
                                    permulaan karir beliau. Dengan jabatan yang sama beliau masuk ke perusahaan PT Bank
                                    Bukit Barisan Medan pada tahun tahun 1967. Karir ini berlanjut hingga tahun 1975 dimana
                                    beliau masuk ke perusahaan PT Bukit Indah Perdagangan Valuta menjabat sebagai Direktur
                                    dan masuk ke PT Bank Tani Nasional (pada Tahun 1991 berganti nama menjadi PT Bank
                                    Ekspres) tahun 1978 menjabat sebagai wakil direktur utama sebelum masuk ke PT Investindo
                                    Nusantara Sekuritas tahun 2002. Setelah masuk ke PT Investindo Nusantara Sekuritas
                                    beliau menjabat sebagai komisaris utama hingga saat ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="jeffry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content rounded-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jeffry Jutan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/Profile_pJ.jpg') }}" alt="" style="max-width:100%">
                            </div>
                            <div class="col-md-9 text-justify">
                                <p>Memperoleh gelar Sarjana Ekonomi Jurusan Akuntansi dari Universitas Kristen Indonesia,
                                    Jakarta, pada tahun 1997 dan memiliki ijin perseorangan dari Otoritas Jasa Keuangan
                                    sebagai Wakil Perantara Pedagang Efek sejak tahun 2017.</p>
                                <p>Karier beliau dimulai sebagai Staff Accounting di PT Royal Ostrindo pada tahun 1997, lalu
                                    meniti karier di berbagai perusahaan nasional hingga menjabat sebagai Chief of
                                    Accounting di PT Muara Securities dan Komisaris di PT Royal Trust Capital.</p>
                                <p>Beliau meniti karier di PT Investindo Nusantara Sekuritas dan menjabat sebagai Manager
                                    Accounting and Finance dan ditunjuk menjadi Komisaris pada Juli 2023 hingga sekarang.
                                </p>
                                <!-- <p>Masuk menjadi Manajer di PT Bank Pensiunan Militer Medan pada tahun 1966 menjadi permulaan karir beliau. Dengan jabatan yang sama beliau masuk ke perusahaan PT Bank Bukit Barisan Medan pada tahun tahun 1967. Karir ini berlanjut hingga tahun 1975 dimana beliau masuk ke perusahaan PT Bukit Indah Perdagangan Valuta menjabat sebagai Direktur dan masuk ke PT Bank Tani Nasional (pada Tahun 1991 berganti nama menjadi PT Bank Ekspres) tahun 1978 menjabat sebagai wakil direktur utama sebelum masuk ke PT Investindo Nusantara Sekuritas tahun 2002. Setelah masuk ke PT Investindo Nusantara Sekuritas beliau menjabat sebagai komisaris utama hingga saat ini.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="jenny" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content rounded-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jenny Kang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/Full_bJ.jpg') }}" alt="" style="max-width:100%">
                            </div>
                            <div class="col-md-9 text-justify">
                                <p>Beliau memulai karirnya pada tahun 1991 menjadi seorang equity sales yang menangani
                                    transaksi nasabah di perusahaan PT Lumbung Persada Katulistiwa. Lalu beliau berpindah
                                    perusahaan ke PT Agung Sekuritas, PT Asjaya Indosurya, dan PT Henan Putihrai dengan
                                    jabatan yang sama sebagai equity sales sebelum masuk ke PT Investindo Nusantara
                                    Sekuritas pada tahun 2002. Karir beliau di PT Investindo Nusantara Sekuritas perlahan
                                    naik mulai dari jabatan equity sales menjadi Head of Equity pada tahun 2006, lalu naik
                                    menjadi Direktur tahun 2007, dan akhirnya menjadi Presiden Direktur tahun 2014 hingga
                                    saat ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="yosep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content rounded-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Joseph Pulo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/Full_pY.jpg') }}" alt="" style="max-width:100%">
                            </div>
                            <div class="col-md-9 text-justify">
                                <p>Dengan latar belakang pendidikan sebagai Akuntan lulusan Univertas Gadjah Mada,
                                    Jogjakarta. Karir beliau dimulai sebagai Auditor pada KAP SGU Utomo Mulia & Co. pada
                                    tahun 1977. Selanjutnya meniti karir mulai dari posisi supervisor, manager dan direktur
                                    pada berbagai perusahaan, baik perususahaan nasional, multinasional, dan perusahaan
                                    terbuka. Pada tahun 2010, yang bersangkutan bergabung dengan PT. Investindo Nusantara
                                    Sekuritas sebagai komisaris, dan selanjutnya menduduki posisi direktur pada tahun 2014.
                                    Sejak 2020, beliau ditunjuk kembali sebagai komisaris independen sampai saat ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="yenni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content rounded-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yenni</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/Full_bY.jpg') }}" alt="" style="max-width:100%">
                            </div>
                            <div class="col-md-9 text-justify">
                                <p>Berpengalaman lebih dari 30 tahun di bidang keuangan, dengan latar belakang pendidikan S2
                                    di bidang Business Administration (MBA) dari Institut Teknologi Bandung, Jakarta.</p>
                                <p>Karier beliau dimulai sebagai Auditor pada berbagai Kantor Akuntan Publik (KAP) sejak
                                    tahun 1992. Selanjutnya meniti karier dalam bidang keuangan dengan berbagai jabatan di
                                    berbagai perusahaan nasional maupun multinasional. Pada tahun 2015, bergabung dengan PT
                                    Investindo Nusantara Sekuritas sebagai Technical Advisor dan diangkat menjadi Associate
                                    Director di divisi Investment Banking pada tahun 2019.</p>
                                <p>Pada tahun 2023, Beliau ditunjuk sebagai Direktur Investment Banking di PT Investindo
                                    Nusantara Sekuritas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="iwan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content rounded-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iwan Hartono</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/Full_pI.jpg') }}" alt="" style="max-width:100%">
                            </div>
                            <div class="col-md-9 text-justify">
                                <p>Memperoleh gelar Sarjana Komputer Jurusan Teknik Informatika dari Universitas Bina
                                    Nusantara Jakarta tahun 2002 dan memiliki ijin perseorangan dari Otoritas Jasa Keuangan
                                    sebagai Wakil Perantara Pedagang Efek sejak tahun 2021.</p>
                                <p>Beliau memulai karier di pasar modal sebagai IT developer di PT Investindo Nusantara
                                    Sekuritas pada tahun 2008, kemudian menjadi Manager IT di PT Aldiracita Corpotama pada
                                    tahun 2012. Pada tahun 2013, kembali ke PT Investindo Nusantara Sekuritas sebagai
                                    Manajer IT.</p>
                                <p>Sejak tahun 2023 diberi kepercayaan untuk menjabat sebagai Direktur IT dan Online Trading
                                    di PT Investindo Nusantara Sekuritas.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Modals --}}

@endsection
