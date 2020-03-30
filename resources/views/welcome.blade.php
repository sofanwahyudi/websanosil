@extends('layouts.master')
@section('title')
Website
@stop
@section('style')
<style>

</style>
@stop
@section('widget')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
var d = new Date();
$("#date").html(d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear());
    $.ajax({url: "https://api.kawalcorona.com/indonesia/", success: function(result){
     $("#terjangkit").html(result[0].positif);
     $("#sembuh").html(result[0].sembuh);
     $("#meninggal").html(result[0].meninggal);
    }});
});
</script>
<div class="kuraorange kurashadow">
<div class="kuracard-body img-card">
<div class="d-flex">
<div class="kuralogoindo"> <img src="https://kawalcorona.com/uploads/indonesia-PZq.png" width="50" height="50" alt="Positif"> </div>
<p class="kuracountry">COVID-19 INDONESIA</p>
<p class="kuracorona"><b> <span id='terjangkit' class="kurapositif"></span></b> POSITIF, <b><span id='sembuh' class="kurasembuh"></span></b> SEMBUH, <br/><b><span id='meninggal' class="kurameninggal"></span></b> MENINGGAL</p>
<p class="kuraupdate">Update Hari ini: <span id="date"></p>
</div>
</div>
</div>
<style>
.kuracard-body {margin: 0;padding: 20px;position: relative;}
.kurashadow{box-shadow: 0 5px 10px rgba(19, 191, 166, 0.3) !important;}
.img-card:before {content: '';position: absolute;background: url(https://kawalcorona.com/data/images/svgs/circle.svg);background-position: top right;background-repeat: no-repeat;width: 100%;height: 100%;opacity: 0.8;right:0px;top:0px}
.kuralogoindo {float: right;position: relative;top: 5px;}
.kuraorange {background: #FF7E00;color: #fff !important;}
.kuracountry{font-size:30px;margin:0px !important}
.kuracorona{padding:5px 0px;margin:0px !important;line-height:30px}
.kuraupdate{font-size:20px;margin:0px !important}
.kurapositif{padding:5px 7px 5px 5px;background: #f82649!important;}
.kurasembuh{padding:5px 7px 5px 5px;background: #09ad95!important;}
.kurameninggal{padding:5px 7px 5px 5px;background: #d43f8d !important;}
</style>
@stop
@section('content')
<div id="bigWrapper" class="relative">
    <nav id="MobileNav" class="clearfix">
        <div id="get_mobile_nav" class="container">
            <!--#get_mobile_nav is used in shop-->
            <ul id="menu-english-main-menu-1" class="menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-1040">
                    <a href="/" aria-current="page">Home</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1014">
                    <a href="/productmenu">Distribution worldwide</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1015">
                    <a href="/company">Company</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1006">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a class="menu_click shopButtonModalWindow" href="javascript:void(0)">SHOP</a>
                </li>
            </ul>
        </div>
    </nav><!-- /site-nav -->
    <!-- Check if is home page and apply slider -->

    <div id="homeSliderHolder" class="clearfix" style="background: rgb(28, 104, 157); opacity: 0.99;">
        <div id="HomeleftSlider" class="slick-initialized slick-slider" role="toolbar">
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 4047px;" role="listbox">
                    <div class="sliderItem slick-slide slick-current slick-active" style="background-image: url(&quot;https://www.sanosil.com/wp-content/uploads/2015/12/shutterstock_243751723-schmal-1.jpg&quot;); position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; height: 425px; width: 1349px;"data-slick-index="0" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide00">
                        <div class="container slider_Container">
                            <a class="fancybox-media videoPlay activeVideoPlay" href="http://www.youtube.com/embed/1XTci6in0MM" tabindex="0">
                                <img src="{{asset('web_sanosil/images/slider_playvideo.png')}}" alt="play">
                            </a>
                            <div class="sliderContent">
                                <h2 class="slider_content_title">PT. Pratamindo Mitra Rizky</h2>
                                <div class="slider_content_text">
                                    Sanosil AG - Indonesia, Distributor produk Sanosil
                                    Disinfectants &amp; Chemicals
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliderItem slick-slide" style="background-image: url(&quot;https://www.sanosil.com/wp-content/uploads/2015/12/110-1.jpg&quot;); position: relative; left: -1349px; top: 0px; z-index: 998; opacity: 0; height: 425px; transition: opacity 500ms ease 0s; width: 1349px;"data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01">
                        <div class="container slider_Container">
                            <a class="fancybox-media videoPlay activeVideoPlay" href="http://www.youtube.com/embed/1XTci6in0MM" tabindex="-1">
                                <img src="{{ asset('web_sanosil/images/slider_playvideo.png') }}" alt="play">
                            </a>
                            <div class="sliderContent">
                                <h2 class="slider_content_title">Sanosil Ltd International</h2>
                                <div class="slider_content_text"> Home of the Patented Hydrogen Peroxide / Silver Sanosil Disinfectants </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliderItem slick-slide" style="background-image: url(&quot;https://www.sanosil.com/wp-content/uploads/2015/12/shutterstock_263334071-schmal.jpg&quot;); position: relative; left: -2698px; top: 0px; z-index: 998; opacity: 0; height: 425px; transition: opacity 500ms ease 0s; width: 1349px;" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02">
                        <div class="container slider_Container">
                            <a class="fancybox-media videoPlay activeVideoPlay"  href="http://www.youtube.com/embed/1XTci6in0MM" tabindex="-1">
                                <img src="{{ asset('web_sanosil/images/slider_playvideo.png') }}" alt="play">
                            </a>
                            <div class="sliderContent">
                                <h2 class="slider_content_title">Sanosil Ltd International</h2>
                                <div class="slider_content_text"> Your reliable partner for disinfectants since 1982 Made in Switzerland- </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="slick-dots">
                <li class="slick-active" aria-hidden="false">
                    <button type="button" data-role="none" role="button" aria-required="false" tabindex="0">1</button>
                </li>
                <li aria-hidden="true">
                    <button type="button" data-role="none" role="button" aria-required="false" tabindex="0">2</button>
                </li>
                <li aria-hidden="true">
                    <button type="button" data-role="none" role="button" aria-required="false" tabindex="0">3</button>
                </li>
            </ul>
        </div>
    </div>

    
    <div id="home_top_wrapper">
        <div id="home_text">
            <div class="container">
                <h1 class="blue main_title">
                Selamat datang di Sanosil AG, perusahaan kimia tepercaya dan salah satu pemasok bahan kimia utama disinfektan dan larutan disinfektan </h1>
                    <div id="home_text_wrapper">
                        <p style="text-align: justify;">
                            <strong>Siapa kita:&nbsp;</strong>
                            Sanosi AG adalah pemasok bahan kimia industri Swiss yang berspesialisasi dalam produksi internasional, distribusi di seluruh dunia dan grosir produk desinfektan Sanosil. Perusahaan ini didirikan pada tahun 1982. sebagai perusahaan kimia desinfektan, dan telah menjadi mitra dan produsen yang andal sejak saat itu, and it has been a reliable partner and manufacturer ever
                            since.
                        </p>
                        <p style="text-align: justify;">
                            <strong>Apa yang kita lakukan:&nbsp;</strong>Kami adalah pemasok bahan kimia inovatif yang berspesialisasi dalam keberhasilan produksi disinfektan super efisien selama lebih dari 35 tahun di pasar internasional. Karena penelitian dan pengembangan solusi kami yang berdedikasi, aplikasi kami yang dipatenkan dapat digunakan di berbagai industri seperti industri air, kesehatan masyarakat, manajemen fasilitas, industri makanan dan minuman dll. Produk-produk berkualitas kami yang unik, keahlian yang luas, kompetensi dan dukungan klien telah membuat kami menonjol dari massa pemasok bahan kimia industri. Lihat solusi stabil dan aplikasi aman kami dan lihat mengapa pelanggan kami percaya pada pengalaman dan keahlian lama kami.
                        </p>
                        <p style="text-align: justify;">
                            <strong>Visi kami untuk masa depan:&nbsp;</strong> Tujuan kami adalah untuk tumbuh dan berkembang dengan hati-hati dan bertanggung jawab di lingkungan yang baru dan yang sudah ada. Karena struktur pemasok yang efisien, responsif dan mitra tersertifikasi, kami bereaksi segera. Kami juga mencoba membantu klien kami dengan menyediakan keahlian konsultasi teknis berdasarkan pengetahuan yang cukup.
                            <br><br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="productLines">
    <div class="container">
            <h2 class="bigTitle off TinTitleLine upperCaseText blue">
                <span class="light">List Kategori</span> Produk Sanosil</h2>
            <div class="row">
                
            @foreach($kat as $cat)
                    <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="/kategori/{{$cat->slug}}">
                        <div class="pintagram_wrapper">
                            <div class="pintagramIconHolder">
                            <img width="92" height="92" src="/uploads/kategori/{{$cat->logo_kategori}}" alt="Logo"/>
                        </div>
                            <div class="pintagramContentHolder">
                                <h3 class="pintagramTitle white" title="Water Treatment">{{$cat->nama_kategori}}</h3>
                                <div class="pintagramContent white">{{$cat->penjelasan_kategori}}
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Section ApplicationFields -->
<div id="applicationFields">
    <div class="container">
        <h2 class="bigTitle off TinTitleLine upperCaseText white">
            <span class="light">Bidang</span> Aplikasi</h2>
        <div class="row">
            @foreach($app as $apps)
            <div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <h3 class="white upperCaseText" title="Cooling Water">
                    <a href="#">{{$apps->nama_app}}</a></h3>
                        <div class="appHolder">
                        <a href="#">
                        <img class="app_image" src="/uploads/application/{{$apps->logo_app}}" alt="app"/>
                        <img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/>
                        <div class="appOverLay">
                        <!-- <h3 class="white">#</h3> -->
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Endsection ApplicationFields -->

<!-- Section News & Update -->
<div id="productLines">
        <div class="container">
            <h2 class="bigTitle off TinTitleLine upperCaseText blue">
                <span class="light">News</span></h2>
            <div class="row clearfix ">
            @foreach($news as $n)
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class='singleCell'>
                        <div class='pageSliderHolder'>
                            <div id="single_image_wrapper" class="opacityOn"><img width="360" height="200" src="/storage/uploads/{{$n->image}}" alt=""></div>
                            <div class='cellTitleHolder blue bold'>
                                <div class='headerSquare '>*</div>
                                <h3 class='headerTitle'>{{$n->title}} </h3>
                            </div>
                            {{$n->subtitle}}
                            </div>
                            <a class="info_button" href="/news/{{$n->slug}}">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $news->links() }}
        </div>
    </div>
    <div id="productLines">
        <div class="container">
            <h2 class="bigTitle off TinTitleLine upperCaseText blue">
                <span class="light"></span> Galeri</h2>
            <div class="row clearfix ">
                @foreach($gal as $n)
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class='singleCell'>
                        <div class='pageSliderHolder'>
                            <div id="single_image_wrapper" class="opacityOn">
                            <a class="fancybox-thumb" rel="fancybox-thumb" href="/storage/uploads/galeri/{{$n->galeri}}" title="{{$n->title}}">
                                <img src="/storage/uploads/galeri/{{$n->galeri}}" alt="" />
                            </a>
                            </div>
                            <div class='cellTitleHolder blue bold'>
                                <div class='headerSquare '>*</div>
                                <h3 class='headerTitle'>{{$n->title}} </h3>
                            </div>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $gal->links() }}
        </div>
    </div>
</div>
<!-- EndSection News & Update -->
<div id="pageWrapper">
    <div class="container">
        <div class="contact-section">
            <h2 class="bigTitle off TinTitleLine upperCaseText blue bigTitleContactMargin">
                <span class='light'></span> <span class='bold'>Lokasi Kantor</span> </h2>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="contactFields addressField">
                                <div class="contactFieldHeader bold">
                                    Alamat : </div>
                                <div class="contactFieldBody">
                                Jl. Bulak Setro Indah 2 Blok B No.51, Kel. Bulak, Kec. Bulak, Kota SBY, Jawa Timur 60124</div>
                            </div>
                            <div class="contactFields telefonField">
                                <div class="contactFieldHeader bold">
                                Telepon 1 : </div>
                                <div class="contactFieldBody">
                                031 5150 1901 </div><br>
                                <div class="contactFieldHeader bold">
                                Telepon 2 : </div>
                                <div class="contactFieldBody">
                                031 6005 0192 </div><br>
                                <div class="contactFieldHeader bold">
                                Handphone: </div>
                            <div class="contactFieldBody">
                                0812 3270 413 </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="contactFields internetField">
                                <div class="contactFieldHeader bold">
                                    Website: </div>
                                <div class="contactFieldBody">
                                    <a href="/sanosil">www.sanosil.co.id</a>
                                </div>
                            </div>
                            <div class="contactFields emailField">
                                <div class="contactFieldHeader bold">
                                    E-Mail: </div>
                                <div class="contactFieldBody">
                                    <a href="mailto:pratamindo.rizky@gmail.com">pratamindo.rizky@gmail.com</a>
                                </div>
                            </div>
                            <div class="contactFields faxField">
                                <div class="contactFieldHeader bold">
                                    Fax: </div>
                                <div class="contactFieldBody">
                                031 5150 1902 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 firstImage">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15832.289979767767!2d112.782591!3d-7.232572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3518e426d1cb5914!2sPT.%20Pratamindo%20Mitra%20Rizky!5e0!3m2!1sid!2sid!4v1584611389933!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection