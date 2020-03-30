<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Sanosil Indonesia</title>
    <script src="{{ asset('web_sanosil/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('web_sanosil/js/jquery-migrate-1.2.1.min.js') }}" async></script>

    <!--SANOSIL STYLE-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('web_sanosil/slick-1.5.7/slick/slick.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('web_sanosil/fonts/font-awesome.min.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('web_sanosil/slick-1.5.7/slick/slick-theme.css')}}" type="text/css" media="screen" />
    <link href="{{ asset('web_sanosil/bootstrap/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web_sanosil/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="alternate" type="application/rss+xml" title="Sanosil &raquo; Wasserbehandlung Produktlinien Type Feed" href="https://www.sanosil.com/en/productlines/wasserbehandlung/feed/" />
    <link rel='stylesheet' id='wp-block-library-css'  href="{{ asset('web_sanosil/css/dist/block-library/style.min.css')}}" type='text/css' media='all' />
    <link rel='https://api.w.org/' href='https://www.sanosil.com/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.sanosil.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.sanosil.com/wp-includes/wlwmanifest.xml" />
    <link rel="shortcut icon" type="image/x-icon" href="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/favicon.ico">

  <link rel="stylesheet" href="{{asset('plugin/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7')}}" type="text/css" media="screen" />
  <link rel="stylesheet" href="{{asset('plugin/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}" type="text/css" media="screen" />
  <link rel="stylesheet" href="{{asset('plugin/fancybox/source/jquery.fancybox.css?v=2.1.7')}}" type="text/css" media="screen" />
  @yield('style')
</head>
<body class="archive tax-productlines term-wasserbehandlung term-43 chrome en" data-lang="ID" data-continent="AS">

    <header id="get_header">
        <div id="headerUpper">
            <div class="container">
                <div class="row">
                    <div id="headerLogo" class="col-xs-12 col-sm-12 col-md-4 col-lg-5">
                        <a href="{{ url ('/sanosil')}}">
                            <img id="svg_logo" src="{{ asset('web_sanosil/images/Sanosil_Logo.png') }}" alt='logo' />
                        </a>
                    </div>
                    <div id="headerRight" class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                        <div id="headerRightLower">
                            <div class="hrl_wrapper clearfix">
                                <div id="nav_burger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <nav id="MainNav" class="clearfix hrl_elems">
                                    <ul id="menu-english-main-menu" class="menu">
                                        <li id="menu-item-1040" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1040">
                                            <a href="/">Beranda</a>
                                        </li>
                                        <li id="menu-item-1015" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1015">
                                            <a href="/product">Produk</a>
                                        </li>
                                        <li id="menu-item-1015" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1015">
                                            <a href="/about">Tentang Kami</a>
                                        </li>
                                        <li id="menu-item-1014" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1014">
                                            <a href="/news">News & Galeri</a>
                                        </li>
                                        <!-- {{-- 
                                        </li> --}}
                                        {{-- <li id="menu-item-3378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3378">
                                            <a href="#">FAQ</a>
                                        </li> --}} -->
                                        <li id="menu-item-1006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1006">
                                            <a href="/contact">Kontak</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- /site-nav -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('widget')
    <script src="{{asset('web_sanosil/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('web_sanosil/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('web_sanosil/js/jquery.fancybox-media.js')}}"></script>
    <link rel="stylesheet" href="{{asset('web_sanosil/css/jquery.fancybox.css')}}" type="text/css" media="screen">

    @yield('content')

    <footer id="get_footer">
        <div id="upperFooter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="footerMainTitles Cetrnestica white upperCaseText">Mitra</div>
                            <div class="col-md-6 white">
                            <a style="color:#8dc4f5;" href="https://adamlabs.id"><i class="fas fa-building"></i> PT. Wahana Meditek Indonesia</a>
                            </div>
                            <div class="col-md-6 white">
                            <a style="color:#8dc4f5;" href="https://wahanagumilang.co.id"><i class="fas fa-building"></i> PT. Wahana Gumilang Group</a>
                            </div>
                            <div class="col-md-6 white">
                            <a style="color:#8dc4f5;" href="https://sanosil.co.id"><i class="fas fa-building"></i> PT. Pratamindo Mitra Rizky</a>
                            </div>
                        </div>
                    <div id="target_footer_right" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="footerMainTitles Cetrnestica white upperCaseText">Infomasi Kontak</div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div id="footerCompanyName">
                                <span class="spanFCN Cetrnestica bold white">Sanosil AG Indonesia</span>
                            </div>
                            <div id="footerCompanyAddress">
                                <span class="footerblue Cetrnestica">
                                    Jl. Bulak Setro Indah 2 Blok B No.51<br />Bulak, Kec. Bulak, Kota SBY, Jawa Timur 60124
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div id="footerCompanyMail">
                                <span class="footerblue bold Cetrnestica">Email:</span>
                                <span class="footerblue Cetrnestica"><a href="mailto:info@wahanagumilang.co.id">pratamindo.rizky@gmail.com</a></span>
                            </div>
                            <div>
                                <span class="footerblue bold Cetrnestica">Tel:</span>
                                <span class="footerblue Cetrnestica">031 5150 1901 / 6005 0192</span><br />
                                <span class="footerblue bold Cetrnestica">Hp:</span>
                                <span class="footerblue Cetrnestica">0812 3270 413</span><br />
                                <span class="footerblue bold Cetrnestica">Fax:</span>
                                <span class="footerblue Cetrnestica">031 5150 1902</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="lowerFooter">
            <div class="container">
                <div id="copyRight">
                    <span class="semibold footerblue" style="font-size: 11px;">Copyright &copy; {{ date('Y') }} <a href="https://sanosil.com">Sanosil</a>  LTD. All Rights Reserved.</span>
                    <div id="footerToTop"></div>
                </div>
            </div>
        </div>
    </footer>

    <script type='text/javascript' src="{{ asset('web_sanosil/js/wp-embed.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('web_sanosil/css/selectric.css')}}" type="text/css" media="screen" />
    {{-- <link rel="stylesheet" href="{{ asset('web_sanosil/js/jquery.mCustomScrollbar.css')}}" type="text/css" media="screen" /> --}}
    <script src="{{ asset('web_sanosil/slick-1.5.7/slick/slick.min.js')}}"></script>
    <script src="{{ asset('web_sanosil/js/svg-injector.min.js')}}"></script>
    <script src="{{ asset('web_sanosil/js/jquery.selectric.js')}}"></script>
    <script src="{{ asset('web_sanosil/js/jquery.mCustomScrollbar.concat.min.js')}}"> </script>
    <script src="{{ asset('web_sanosil/js/lexo-scripts.js')}}"></script>
<script>
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		magnifiersize: 150,
        prevEffect	: 'none',
		nextEffect	: 'none',
        closeBtn		: false,
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 100,
				height	: 50
			},
            buttons	: {

            },
		}
	});
});
</script>



<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="{{asset('plugin/fancybox/lib/jquery.mousewheel.pack.js')}}"></script>

<!-- Add fancyBox -->

<script type="text/javascript" src="{{asset('plugin/fancybox/source/jquery.fancybox.pack.js?v=2.1.7')}}"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->

<script type="text/javascript" src="{{asset('plugin/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
<script type="text/javascript" src="{{asset('plugin/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6')}}"></script>


<script type="text/javascript" src="{{asset('plugin/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7')}}"></script>
</body>
</html>
