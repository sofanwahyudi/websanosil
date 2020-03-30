@extends('layouts.master')
@section('title')
{{ $kategori->nama_kategori }}
@stop
@section('content')
<div id="bigWrapper" class="relative">

    <!-- Check if is home page and apply slider -->
    <div id="pageHeader" class="relative" style="background: url('{{url('uploads/kategori')}}/{{ $kategori->foto_kategori }}') no-repeat 50% 50%; background-size: cover;">
        <div class="container relative height100 111">
            <div id="pageTitleHolder">
                <div id="pageTitle" class="bold white"> {{ $kategori->nama_kategori }} </div>
                <div id="pageDescription" class="white"> {{ $kategori->penjelasan_kategori }} </div>
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
                    <img width="60" height="60" src="{{url('/uploads/kategori')}}/{{ $kategori->logo_kategori }}" alt="pitagram" />
                    <span class="bcCatName bold blue">{{ $kategori->nama_kategori }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div id="pageWrapper">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                @if( $kategori->judul_kategori)
                <div class="intro_text col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="blue main_title cat_title">{{ $kategori->judul_kategori }}</h1>
                    <div class="intro_content">
                    </div>
                </div>
                <div class="clearfix"></div>
                @endif
                @if(count($subkategori) > 0)
                @foreach($subkategori as $cat)
                <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <a class="section_wrapper circular_spread" href="/kategori/{{$cat->kategori['slug']}}/{{$cat->url}}">
                    <div class="pintagram_wrapper">
                        <div class="pintagramIconHolder">
                        <img width="92" height="92" src="/uploads/subkategori/{{$cat->logo_subKategori}}" alt="Logo"/>
                    </div>
                        <div class="pintagramContentHolder">
                            <h3 class="pintagramTitle white" title="Water Treatment">{{$cat->nama_subKategori}}</h3>
                            <div class="pintagramContent white">{{$cat->penjelasan_subKategori}}
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach                                    
                @else
                @foreach($kategori->product as $prod)
                    <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="/product/{{$prod->slug}}">
                        <div class="pintagram_wrapper">
                            <div class="pintagramIconHolder">
                            <img width="92" height="92" src="/uploads/product/{{$prod->foto}}" alt="Logo"/>
                        </div>
                            <div class="pintagramContentHolder">
                                <h3 class="pintagramTitle white" title="Water Treatment">{{$prod->nama}}</h3>
                                <div class="pintagramContent white">{{$prod->deskripsi_singkat}}
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
