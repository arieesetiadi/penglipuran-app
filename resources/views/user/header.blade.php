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
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animsition.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/autora-icons.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-etline.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ionicons.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/woocommerce.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/color1.css') }}" id="colors">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/icon/apple-touch-icon-158-precomposed.png') }}">


    <title>Autora - Construction Business HTMl Template</title>
</head>

<body class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search">

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">

            {{-- Include Top Bar --}}
            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <!-- Header -->
                <header id="site-header">
                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner clearfix">
                            <div id="site-logo" class="clearfix">
                                <div id="site-log-inner">
                                    <a href="/" rel="home" class="main-logo">
                                        <img src="{{ asset('img/logo/logo-penglipuran.png') }}" alt="Autora"
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
                                        <a href="#">MEDIA</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="">FOTO</a></li>
                                            <li class="menu-item"><a href="">VIDEO 360</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="">ABOUT</a>
                                        {{-- <ul class="sub-menu">
                                            <li class="menu-item current-item"><a href="home.html">TENTANG 1</a></li>
                                            <li class="menu-item"><a href="home-2.html">TENTANG 2</a></li>
                                        </ul> --}}
                                    </li>
                                </ul>
                            </nav><!-- /#main-nav -->

                            <div id="header-search">
                                <a href="#" class="header-search-icon">
                                    <span class="search-icon fa fa-search">
                                    </span>
                                </a>

                                <form role="search" method="get" class="header-search-form" action="#">
                                    <label class="screen-reader-text">Search for:</label>
                                    <input type="text" value="" name="s" class="header-search-field"
                                        placeholder="Search...">
                                    <button type="submit" class="header-search-submit" title="Search"><i
                                            class="fa fa-search"></i></button>
                                </form>
                            </div><!-- /#header-search -->
                        </div><!-- /.wrap-inner -->
                    </div><!-- /#site-header-inner -->
                </header><!-- /#site-header -->
            </div><!-- #site-header-wrap -->
