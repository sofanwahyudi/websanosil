@extends('layouts.admin.master')
@section('title')
Detail {{$sub->nama_subKategori}}
@endsection
@section('content')
<section class="section">
          <div class="section-header">
          <div class="section-header-back">
            <a href="{{route('sub.cat')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Sub Kategori</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Sub Kategori</div>
              <div class="breadcrumb-item">Detail Sub Kategori</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4><img alt="image" src="/uploads/subkategori/{{$sub->logo_subKategori}}" class="rounded-circle author-box-picture"> {{$sub->nama_subKategori}}</h4>
                  </div>
                  <div class="card-body">
                      <div class="ticket-content">
                        <div class="ticket-header">
                          <div class="col-12 mb-4">
                            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="/uploads/subkategori/{{$sub->foto_subKategori}}" style="background-image: /uploads/subkategori/{{$sub->foto_subKategori}}">
                            <div class="hero-inner">
                                <h2>{{$sub->penjelasan_subKategori}}</h2>
                                <p class="lead">{{$sub->judul_subKategori}}</p>
                                <div class="mt-4">
                                <div class="badges">
                                <span class="badge badge-primary">{{$sub->kategori->nama_kategori}}</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="ticket-description">
                          <p>{{$sub->brosur_subKategori}}</p>
                          <p>{{$sub->kategori->nama_subKategori}}</p>
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