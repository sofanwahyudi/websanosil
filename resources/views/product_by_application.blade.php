@extends('layouts.master')
@section('title')
Produk
@stop
@section('content')
<div id="bigWrapper" class="relative">

    <!-- Check if is home page and apply slider -->
    <div id="pageHeader" class="relative" style="background: url('{{url('uploads/application')}}/{{ $kategori->logo_app }}') no-repeat 50% 50%; background-size: cover;">
        <div class="container relative height100 111">
            <div id="pageTitleHolder">
                <div id="pageTitle" class="bold white"> {{ $kategori->nama_app }} </div>
                <div id="pageDescription" class="white"> {{ $kategori->kategori->nama_kategori }} </div>
            </div>
        </div>
    </div>
    <div id="breadCrumbHolder">
        <div class="container">
            <ul class="clearfix" style="display: block;">
                <li>
                    <div class="bcPinHolder">
                        <a href="{{url('/')}}">
                            <img width="60" height="60" class="bcPintagramImg" src="{{url('web_sanosil/images/Home.png')}}"alt="pitagram" />
                        </a>
                        <span class="bcCatNameHolder">
                            <span class="bcCatName white">
                                <span class="bold">Kembali ke</span> <br />Beranda
                            </span>
                        </span>
                    </div>
                    <img class="bcArrow" src="{{url('web_sanosil/images/bcArrow.png')}}" />
                </li>
                <li>
                    <img width="60" height="60" src="{{url('/uploads/application')}}/{{ $kategori->logo_app }}" alt="pitagram" />
                    <span class="bcCatName bold blue">{{ $kategori->nama_app }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div id="pageWrapper">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                @if( $kategori->nama_app)
                <div class="intro_text col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="blue main_title cat_title">{{ $kategori->nama_app }}</h1>
                    <div class="intro_content">
                    </div>
                </div>
                <div class="clearfix"></div>
                @endif
                <!-- ini looping untuk produk -->
                @foreach($product as $p)
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class='singleCell'>
                        <div class='pageSliderHolder'>
                            <div id="single_image_wrapper" class="opacityOn">
                            <img width="260" height="200" src="/uploads/product/{{$p->logo_product}}" class="attachment-single-product-preview_resize size-single-product-preview_resize wp-post-image" alt=""></div>
                            <div class='cellTitleHolder blue bold'>
                                <div class='headerSquare '>*</div>
                                <h3 class='headerTitle'>{{$p->nama}}</h3>
                                <div class="text-right">
                                <a class="info_button" href="/product/{{$p->slug}}">Detail Produk</a>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                @endforeach 
                <div class="clearfix"></div>
            </div>
            @if(!!$kategori->brosur_kategori)
            <h2 class="bigTitle off TinTitleLine upperCaseText blue light noMarginTop issuuMargin">MEDIA {{ $kategori->nama_app  }}</h2>
            <div class="row taxIssuuMarginBottom row-no-margins">
                <div class="row"></div>
                <div class='row'>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 prissuuholder">
                        <h4 class="detaildHeader blue bold upperCaseText">Sanosil: Effect on Biofilms</h4>
                        <div class='h_iframe'>
                            <img class='ratio' src='{{url('web_sanosil/placeholders/iframeBg.png')}}' />
                            <iframe  width='480' height='320' src='{{$kategori->brosur_kategori }}' frameborder='0' allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
