@extends('layouts.master')

@section('content')
<div id="bigWrapper" class="relative">

    <!-- Check if is home page and apply slider -->
    <div id="pageHeader" class="relative" style="background: url('{{asset('uploads/subsubkategori')}}/{{ $subsubKategori->foto_subsubKategori }}') no-repeat 50% 50%; background-size: cover;">
        <div class="container relative height100 111">
            <div id="pageTitleHolder">
                <div id="pageTitle" class="bold white"> {{ $subsubKategori->nama_subsubKategori }} </div>
                <div id="pageDescription" class="white"> {{ $subsubKategori->penjelasan_subsubKategori }} </div>
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
                    <div class="bcPinHolder">
                        <a href="{{ asset('/kategori')}}/{{ $kategori->id }}">
                            <img width="60" height="60" class="bcPintagramImg" src="{{asset('uploads/kategori')}}/{{ $kategori->logo_kategori }}"alt="pitagram" />
                        </a>
                        <span class="bcCatNameHolder">
                            <span class="bcCatName white">
                                <span class="bold">Go back to</span> <br />{{ $kategori->nama_kategori }}
                            </span>
                        </span>
                    </div>
                    <img class="bcArrow" src="{{asset('web_sanosil/images/bcArrow.png')}}" />
                </li>
                <li>
                    <div class="bcPinHolder">
                        <a href="{{ asset('/kategori')}}/{{ $kategori->id }}/{{('subkategori')}}/{{ $subKategori->id_subKategori }}">
                            <img width="60" height="60" class="bcPintagramImg" src="{{asset('uploads/subkategori')}}/{{  $subKategori->logo_subKategori }}"alt="pitagram" />
                        </a>
                        <span class="bcCatNameHolder">
                            <span class="bcCatName white">
                                <span class="bold">Go back to</span> <br />{{ $subKategori->nama_subKategori }}
                            </span>
                        </span>
                    </div>
                    <img class="bcArrow" src="{{asset('web_sanosil/images/bcArrow.png')}}" />
                </li>
                <li>
                    <img width="60" height="60" src="{{asset('/uploads/subsubkategori')}}/{{ $subsubKategori->logo_subsubKategori }}" alt="pitagram" />
                    <span class="bcCatName bold blue">{{ $subsubKategori->nama_subsubKategori }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div id="pageWrapper">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                 @if( $subsubKategori->judul_subsubKategori )
                <div class="intro_text col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="blue main_title cat_title">{{ $subsubKategori->judul_subsubKategori }}</h1>
                    <div class="intro_content">
                    </div>
                </div>
                <div class="clearfix"></div>
                @endif
                @foreach ($dataProduct as $item)
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
            @if(!!$subsubKategori->brosur_subsubKategori)
            <h2 class="bigTitle off TinTitleLine upperCaseText blue light noMarginTop issuuMargin">MEDIA {{ $subsubKategori->nama_subsubKategori }}</h2>
            <div class="row taxIssuuMarginBottom row-no-margins">
                <div class="row"></div>
                <div class='row'>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 prissuuholder">
                        <h4 class="detaildHeader blue bold upperCaseText">Sanosil: Effect on Biofilms</h4>
                        <div class='h_iframe'>
                            <img class='ratio' src='{{asset('web_sanosil/placeholders/iframeBg.png')}}' />
                            <iframe  width='480' height='320' src='{{$subsubKategori->brosur_subsubKategori}}' frameborder='0' allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
