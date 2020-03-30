@extends('layouts.admin.master')
@section('title')
Detail {{$subsub->nama_subsubKategori}}
@endsection
@section('content')
<section class="section">
          <div class="section-header">
          <div class="section-header-back">
            <a href="{{route('sub.prod')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Sub Sub Kategori</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Sub Sub Kategori</div>
              <div class="breadcrumb-item">Detail Sub Sub Kategori</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4><img alt="image" src="/uploads/subsubkategori/{{$subsub->logo_subsubKategori}}" class="rounded-circle author-box-picture"> {{$subsub->nama_subsubKategori}}</h4>
                  </div>
                  <div class="card-body">
                      <div class="ticket-content">
                        <div class="ticket-header">
                          <!-- <div class="ticket-sender-picture img-shadow">
                            <img style="max-width:700px;" src="/uploads/subsubkategori/{{$subsub->foto_subsubKategori}}" alt="image">
                          </div> -->
                          <div class="col-12 mb-4">
                            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="/uploads/subsubkategori/{{$subsub->foto_subsubKategori}}" style="background-image: /uploads/subsubkategori/{{$subsub->foto_subsubKategori}}">
                            <div class="hero-inner">
                                <h2>{{$subsub->penjelasan_subsubKategori}}</h2>
                                <p class="lead">{{$subsub->judul_subsubKategori}}</p>
                                <div class="mt-4">
                                <div class="badges">
                                <span class="badge badge-primary">Primary</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="ticket-description">
                          <p>{{$subsub->brosur_subsubKategori}}</p>
                          <p>{{$subsub->kategori->nama_subsubKategori}}</p>
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