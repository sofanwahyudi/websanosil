@extends('layouts.master')

@section('content')
<div id="bigWrapper" class="relative">
    <div id="pageHeader" class="relative" style="background: url('{{asset('uploads/subkategori')}}/{{$dataSubKategori->foto_subKategori}}') no-repeat 50% 50%; background-size: cover;">
        <div class="container relative height100 111">
            <div id="pageTitleHolder">
                <div id="pageTitle" class="bold white">{{ $dataSubKategori->nama_subKategori }}</div>
                <div id="pageDescription" class="white"> {{ $dataSubKategori->penjelasan_subKategori }} </div>
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
                            <img width="60" height="60" src="{{asset('uploads/kategori')}}/{{  $kategori->logo_kategori }}" alt="pitagram" />
                        </a>
                        <span class="bcCatNameHolder">
                            <span class="bcCatName white">
                                <span class="bold">Go back to</span> <br /> {{  $kategori->nama_kategori }}
                            </span>
                        </span>
                    </div>
                    <img class="bcArrow" src="{{asset('web_sanosil/images/bcArrow.png')}}" />
                </li>
                <li>
                    <img width="60" height="60" src="{{asset('uploads/subkategori')}}/{{  $dataSubKategori->logo_subKategori }}" alt="pitagram" />
                    <span class="bcCatName bold blue">{{ $dataSubKategori->nama_subKategori }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div id="pageWrapper">
        <div class="container">
            <div class="row">
                @if($dataSubKategori->judul_subKategori )
                <div class="intro_text col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="blue main_title cat_title">{{ $dataSubKategori->judul_subKategori }}</h1>
                    <div class="intro_content">
                    </div>
                </div>
                <div class="clearfix"></div>
                @endif
                @foreach ($datasubsubKategori as $subsubKategori)
                <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="{{ url()->current() }}/subsubkategori/{{$subsubKategori->id_subsubKategori}}">
                        <div class="pintagram_wrapper">
                            <div class="pintagramIconHolder">
                                <img width="92" height="92" src="{{asset('/uploads/subsubkategori')}}/{{$subsubKategori->logo_subsubKategori}}" alt="Logo">
                            </div>
                            <div class="pintagramContentHolder">
                                <h3 class="pintagramTitle test">{{ $subsubKategori->nama_subsubKategori }}</h3>
                                <div class="pintagramContent">{{ $subsubKategori->penjelasan_subsubKategori }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if(!!$dataSubKategori->brosur_subKategori)
            <h2 class="bigTitle off TinTitleLine upperCaseText blue light noMarginTop issuuMargin">Media {{ $dataSubKategori->nama_subKategori }}</h2>
            <div class="row taxIssuuMarginBottom row-no-margins">
                <div class="row"></div>
                <div class='row'>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 prissuuholder">
                        <h4 class="detaildHeader blue bold upperCaseText">BROCHURE</h4>
                        <div class='h_iframe'>
                            <img class='ratio' src='{{asset('web_sanosil/placeholders/iframeBg.png')}}' />
                            <iframe  width='480' height='320' src='{{$dataSubKategori->brosur_subKategori}}' frameborder='0' allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
