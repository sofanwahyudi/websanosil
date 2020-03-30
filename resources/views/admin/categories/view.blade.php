@extends('layouts.admin.master')
@section('title')
Detail {{$cat->nama_kategori}}
@endsection
@section('content')
<section class="section">
          <div class="section-header">
          <div class="section-header-back">
            <a href="{{route('categories')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Kategori</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Kategori</div>
              <div class="breadcrumb-item">Detail Kategori</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4><img alt="image" src="/uploads/kategori/{{$cat->logo_kategori}}" class="rounded-circle author-box-picture"> {{$cat->nama_kategori}}</h4>
                  </div>
                  <div class="card-body">
                      <div class="ticket-content">
                        <div class="ticket-header">
                          <div class="col-12 mb-4">
                            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="/uploads/kategori/{{$cat->foto_kategori}}" style="background-image: /uploads/kategori/{{$cat->foto_kategori}}">
                            <div class="hero-inner">
                                <h2>{{$cat->penjelasan_kategori}}</h2>
                                <p class="lead">{{$cat->judul_kategori}}</p>
                                <div class="mt-4">
                                <div class="badges">
                                
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="ticket-description">
                          <p>{{$cat->brosur_kategori}}</p>
                          </div>
                          <div class="ticket-divider"></div>
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