@extends('layouts.admin.master')
@section('title')
Tambah Galeri
@stop
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{route('galeri')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke Galeri</a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Galeri</a></div>
      <div class="breadcrumb-item">Tambah Galeri</div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Galeri</h4>
          </div>
          <div class="card-body">
            @if(session()->has('message'))
              <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  {{ session()->get('message') }}
                </div>
              </div>
              @endif
              @if ($errors->any())
              <div class="alert alert-danger alert-dismissible show fade">
              <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              </div>
              <br/>
              @endif
            <form action="{{route('galery.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="form-group">
            <label class="col-form-label text-md-right">Keterangan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="title">
            </div>
          </div>
            <div class="form-group">
              <label class="col-form-label text-md-right">Gambar</label>
              <div class="col-sm-12">
                <div id="image-preview" class="image-preview">
                  <label for="image-upload" id="image-label">Choose File</label>
                  <input type="file" name="galeri" id="image-upload" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label text-md-right"></label>
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Post</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
