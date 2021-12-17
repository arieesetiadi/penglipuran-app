{{-- Import Header --}}
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('user/css/animate.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/animsition.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('user/css/autora-icons.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/font-awesome.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('user/css/font-etline.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/ionicons.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('user/css/owl.carousel.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('user/css/shortcodes.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('user/css/woocommerce.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/custom.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/colors/color1.css') }}" id="colors">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('user/icon/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('user/icon/apple-touch-icon-158-precomposed.png') }}">

    <style>
        p.main-content {
            text-indent: 30px;
        }

        ol {
            display: list-item;
            margin-top: -20px;
        }

        ol li {
            text-align: justify;
        }

    </style>

    <title>About Penglipuran - Desa Penglipuran</title>
</head>

<body class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search">

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">

            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <!-- Header -->
                <header id="site-header">
                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner clearfix">
                            <div id="site-logo" class="clearfix">
                                <div id="site-log-inner">
                                    <a href="/" rel="home" class="main-logo">
                                        <img src="{{ asset('user/img/logo-penglipuran.png') }}" alt="Autora"
                                            width="186" height="39" data-width="186" data-height="39">
                                    </a>
                                </div>
                            </div><!-- /#site-logo -->

                            <div class="mobile-button">
                                <span></span>
                            </div><!-- /.mobile-button -->

                            <nav id="main-nav" class="main-nav">
                                <ul id="menu-primary-menu" class="menu">
                                    <li class="menu-item menu-item-has-children">
                                        <a href="{{ url('/') }}">HOME</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('news') }}">NEWS</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('product') }}">PRODUCT</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children current-menu-item">
                                        <a href="#">ABOUT</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item current-item">
                                                <a href="{{ url('about-penglipuran') }}">ABOUT PENGLIPURAN</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('about-me') }}">ABOUT ME</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">GALLERY</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="{{ url('gallery') }}">GALLERY</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('company-profile') }}">COMPANY PROFILE</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">VIRTUAL TOUR 360<sup>o</sup></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="{{ url('virtual-tour-foto') }}">VIRTUAL TOUR INTERAKTIF</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('virtual-tour-video') }}">VIDEO VIRTUAL TOUR
                                                    360<sup>o</sup></a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('contact') }}">CONTACT</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('login') }}">LOGIN</a>
                                    </li>
                                </ul>
                            </nav><!-- /#main-nav -->

                        </div><!-- /.wrap-inner -->
                    </div><!-- /#site-header-inner -->
                </header><!-- /#site-header -->
            </div><!-- #site-header-wrap -->


            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">

                                <div class="container w-75">
                                    <h1 class="text-center my-5">ABOUT PENGLIPURAN</h1>
                                    <div class="row my-5">
                                        <div class="col">
                                            <div class="mb-5">
                                                <center>
                                                    <img src="{{ asset('user/img/penglipuran/sejarah.jpg') }}"
                                                        alt="Sejarah Penglipuran">
                                                </center>
                                            </div>

                                            <p class="main-content d-inline-block text-justify">Setiap daerah atau desa
                                                tentu
                                                mempunyai lintasan
                                                sejarah, di mana
                                                biasanya tertulis dalam suatu lontar-lontar, babad-babad, prasasti dan
                                                lain-lain. Demikian juga halnya terhadap Desa Adat Penglipuran, memiliki
                                                lintasan sejarah tersendiri. Desa Adat Penglipuran yang merupakan salah
                                                satu lingkungan dari Kelurahan Kubu penduduknya sebagian besar berasal
                                                dari Desa Bayung Gede, Kecamatan Kintamani Kabupaten Dati II Bangli.</p>
                                            <p class="main-content d-inline-block text-justify">Pada jaman kerajaan
                                                Bangli, penduduk
                                                Desa Bayung Gede sering ditugaskan oleh raja Bangli untuk ikut berperang
                                                dan kegiatan lain di kerajaan. Karena Desa Bayung jauh Iokasinya dari
                                                pusat kerajaan, akhirnya oleh raja diberi tempat dilokasi Desa Adat
                                                Penglipuran yang sekarang, yang dibutuhkan oleh raja di setiap kegiatan
                                                di kerajaan. Semula disebutkan dalam prasasti, bahwa Desa Adat
                                                Penglipuran disebut “Kubu Bayung” yang berarti Pondok Bayung Gede. Lama
                                                kelamaan penduduk desa ini membangun desa di lingkungan ini dengan
                                                Kahyangan Tiga (tiga pura yaitu pura puseh, pura dalem dan pura
                                                desa/balai agung) dan pura lainnya (Dang Khayangan) dibangun mirip atau
                                                serupa dengan yang ada di Desa Bayung Gede oleh masyarakat hal ini
                                                dimaksudkan untuk mengingat pura yang ada di Desa Bayung Gede
                                                (Ngelingang Pura yang ada di Desa Bayung Gede).</p>
                                            <p class="main-content d-inline-block text-justify">
                                                Menurut penuturan para
                                                tokoh masyarakat, “Penglipuran” secara etimologi dijelaskan sebagai
                                                berikut, Penglipuran berasal dan kata
                                                “pangeling” dan “pura” menjadi kata
                                                penglipuran berarti masyarakat penglipuran membangun pura
                                                seperti di
                                                Bayung Gede untuk mengingat pura di Bayung Gede dan mengingat
                                                leluhurnya. Penglipuran berasal dan kata
                                                “pelipur” dan “lara” menjadi
                                                penglipuran, berarti penglipuran menjadi tempat menghibur di
                                                kala
                                                duka (lara) di samping karena penduduk sering dapat menghibur
                                                saat
                                                raja menghadapi masalah. Penglipuran berasal dan kata
                                                “pangleng” dan “pura” menjadi
                                                penglipuran berärti bahwa barang siapa ke penglipuran akan
                                                melewati
                                                pura di empat penjuru mata angin yaitu utara, timur, selatan dan
                                                barat, dengan kata lain bahwa penglipuran di kelilingi oleh
                                                pura-pura.
                                            </p>
                                        </div>
                                    </div>

                                    <h1 class="text-center my-5">STRUKTUR PENGELOLA</h1>
                                    <div class="row my-5">
                                        <div class="col">
                                            <div class="mb-5">
                                                <center>
                                                    <img src="{{ asset('user/img/penglipuran/struktur-organisasi.png') }}"
                                                        alt="Sejarah Penglipuran">
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.page-content -->
                        </div><!-- /#inner-content -->
                    </div><!-- /#site-content -->
                </div><!-- /#content-wrap -->
            </div><!-- /#main-content -->

            {{-- Import Footer --}}
            <!-- Bottom -->
            <div id="bottom" class="clearfix has-spacer">
                <div id="bottom-bar-inner" class="container">
                    <div class="bottom-bar-inner-wrap">
                        <div class="d-flex justify-content-center">
                            <span class="text">Copyright © Desa Penglipuran 2021</span>
                        </div><!-- /.bottom-bar-content -->
                    </div><!-- /.bottom-bar-inner-wrap -->
                </div><!-- /#bottom-bar-inner -->
            </div><!-- /#bottom -->

        </div><!-- /#page -->
    </div><!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/js/plugins.js') }}"></script>
    {{-- <script src="{{ asset('user/js/tether.min.js') }}"></script> --}}
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/animsition.js') }}"></script>
    <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('user/js/countto.js') }}"></script> --}}
    {{-- <script src="{{ asset('user/js/equalize.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('user/js/jquery.isotope.min.js') }}"></script> --}}
    <script src="{{ asset('user/js/owl.carousel2.thumbs.js') }}"></script>

    <script src="{{ asset('user/js/jquery.cookie.js') }}"></script>
    {{-- <script src="{{ asset('user/js/gmap3.min.js') }}"></script> --}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
    <script src="{{ asset('user/js/shortcodes.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('user/includes/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('user/includes/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('user/js/rev-slider.js') }}"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ asset('user/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('user/includes/rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('user/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('user/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('user/includes/rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('user/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('user/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('user/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('user/includes/rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script>

    <script>
        let height = screen.height;
        let container = document.querySelector('.page-content > .container');

        container.style.minHeight = "" + (height - 300) + "px";
    </script>

</body>

</html>
