@extends('layouts.admin.master')
@section('title')
Detail {{$app->nama_app}}
@endsection
@section('content')
<section class="section">
          <div class="section-header">
          <div class="section-header-back">
            <a href="{{route('application')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Aplikasi</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Aplikasi</div>
              <div class="breadcrumb-item">Detail Aplikasi</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4><img alt="image" src="/uploads/application/{{$app->logo_app}}" class="rounded-circle author-box-picture"> {{$app->nama_app}}</h4>
                  </div>
                  <div class="card-body">
                      <div class="ticket-content">
                        <div class="ticket-header">
                          <div class="col-12 mb-4">
                            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="/uploads/application/{{$app->logo_app}}" style="background-image: /uploads/application/{{$app->logo_app}}">
                            <div class="hero-inner">
                                <h2>{{$app->nama_app}}</h2>
                                <div class="mt-4">
                                <div class="badges">
                                <span class="badge badge-primary">{{$app->kategori->nama_kategori}}</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
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