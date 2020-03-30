@extends('layouts.master')
@section('title')
Kategori {{ $subsubkategori->nama_subsubKategori }}
@stop
@section('content')
<div id="bigWrapper" class="relative">

    <!-- Check if is home page and apply slider -->
    <div id="pageHeader" class="relative" style="background: url('{{url('uploads/subsubkategori')}}/{{ $subsubkategori->foto_subsubKategori }}') no-repeat 50% 50%; background-size: cover;">
        <div class="container relative height100 111">
            <div id="pageTitleHolder">
                <div id="pageTitle" class="bold white"> {{ $subsubkategori->nama_subsubKategori }} </div>
                <div id="pageDescription" class="white"> {{ $subsubkategori->penjelasan_subsubKategori }} </div>
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
                    <a href="/kategori/{{$subsubkategori->subkategori->kategori->slug}}">
                        <img width="60" height="60" src="{{url('/uploads/kategori')}}/{{ $subsubkategori->subkategori->kategori->logo_kategori }}" alt="pitagram" />
                        <img class="bcArrow" src="{{url('web_sanosil/images/bcArrow.png')}}" />
                    </a>
                    </li>
                    <li>
                    <a href="/kategori/{{$subsubkategori->subkategori->kategori->slug}}/{{$subsubkategori->subkategori->url}}/">
                        <img width="60" height="60" src="{{url('/uploads/subkategori')}}/{{ $subsubkategori->subkategori->logo_subKategori }}" alt="pitagram" />
                        <img class="bcArrow" src="{{url('web_sanosil/images/bcArrow.png')}}" />
                    </a>
                    </li>
                    <li>
                        <img width="60" height="60" src="{{url('/uploads/subsubkategori')}}/{{ $subsubkategori->logo_subsubKategori }}" alt="pitagram" />
                        <span class="bcCatName bold blue">{{ $subsubkategori->nama_subsubKategori }}</span>
                    </li>
            </ul>
        </div>
    </div>
    <div id="pageWrapper">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                @if( $subsubkategori->judul_subsubKategori)
                <div class="intro_text col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="blue main_title cat_title">{{ $subsubkategori->judul_subsubKategori }}</h1>
                    <div class="intro_content">
                    </div>
                </div>
                <div class="clearfix"></div>
                @endif
                @if(count($subsubkategori->product) > 0)
                @foreach($subsubkategori->product as $p)
                <div class="productCells col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="/product/{{$p->slug}}">
                        <div class="pintagram_wrapper">
                            <div class="productIconHolder">
                                <img width="140" height="140" src="/uploads/product/{{$p->foto}}" class="attachment-product-preview size-product-preview wp-post-image" alt="">
                                </div>
                                <div class="productContentHolder">
                                <h3 class="productTitle test">{{$p->nama}}</h3>
                                <div class="productContent">{{$p->deskripsi_singkat}}</div>
                                <span class="cat-button">Detail Produk</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @else
                <div class="alert alert-danger">
                <h3>Maaf Produk Tidak ada !!!</h3>
                </div>
                @endif 
                <div class="clearfix"></div>
            </div>
          
        </div>
    </div>
</div>
@endsection
