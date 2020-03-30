@extends('layouts.master')
@section('title')
News & Galeri
@stop
@section('content')

 <div id="bigWrapper" class="relative">
        <!-- Section News -->
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
<!-- EndSection News -->
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
    @endsection
