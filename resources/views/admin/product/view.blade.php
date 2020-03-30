@extends('layouts.admin.master')
@section('title')
Detail {{$prod->nama}}
@endsection
@section('content')
<section class="section">
          <div class="section-header">
          <div class="section-header-back">
            <a href="{{route('product')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Product</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Produk</div>
              <div class="breadcrumb-item">Detail Produk</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4><img alt="image" src="/uploads/product/{{$prod->logo_product}}" class="rounded-circle author-box-picture"> {{$prod->nama}}</h4>
                  </div>
                  <div class="card-body">
                      <div class="ticket-content">
                        <div class="ticket-header">
                          <div class="col-12 mb-4">
                            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="/uploads/product/{{$prod->foto}}" style="background-image: /uploads/product/{{$prod->foto}}">
                            <div class="hero-inner">
                                <h2>{{$prod->nama}}</h2>
                                <div class="mt-4">
                                <div class="badges">
                                @if(count($prod->categories) > 0)
                                @foreach($prod->categories as $c)
                                <span class="badge badge-success">Kategori : {{$c->nama_kategori}}</span>
                                @endforeach
                                @else
                                <span class="badge badge-warning">Tidak Ada Kategori</span>
                                @endif
                                @if(count($prod->subcategories) > 0)
                                @foreach($prod->subcategories as $c)
                                <span class="badge badge-primary">SubKategori : {{$c->nama_subKategori}}</span>
                                @endforeach
                                @else
                                <span class="badge badge-warning">Tidak Ada Kategori</span>
                                @endif
                                @if(count($prod->sub2categories) > 0)
                                @foreach($prod->sub2categories as $c)
                                <span class="badge badge-danger">Sub2Kategori : {{$c->nama_subsubKategori}}</span>
                                @endforeach
                                @else
                                <span class="badge badge-warning">Tidak Ada Kategori</span>
                                @endif
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                          <div class="ticket-divider"></div>
                        Deskripsi Singkat :  {{$prod->deskripsi_singkat}}<br>
                        Deskripsi:  {{$prod->deskripsi}}<br>
                        Effectiveness:  {{$prod->affectiveness}}<br>
                        Packaging:  {{$prod->packaging}}<br>
                        Agents:  {{$prod->agents}}<br>
                        Type:  {{$prod->product_type}}<br>
                        Shelf:  {{$prod->shelf_life}}<br>
                        Delivery:  {{$prod->delivery_storage}}<br>
                        Flyer:  {{$prod->product_flyer}}<br>
                        Brosur:  {{$prod->brosur_product}}<br>
                        Slug:  {{$prod->slug}}<br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection