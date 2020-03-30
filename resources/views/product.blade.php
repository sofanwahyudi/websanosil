@extends('layouts.master')
@section('title')
Produk
@stop
@section('content')

<div id="bigWrapper" class="relative">
    <div id="productLines">
        <div class="container">
            <div id="pageHeader" class="relative" style="background: url('http://localhost:8000/web_sanosil/uploads/2015/09/50-Medium-980x452.jpg') no-repeat 50% 50%; background-size: cover;">
                <div class="container relative height100 111">
                    <div id="pageTitleHolder">
                        <div id="pageTitle" class="bold white"> Produk </div>
                        <div id="pageDescription" class="white"> Klik Detail Produk Untuk Informasi</div>
                    </div>
                </div>
            </div>
        <div class="container">
        <div class="text-center">
                    <input id="search" name="search" type="search" placeholder="Cari Produk...." aria-label="Search" data-width="350" style="width:350px;">
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    <div id="product_list"></div> 
        </div>
        </div>
        
        <hr>
        <div id="breadCrumbHolder">
            <div class="container">
            <div class="col-md-8 ">
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
                        <a href="/kategori/product">
                        <img width="60" height="60" class="bcPintagramImg" src="https://static.thenounproject.com/png/11030-200.png"alt="pitagram" />
                        </a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        </div>
        <br>
        <div class="container">
        <div class="row">
            @foreach($product as $p)
            <div class="productCells col-xs-12 col-sm-12 col-md-6 col-lg-6" id="product_list">
            <a class="section_wrapper circular_spread" href="/product/{{$p->slug}}">
            <div class="pintagram_wrapper">
            <div class="productIconHolder">
            <img width="140" height="140" src="/uploads/product/{{$p->foto}}" class="attachment-product-preview size-product-preview wp-post-image" alt="">
            </div>
            <div class="productContentHolder">
            <h3 class="productTitle" id="nama_produk">{{$p->nama}}</h3>
            <div class="productContent" id="nama_produk">{{$p->deskripsi_singkat}}</div>
            <span class="cat-button">Detail Produk</span>
            </div>
            </div>
            </a>
            </div>
            @endforeach
        </div>
        {{$product->links()}}
        </div>
    </div>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script type="text/javascript">
            $(document).ready(function () {
                $('#search').on('keyup',function() {
                    var query = $(this).val();
                    $.ajax({
                        url:"{{ route('search.product') }}",
                        type:"GET",
                        data:{'search':query},
                        success:function (data) {
                           // console.log(data.id);
                            $('#product_list').html(data);
                        }
                    })
                    // end ajax
                });

                // // initiate a click function on each search result
                // $(document).on('click', 'li', function(){
                //     // declare the value in the input field to a variable
                //     var value = $(this).text();
                //     // assign the value to the search box
                //     $('#search').val(value);
                //     // after click is done, search results segment is made empty
                //     $('#product_list').html("");
                // });
            });
        </script> -->

<script>
$(document).ready(function(){
    function getData()
    {
        var nama = document.getElementById('nama_produk');
        var y = nama.innerHTML;
        console.log(y);
    }
})
</script>