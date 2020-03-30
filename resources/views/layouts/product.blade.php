@extends('layouts.master')

@section('content')
<div id="bigWrapper" class="relative">
    <!-- Check if is home page and apply slider -->
    <div id="pageHeader" class="relative"
    style="background: url('{{asset('uploads/kategori')}}/{{$kategori->foto_kategori}}') no-repeat 50% 50%; background-size: cover;">
    <div class="container relative height100 222">
        <div id="pageTitleHolder">
            <h2 id="pageTitle" class="bold white">
                @if ( isset($subsubKategori) )
                {{ $subsubKategori->nama_subsubKategori }}
                @elseif ( isset($subKategori) )
                {{ $subKategori->nama_subKategori }}
                @else
                {{ ($kategori->nama_kategori) }}
                @endif
            </h2>
            <div id="pageDescription" class="white">
                @if ( isset($subsubKategori) )
                {{ $subsubKategori->penjelasan_subsubKategori }}
                @elseif ( isset($subKategori) )
                {{ $subKategori->penjelasan_subKategori }}
                @else
                {{ ($kategori->penjelasan_kategori) }}
                @endif
            </div>
        </div>
    </div>
</div>
<div id="pageWrapper">
    <div class="container">
        <div class="single-section">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div id='single_image_wrapper'>
                        <img width="470" height="375" src="{{ asset('uploads/product') }}/{{ $dataProduct->foto }}"
                        class="attachment-single-product-preview_resize size-single-product-preview_resize wp-post-image"
                        alt="" />
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 content">
                    <h1 class="bigTitle off TinTitleLine upperCaseText blue noMarginTop MarginBotSmall">
                        <span class="light">{{$dataProduct->nama}}
                        </h1>
                        <div class=""></div>
                        <div class='contentWrapper'>
                            <div class='overflowWrapper'>
                                <div class='contentGradient'></div>
                                <h2>
                                    <a class="custom_content_button content_info_button info_button white upperCaseText cetrnest"
                                    href="https://www.sanosil.com/en/downloads/" target="_blank"
                                    rel="noopener noreferrer">MSDS Download
                                </a>
                            </h2>
                            <h2>{{$dataProduct->deskripsi_singkat}}</h2>
                            <ul>
                                @foreach ($dataDeskripsi as $deskripsi)
                                {{$deskripsi}}
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div id="singleShopButton" class="white upperCaseText" data-post-id="1423">Get the product
                    </div>
                    <div id="morebutton" class="white upperCaseText">more</div>
                </div>
            </div>
        </div>
        <div class="single-section">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h2 class="bigTitle off TinTitleLine upperCaseText blue bigTitleSingleShortMargin">
                        <span class='light'>Product</span><br /><span class='bold'>details</span>
                    </h2>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class='semibold'>Application:</div>
                            <ul class='single-section-list'>
                                @foreach ($dataApplication as $application)
                                <li>{{$application}}</li>
                                @endforeach
                            </ul>
                            <div class='semibold'>Effectiveness:</div>
                            <ul class='single-section-list'>
                                @foreach ($dataEffectiveness as $effectiveness)
                                <li>{{$effectiveness}}</li>
                                @endforeach
                            </ul>
                            <div class='semibold'>Packaging:</div>
                            <ul class='single-section-list'>
                                @foreach ($dataPackaging as $packaging)
                                <li>{{$packaging}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class='semibold'>Agents:</div>
                            <div class='single-section-text'>
                                <ul>
                                    @foreach ($dataAgents as $agents)
                                    {{$agents}} <br>
                                    @endforeach
                                </ul>
                            </div>
                            <div class='semibold'>Product Type:</div>
                            <ul class='single-section-list'>
                                <li>{{$dataProduct->product_type}}</li>
                            </ul>
                            <div class='semibold'>Shelf life:</div>
                            <ul class='single-section-list'>
                                <li>{{$dataProduct->shelf_life}}</li>
                            </ul>
                            <div class='semibold'>Delivery / Storage:</div>
                            <ul class='single-section-list'>
                                <li>{{$dataProduct->delivery_storage}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(!!$dataProduct->brosur_product or !!$dataProduct->product_flyer)
        <h2 class="bigTitle off TinTitleLine upperCaseText blue light noMarginTop issuuMargin">Media {{$dataProduct->nama}}</h2>
        <div class="row taxIssuuMarginBottom row-no-margins">
            <div class="row"></div>
            <div class='row'>
                @if(!!$dataProduct->product_flyer )
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 prissuuholder">
                    <h4 class="detaildHeader blue bold upperCaseText">PRODUCT FLYER</h4>
                    <div class='h_iframe'>
                        <img class='ratio' src='{{asset('web_sanosil/placeholders/iframeBg.png')}}' />
                        <iframe  width='480' height='320' src='{{$dataProduct->product_flyer}}' frameborder='0' allowfullscreen></iframe>
                    </div>
                </div>
                @endif
                @if(!!$dataProduct->brosur_product )
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 prissuuholder">
                    <h4 class="detaildHeader blue bold upperCaseText">BROCHURE</h4>
                    <div class='h_iframe'>
                        <img class='ratio' src='{{asset('web_sanosil/placeholders/iframeBg.png')}}' />
                        <iframe  width='480' height='320' src='{{$dataProduct->brosur_product}}' frameborder='0' allowfullscreen></iframe>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>
</div>
<script src="{{ asset('web_sanosil/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('web_sanosil/js/jquery.fancybox.pack.js')}}"></script>
<link rel="stylesheet" href="{{ asset('web_sanosil/css/jquery.fancybox.css') }}" type="text/css" media="screen" />
</div>
@endsection
