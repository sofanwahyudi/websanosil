@extends('layouts.admin.master')
@section('title')
Detail {{$galeri->title}}
@endsection
@section('content')
<section class="section">
          <div class="section-header">
          <div class="section-header-back">
            <a href="{{route('galeri')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Galeri</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Galeri</div>
              <div class="breadcrumb-item">Detail Galeri</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="gallery-item">
              	    <img src="/storage/uploads/galeri/{{$galeri->galeri}}" alt="thumbnail">

                    <h2>{{$galeri->title}}</h2>
              	  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection