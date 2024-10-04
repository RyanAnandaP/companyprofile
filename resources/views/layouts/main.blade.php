<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') - Investindo Nusantara Sekuritas</title>
    <meta content="broker investasi terbaik di indonesia" name="description">
    <meta
        content="Investindo Nusantara Sekuritas, Plaza Asia, investindo, investment, investasi, saham, nabung saham, trading saham, trading, stock trading, Pilarmas, Saham, Investasi, Obligasi, Investment Banking, Pasar Modal, Ayuk Nabung Saham, Inflasi, Riset, Youtube Channel, Pilarmas Investindo, Sekuritas, Investindo, Pilarmas Investindo Sekuritas, Saham Indonesia, Main Saham, Bandar, Saham Gorengan, Saham Cuan, Saham Untung"
        name="keywords">
    <meta property="og:title" content="Investindo Nusantara Sekuritas">
    <meta property="og:url" content="https://investindosekuritas.co.id">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id">
    <meta name="author" content="Investindo Nusantara Sekuritas">

    <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon"> --}}
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/corporate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body style="background-color: #eee;">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-block align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <a href="/"><img src="{{ asset('logo.png') }}" alt="" class="img-fluid"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    {{-- <li><a href="#clients" id="product-button">Event</a></li> --}}
                    <li id="about-drop-down"><a href="#" class="about-drop-down">
                            <p>{{ __('Tentang Kami') }}</p>
                        </a></li>
                    <li id="product-drop-down"><a href="/product" class="product-drop-down">
                            <p>{{ __('Produk') }}</p>
                        </a></li>
                    <li id="career-nav"><a href="/career">
                            <p>{{ __('Karir') }}</p>
                        </a></li>
                    <li id="career-nav">
                        <a href="/equity#ot">
                            <p style="color:#1043a4">
                                <strong>{{ __('Online Trading') }}</strong>
                            </p>
                        </a>
                    </li>
                    {{-- <li class="get-started"><a href="/account">Buka Akun</a></li> --}}
                </ul>
            </nav><!-- .nav-menu -->


            {{-- hamburger button --}}
            <div class="d-block d-lg-none">
                <button class="btn btn-light border-secondary" style="background-color: #eee" id="hamburger">
                    <i class="fa fa-hamburger text-secondary"></i>
                </button>
            </div>
            {{-- end of hamburger button --}}
        </div>

        {{-- mobile nav menu --}}
        <div class="pt-2 d-lg-none" style="background-color: #eee" id="hamburger-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <ul class="list-group border-secondary">
                            <li class="list-group-item" style="background-color:#eee" id="mobile-about-menu">
                                <div class="row">
                                    <div class="col">
                                        Tentang Kami
                                    </div>
                                    <div class="col-1">
                                        <i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                            </li>

                            <li id="mobile-about-menu-options" class="drop-down-container d-lg-none" style="hover">
                                <div class="row">
                                    <div class="col-12 align-items-stretch my-2" style="cursor: pointer">
                                        <div class="icon-box" onclick="redirect('companyprofile')"
                                            style="background-image: url('{{ asset('images/companyprofile.jpg') }}'); background-size:cover"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <h4 class="title"> Profil Perusahaan</h4>
                                            <p> </p>
                                            {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-12 align-items-stretch my-2">
                                        <div class="icon-box" onclick="redirect('corporategovernance')"
                                            style="background-image: url('{{ asset('images/corporategovernance.jpg') }}'); background-size:cover"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <h4 class="title"> Corporate Governance</h4>
                                            <p> </p>
                                            {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item mt-1" style="background-color:#eee" id="product-about-menu">
                                <div class="row">
                                    <div class="col">
                                        Produk
                                    </div>
                                    <div class="col-1">
                                        <i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                            </li>

                            <li id="product-about-menu-options" class="drop-down-container d-lg-none">
                                <div class="row">
                                    <div class="col-12 align-items-stretch mx-1 text-dark">
                                        <a href="/brokerage" class="text-dark">Brokerage</a>
                                        <ul class="text-dark">
                                            <li><a class="text-primary" href="/equity">Equity</a></li>
                                            <li><a class="text-primary" href="/research">Research</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 align-items-stretch mx-1">
                                        <a href="/investmentbanking" class="text-dark">Investment Banking</a>
                                    </div>
                                </div>
                            </li>

                            <li></li>
                            <li class="list-group-item mt-1" style="background-color:#eee"><a href="/career"
                                    class="text-dark">{{ __('Karir') }}</a></li>
                            <li></li>
                            <li class="list-group-item mt-1" style="background-color:#eee"><a href="/equity#ot"
                                    class="text-dark">{{ __('Online Trading') }}</a><span
                                    class="ml-1 badge badge-danger p-1">new</span></li>
                            {{-- <li class="list-group-item">Buka Akun</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of mobile nav menu --}}


        {{-- about drop down container --}}
        <div id="about-drop-down-container" class="drop-down-container mt-2 p-3">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" id="hover-card" onclick="redirect('companyprofile')"
                            style="background-image: url('{{ asset('images/companyprofile.jpg') }}'); background-size:cover"
                            data-aos="fade-up" data-aos-delay="100">
                            <h4 class="title"> Profil Perusahaan</h4>
                        </div>
                    </div>
                    <div class="col-md-6 align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" id="hover-card" onclick="redirect('corporategovernance')"
                            style="background-image: url('{{ asset('images/corporategovernance.jpg') }}'); background-size:cover"
                            data-aos="fade-up" data-aos-delay="100">
                            <h4 class="title"> Corporate Governance</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of about drop down container --}}

        {{-- product drop down container --}}
        <div id="product-drop-down-container" class="drop-down-container mt-2 p-3">
            <div class="container">
                <div class="row ">

                    <div class="col-md-6 align-items-stretch mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="icon-box hover" onclick="redirect('brokerage')"
                                    style="background-image: url('{{ asset('images/brokerage.jpg') }}'); background-size:cover"
                                    data-aos="fade-up" data-aos-delay="100" id="equity-button">
                                    <h4 class="title text-dark"> {{ __('Brokerage') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mt-4 equity-menu">
                                <div class="icon-box" id="hover-card" onclick="redirect('equity')"
                                    style="background-image: url('{{ asset('images/broker.jpg') }}'); background-size:cover"
                                    data-aos="fade-up" data-aos-delay="100">
                                    <h4 class="title text-white"> {{ __('Equity') }}</h4>
                                </div>
                            </div>
                            <div class="col-6 mt-4 equity-menu">
                                <div class="icon-box" id="hover-card" onclick="redirect('research')"
                                    style="background-image: url('{{ asset('images/research1.jpg') }}'); background-size:cover"
                                    data-aos="fade-up" data-aos-delay="100">
                                    <h4 class="title text-white"> {{ __('Research') }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" id="hover-card" onclick="redirect('investmentbanking')"
                            style="background-image: url('{{ asset('images/investmentbanking.jpg') }}'); background-size:cover"
                            data-aos="fade-up" data-aos-delay="100" id="ib-button">
                            <h4 class="title"> {{ __('Investment Banking') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of product drop down container --}}

    </header><!-- End Header -->


    <div class="page-wrapper">

        @yield('content')
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 text-lg-left text-center">
                        <div class="copyright">
                            <p><strong>PT Investindo Nusantara Sekuritas</strong> berizin dan diawasi oleh
                                <strong>Otoritas Jasa Keuangan</strong></p>
                            <p>&copy; Copyright <strong>Investindo Nusantara Sekuritas</strong>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-7 footer-images">
                        <!-- ======= delete ======= -- <img src="{{ asset('images/ojk.png') }}" alt="ojk" class="footer-image">!-- End delete -->
                        <div class = 'logo_items'>        
                            <img src="{{ asset('images/idx.png') }}" alt="idx" class="footer-image">
                            <img src="{{ asset('images/ksei.png') }}" alt="ksei" class="footer-image">
                            <img src="{{ asset('images/kpei.png') }}" alt="kpei" class="footer-image">
                            <img src="{{ asset('images/yuk-nabung-saham.png') }}" alt="nabung-saham"
                            class="footer-image">
                            <img src="{{ asset('images/inklusi-keuangan.png') }}" alt="inklusi" class="footer-image">
                        </div>

                        <div class = 'logo_items'>        
                            <img src="{{ asset('images/idx.png') }}" alt="idx" class="footer-image">
                            <img src="{{ asset('images/ksei.png') }}" alt="ksei" class="footer-image">
                            <img src="{{ asset('images/kpei.png') }}" alt="kpei" class="footer-image">
                            <img src="{{ asset('images/yuk-nabung-saham.png') }}" alt="nabung-saham"
                            class="footer-image">
                            <img src="{{ asset('images/inklusi-keuangan.png') }}" alt="inklusi" class="footer-image">
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer -->
    </div>

    <!-- Vendor JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"
        integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        function redirect(url) {
            window.location.href = '/' + url;
        }
        $(document).ready(function() {
            $('#hamburger-content').hide();
            $('#mobile-about-menu-options').hide();
            $('#product-about-menu-options').hide();
            $('#hamburger').click(function() {
                $('#hamburger-content').slideToggle()
            })
            $('#mobile-about-menu').click(function() {
                $('#mobile-about-menu-options').slideToggle();
            })
            $('#product-about-menu').click(function() {
                $('#product-about-menu-options').slideToggle();
            })

        })

        let copy = $(document).querySelector(".logo_items").cloneNode(true)
        $(document).querySelector(".footer-images").appendChid(copy);
    </script>

</body>

</html>
