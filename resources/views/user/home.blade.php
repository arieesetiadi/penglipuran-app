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


    <title>Home - Desa Penglipuran</title>
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
                                    <li class="menu-item menu-item-has-children current-menu-item">
                                        <a href="{{ url('/') }}">HOME</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('news') }}">NEWS</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('product') }}">PRODUCT</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ url('about') }}">ABOUT</a>
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
                                <!-- SLIDER -->
                                <div class="rev_slider_wrapper fullwidthbanner-container">
                                    <div id="rev-slider1" class="rev_slider fullwidthbanner">
                                        <ul>
                                            <!-- Slide 1 -->
                                            <li data-transition="">
                                                <!-- Main Image -->
                                                <img src="{{ asset('user/img/penglipuran/penglipuran1.jpg') }}"
                                                    alt="" data-bgposition="center center" data-no-retina>

                                                <!-- Layers -->
                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-600"
                                                    data-x="['left','left','left','center']"
                                                    data-hoffset="['34','34','34','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['-134','-134','-134','-134']"
                                                    data-fontsize="['20','20','20','16']"
                                                    data-lineheight="['70','70','40','24']" data-width="full"
                                                    data-height="none" data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                    data-start="700" data-splitin="none" data-splitout="none"
                                                    data-responsive_offset="on">
                                                    DESA WISATA PENGLIPURAN
                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                                    data-x="['left','left','left','center']"
                                                    data-hoffset="['34','34','34','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['-63','-63','-63','-63']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']" data-width="full"
                                                    data-height="none" data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000" data-splitin="none" data-splitout="none"
                                                    data-responsive_offset="on">
                                                    JAGALAH HATI
                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                                    data-x="['left','left','left','center']"
                                                    data-hoffset="['34','34','34','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['2','2','2','2']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']" data-width="full"
                                                    data-height="none" data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000" data-splitin="none" data-splitout="none"
                                                    data-responsive_offset="on">
                                                    BERSIHKAN PIKIRAN
                                                </div>

                                                <div class="tp-caption" data-x="['left','left','left','center']"
                                                    data-hoffset="['34','34','34','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['106','106','106','106']" data-width="full"
                                                    data-height="none" data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000" data-splitin="none" data-splitout="none"
                                                    data-responsive_offset="on">
                                                </div>
                                            </li>
                                            <!-- /End Slide 1 -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- END SLIDER -->

                                <div class="container my-5">
                                    <hr>
                                    {{-- Lokasi --}}
                                    <div class="row my-5">
                                        <div class="col-9">
                                            <h1>Lokasi Desa Penglipuran</h1>
                                            <p class="text-justify">Lokasi lokasi desa adat Penglipuran, berada di
                                                desa Kubu, kabupaten Bangli, provinsi Bali. Mungkin banyak dari anda
                                                tidak tahu, kabupaten Bangli di Bali bagian mana. Jika anda pernah
                                                wisata ke tempat wisata Kintamani atau Gunung Batur, inilah wilayah
                                                kabupaten Bangli.</p>
                                            <p class="text-justify">Lokasi desa penglipuran Bangli berada berada pada
                                                dataran tinggi di ketinggian sekitar 600 – 700 meter dari permukaan
                                                laut. Akibat berada di posisi ketinggian ini, membuat udara sejuk akan
                                                terbayang oleh anda. Ingin melihat peta lokasi desa Penglipuran Bangli?
                                                Mohon gunakan Google Map dengan cara mengklik link di bawah ini!</p>
                                            <p>
                                                Google Maps : <a target="_blank" class="text-primary"
                                                    href="https://goo.gl/maps/Ch1KFijidYZYDLNz7">Desa
                                                    Penglipuran</a>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <center>
                                                <img width="200px" style="margin-top: 20px"
                                                    src="{{ asset('user/icon/map.png') }}" alt="Maps">
                                            </center>
                                        </div>
                                    </div>

                                    {{-- Harga Tiket --}}
                                    <div class="row my-5">
                                        <div class="col-3">
                                            <center>
                                                <img width="200px" style="margin-top: 20px"
                                                    src="{{ asset('user/icon/price-tag.png') }}" alt="Maps">
                                            </center>
                                        </div>
                                        <div class="col-9">
                                            <h1>Harga Tiket Masuk 2021</h1>
                                            <p class="text-justify">Tercatat rata-rata 100 orang wisatawan yang
                                                berkunjung ke desa Penglipuran Bangli. Untuk dapat memasuki desa
                                                Penglipuran, anda akan di kenakan biaya tiket masuk. Lalu berapa harga
                                                tiket masuk desa Penglipuran terbaru? Silakan di lihat di tabel di bawah
                                                ini!
                                            </p>
                                            <table class="table" border="0">
                                                <tr>
                                                    <th>Kategori</th>
                                                    <th>Indonesia</th>
                                                    <th>Asing</th>
                                                </tr>
                                                <tr>
                                                    <td>Dewasa</td>
                                                    <td>Rp. 25.000,00</td>
                                                    <td>Rp. 50.000,00</td>
                                                </tr>
                                                <tr>
                                                    <td>Anak-anak</td>
                                                    <td>Rp. 15.000,00</td>
                                                    <td>Rp. 30.000,00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <hr>

                                    {{-- Keunikan --}}
                                    <div class="row my-5">
                                        <div class="col-8">
                                            <h1>Keunikan Desa Wisata Penglipuran</h1>

                                            <p class="text-justify">Tentunya sebelum mengunjungi sebuah objek wisata
                                                di
                                                Bali, pasti anda ingin tahu hal apa saja yang menarik untuk dilihat.
                                                Jika
                                                anda berminat untuk melihat keunikan sebuah desa yang masih
                                                memperlihatkan
                                                suasana Bali asli. Maka kabupaten Bangli dan objek wisata di Bali timur
                                                yang
                                                wajib anda kunjungi. Karena wilayah kabupaten Bangli dan objek wisata di
                                                Bali timur salah satunya desa Tenganan masih kental nuasa Bali asli dan
                                                belum banyak mendapatkan pengaruh modern. Tahukah anda, desa adat
                                                Penglipuran Bangli di gunakan sebagai contoh pertama sebagai desa wisata
                                                di
                                                Indonesia oleh pemerintah daerah pada tahun 1995.</p>
                                            <p class="text-justify">Bagi yang pertama kali berlibur ke desa
                                                Penglipuran
                                                Bangli, pastinya akan terkejut melihat bentuk dari tiap-tiap rumah
                                                penduduk
                                                hampir sama. Kemiripan dari tiap-tiap rumah terlihat pada pintu gerbang
                                                rumah, atap rumah dan dinding rumah menggunakan bambu, lebar pintu
                                                gerbang
                                                yang hanya muat untuk satu orang dewasa. Di masyarakat Bali pintu jenis
                                                ini
                                                di sebut angkul-angkul. Tidak hanya bentuk rumah yang sama, pembagian
                                                dari
                                                masing-masing tata ruang rumah juga sama, seperti kamar tidur dan dapur.
                                                Cat
                                                tembok pintu gerbang yang di gunakan bukan cat tembok yang biasanya kita
                                                kenal, melainkan menggunakan cat berbahan dasar dari tanah liat.</p>
                                            <p class="text-justify">Saya tidak tahu pasti tujuan dari tiap-tiap rumah
                                                penduduk memiliki kemiripan. Pendapat pribadi saya, sepertinya mereka
                                                ingin
                                                membangun kebersamaan dan mempertahankan kosep berpadu dengan alam. Pada
                                                bulan Oktober 2014, saya berlibur ke desa Penglipuran Bangli dan melihat
                                                ada
                                                beberapa dinding kamar yang telah berubah menggunakan batu bata. Padahal
                                                dulunya saat berlibur kesini pada tahun 1998, semua dinding kamar
                                                menggunakan bambu.</p>
                                        </div>
                                        <div class="col-4" style="margin-top: 150px">
                                            <center>
                                                <img width="350px" style="margin-top: 20px"
                                                    src="{{ asset('user/img/penglipuran/keunikan.jpg') }}" alt="Maps"
                                                    class="rounded shadow">
                                            </center>
                                        </div>
                                    </div>

                                    <hr>

                                    {{-- Budaya Penduduk --}}
                                    <div class="row my-5">
                                        <div class="col-4" style="margin-top: 100px">
                                            <center>
                                                <img width="350px" style="margin-top: 20px"
                                                    src="{{ asset('user/img/penglipuran/budaya.jpg') }}" alt="Maps"
                                                    class="rounded shadow">
                                            </center>
                                        </div>
                                        <div class="col-8">
                                            <h1>Budaya Penduduk</h1>

                                            <p class="text-justify">Budaya pengelompokan dari tata ruang desa sangat
                                                terlihat di sini. Di bagian utara dan letaknya lebih tinggi dari rumah
                                                penduduk terdapat pura Desa yang di sebut pura Penataran. Pada bagian
                                                tengah
                                                desa yang letaknya di bawah pura, adalah zona tempat
                                                penduduk. Saat ini desa di huni oleh 226 kepala keluarga dan untuk
                                                nafkah
                                                sehari-hari penduduk desa berprofesi sebagai petani, pengerajin anyaman
                                                bambu dan berternak. Luas dari area desa sekitar 112 hektar dan tidak
                                                semua
                                                lahan desa di gunakan sebagai rumah penduduk. Sekitar 40 % dari lahan
                                                desa
                                                adalah hutan bambu. Menebang pohon bambu di desa ini tidak boleh
                                                sembarangan
                                                tanpa ijin dari tokoh masyarakat setempat.</p>
                                            <p class="text-justify">Selain memiliki budaya menghormati alam, penduduk
                                                desa
                                                Penglipuran Bangli juga memiliki budaya dan tradisi untuk menghormati
                                                wanita. Karena adanya aturan desa yang melarang pria untuk melakukan
                                                poligami, jika ketahuan melakukan poligami maka akan mendapatkan hukuman
                                                di
                                                kucilkan dari desa. Desa ini juga memiliki budaya hukuman untuk
                                                pencurian.
                                                Bagi yang ketahuan mencuri, akan di hukum untuk memberikan sesajen lima
                                                ekor
                                                ayam dengan warna bulu ayam yang berbeda di 4 pura leluhur mereka.
                                                Dengan
                                                cara ini, semua penduduk desa akan mengetahui siapa yang mencuri,
                                                tentunya
                                                akan membuat efek malu. Zona yang terakhir atau yang ketiga di sebut
                                                setra
                                                atau kuburan. Walaupun penduduk desa Penglipuran Bali memeluk agama
                                                Hindu
                                                tapi penduduk desa Penglipuran Bangli tidak mengenal upacara pembakaran
                                                mayat, jadi mayat langsung di kubur.</p>
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
