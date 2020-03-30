@extends('layouts.master')

@section('content')
<div id="bigWrapper" class="relative">

    <!-- Check if is home page and apply slider -->
    <div id="pageHeader" class="relative" style="background: url('{{asset('uploads/kategori')}}/{{ $dataKategori->foto_kategori }}') no-repeat 50% 50%; background-size: cover;">
        <div class="container relative height100 111">
            <div id="pageTitleHolder">
                <div id="pageTitle" class="bold white"> {{ $dataKategori->nama_kategori }} </div>
                <div id="pageDescription" class="white"> {{ $dataKategori->penjelasan_kategori }} </div>
            </div>
        </div>
    </div>
    <div id="breadCrumbHolder">
        <div class="container">
            <ul class="clearfix" style="display: block;">
                <li>
                    <div class="bcPinHolder">
                        <a href="{{ asset('/sanosil')}}">
                            <img width="60" height="60" class="bcPintagramImg" src="{{asset('web_sanosil/images/Home.png')}}"alt="pitagram" />
                        </a>
                        <span class="bcCatNameHolder">
                            <span class="bcCatName white">
                                <span class="bold">Go back to</span> <br />Home
                            </span>
                        </span>
                    </div>
                    <img class="bcArrow" src="{{asset('web_sanosil/images/bcArrow.png')}}" />
                </li>
                <li>
                    <img width="60" height="60" src="{{asset('/uploads/kategori')}}/{{ $dataKategori->logo_kategori }}" alt="pitagram" />
                    <span class="bcCatName bold blue">{{ $dataKategori->nama_kategori }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div id="pageWrapper">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                @if( $dataKategori->judul_kategori)
                <div class="intro_text col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="blue main_title cat_title">{{ $dataKategori->judul_kategori }}</h1>
                    <div class="intro_content">
                    </div>
                </div>
                <div class="clearfix"></div>
                @endif
                @foreach ($dataProduk as $item)
                <div class="productCells col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="{{ url()->current() }}/product/{{$item->id}}">
                        <div class="pintagram_wrapper">
                            <div class="productIconHolder">
                                <img width="140" height="140" src="{{asset('uploads/product')}}/{{$item->logo_product}}"
                                class="attachment-product-preview size-product-preview wp-post-image" alt="" />
                            </div>
                            <div class="productContentHolder">
                                <h3 class="productTitle test">{{$item->nama}}</h3>
                                <div class="productContent">
                                    {{$item->deskripsi_singkat}}
                                </div>
                                <span class="cat-button">Details</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
            @if(!!$dataKategori->brosur_kategori)
            <h2 class="bigTitle off TinTitleLine upperCaseText blue light noMarginTop issuuMargin">MEDIA {{ $dataKategori->nama_kategori  }}</h2>
            <div class="row taxIssuuMarginBottom row-no-margins">
                <div class="row"></div>
                <div class='row'>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 prissuuholder">
                        <h4 class="detaildHeader blue bold upperCaseText">Sanosil: Effect on Biofilms</h4>
                        <div class='h_iframe'>
                            <img class='ratio' src='{{asset('web_sanosil/placeholders/iframeBg.png')}}' />
                            <iframe  width='480' height='320' src='{{$dataKategori->brosur_kategori }}' frameborder='0' allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
