@extends('layouts.master')
@section('title')
{{$prod->nama}}
@stop
@section('content')
<div id="pageWrapper">
<div class="container">
<div id="breadCrumbHolder">
        <div class="container">
            <ul class="clearfix" style="display: block;">
                <li>
                    <div class="bcPinHolder">
                        <a href="{{url('/')}}">
                            <img width="60" height="60" class="bcPintagramImg" src="{{url('web_sanosil/images/Home.png')}}""alt="pitagram" />
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
                    <img width="60" height="60" src="{{url('/uploads/product')}}/{{$prod->logo_product}}" alt="pitagram" />
                    <span class="bcCatName bold blue">{{$prod->nama}}</span>
                </li>
            </ul>
        </div>
    </div>
<div class="single-section">
<div class="row">
<div class="col-xs-12 col-md-6 col-lg-6">
<div id='single_image_wrapper'><img width="470" height="375" src="/uploads/product/{{$prod->logo_product}}" class="attachment-single-product-preview_resize size-single-product-preview_resize wp-post-image" alt="" /></div>			        		</div>
<div class="col-xs-12 col-md-6 col-lg-6 content">
<h1 class="bigTitle off TinTitleLine upperCaseText blue noMarginTop MarginBotSmall">{{$prod->nama}}</h1>
<div class=""></div>
<div class='contentWrapper'><div class='overflowWrapper'>
<ul class='single-section-list'>
@if ($prod->deskripsi != "")
@foreach(explode(';', $prod->deskripsi) as $req) 
    <li>{{$req}}</li>
@endforeach
@endif
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="single-section">
<div class="row">
<div class="col-xs-12 col-md-12 col-lg-12">
<h2 class="bigTitle off TinTitleLine upperCaseText blue bigTitleSingleShortMargin">
<span class='light'>Produk</span><br/><span class='bold'>Detail</span></h2>
</div>
<div class="col-xs-12 col-md-12 col-lg-12">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div class='semibold'>Application:</div>
<ul class='single-section-list'>
@if ($prod->application != "")
@foreach(explode(';', $prod->application) as $req) 
    <li>{{$req}}</li>
@endforeach
@endif
</ul>
<div class='semibold'>Effectiveness:</div>
<ul class='single-section-list'>
@if ($prod->effectiveness != "")
@foreach(explode(';', $prod->effectiveness) as $req) 
    <li>{{$req}}</li>
@endforeach
@endif
</ul>
<div class='semibold'>Packaging:</div>
<ul class='single-section-list'>
@if ($prod->packaging != "")
@foreach(explode(';', $prod->packaging) as $req) 
    <li>{{$req}}</li>
@endforeach
@endif
</ul>							        	</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div class='semibold'>Agents:</div>
<ul class='single-section-text'>
@if ($prod->agents != "")
@foreach(explode(';', $prod->agents) as $req) 
    <li>{{$req}}</li>
@endforeach
@endif
</ul>
<div class='semibold'>Product Type:</div>
<ul class='single-section-list'>
<li>{{$prod->product_type}}</li>
</ul><div class='semibold'>Shelf life:</div>
<ul class='single-section-list'>
<li>{{$prod->shelf_life}}</li>
</ul>
<div class='semibold'>Delivery / Storage:</div>
<ul class='single-section-list'>
@if ($prod->delivery_storage != "")
@foreach(explode(',', $prod->delivery_storage) as $req) 
    <li>{{$req}}</li>
@endforeach
@endif
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="single-section singleSectionSeparator">
<div class="row">
</div>
<div class='row'>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 prissuuholder">
<h4 class="detaildHeader blue bold upperCaseText">Brosur</h4>
<div class='h_iframe'>
<img class='ratio' src='https://www.sanosil.com/wp-content/themes/theme_sanosil/placeholders/iframeBg.png'/>
<iframe width='480' height='320' src='{{$prod->brosur_product}}' frameborder='0' allowfullscreen>
</iframe>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 prissuuholder">
<h4 class="detaildHeader blue bold upperCaseText">Flyer</h4>
<div class='h_iframe'>
<img class='ratio' src='https://www.sanosil.com/wp-content/themes/theme_sanosil/placeholders/iframeBg.png'/>
<iframe width='480' height='320' src='{{$prod->product_flyer}}' frameborder='0' allowfullscreen>
</iframe>
</div>
</div>
</div>
<div class='row'>
</div>
</div>
<div class="single-section">
</div>
</div>
</div>
@endsection