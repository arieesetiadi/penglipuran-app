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


    <title>Blog - Desa Penglipuran</title>
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
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="/">HOME</a>
                                        {{-- <ul class="sub-menu">
                                            <li class="menu-item current-item"><a href="home.html">HOME 1</a></li>
                                            <li class="menu-item"><a href="home-2.html">HOME 2</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('tampil-virtual-tour') }}">VIRTUAL TOUR</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('tampil-tentang-kami') }}">TENTANG KAMI</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('tampil-gallery') }}">GALLERY</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children current-menu-item">
                                        <a href="{{ url('tampil-blog') }}">BLOG</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('tampil-kontak') }}">KONTAK</a>
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

                                <!-- ICONBOX -->
                                <div class="row-iconbox">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="themesflat-spacer clearfix" data-desktop="60"
                                                    data-mobile="60" data-smobile="60"></div>
                                                <div class="themesflat-headings style-1 text-center clearfix">
                                                    <h2 class="heading">HALAMAN BLOG</h2>
                                                    <div class="sep has-icon width-125 clearfix">
                                                        <div class="sep-icon">
                                                            <span class="sep-icon-before sep-center sep-solid"></span>
                                                            <span class="icon-wrap"><i
                                                                    class="autora-icon-build"></i></span>
                                                            <span class="sep-icon-after sep-center sep-solid"></span>
                                                        </div>
                                                    </div>
                                                    <p class="sub-heading">More than 500 projects completed in Autora
                                                        -
                                                        With over 25 years of combined experience, we have the knowledge
                                                        to serve you.</p>
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="42"
                                                    data-mobile="35" data-smobile="35"></div>
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px"
                                                    data-mobilemargin="0 0 0 0">
                                                    <div
                                                        class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="autora-icon-quality"></i>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">BEST QUALITY</a></h5>
                                                            <div class="sep clearfix"></div>
                                                            <p class="sub-heading">Autora Construction Services are
                                                                committed to meeting the highest quality standards
                                                                without compromising our safety culture..</p>
                                                        </div>
                                                    </div><!-- /.themesflat-icon-box -->
                                                </div><!-- /.themesflat-content-box -->
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-4">
                                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0"
                                                    data-smobile="35"></div>
                                                <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px"
                                                    data-mobilemargin="0 0 0 0">
                                                    <div
                                                        class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="autora-icon-time"></i>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">ON TIME</a></h5>
                                                            <div class="sep clearfix"></div>
                                                            <p class="sub-heading">At our company, we respect the
                                                                customer’s time and schedule and always complete the
                                                                projects on timely fashion way.</p>
                                                        </div>
                                                    </div><!-- /.themesflat-icon-box -->
                                                </div><!-- /.themesflat-content-box -->
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-4">
                                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0"
                                                    data-smobile="35"></div>
                                                <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px"
                                                    data-mobilemargin="0 0 0 0">
                                                    <div
                                                        class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="autora-icon-author"></i>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">EXPERIENCED</a></h5>
                                                            <div class="sep clearfix"></div>
                                                            <p class="sub-heading">As the saying goes practice makes
                                                                perfect. With our years of experience you can bet on us
                                                                to get the job done exactly to your specifications.</p>
                                                        </div>
                                                    </div><!-- /.themesflat-icon-box -->
                                                </div><!-- /.themesflat-content-box -->
                                            </div><!-- /.col-md-4 -->
                                        </div><!-- /.row -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="themesflat-spacer clearfix" data-desktop="41"
                                                    data-mobile="35" data-smobile="35"></div>
                                                <div class="elm-button text-center">
                                                    <a href="#" class="themesflat-button bg-accent">ABOUT US</a>
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="73"
                                                    data-mobile="60" data-smobile="60"></div>
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                                <!-- END ICONBOX -->
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


</body>

</html>
