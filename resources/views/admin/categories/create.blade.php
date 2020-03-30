@extends('layouts.admin.master')
@section('title')
Tambah Kategori Produk
@stop
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{route('categories')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Kategori</a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Produk</a></div>
      <div class="breadcrumb-item">Tambah Kategori </div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Kategori </h4>
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
            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama" class="col-md-3 control-label">Nama</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="nama_kategori">
                    </div>
                </div>
                <div class="form-group">
                    <label for="judul" class="col-md-3 control-label">Judul</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="judul_kategori">
                    </div>
                </div>
                <div class="form-group">
                    <label for="penjelasan" class="col-md-3 control-label">Penjelasan</label>
                    <div class="col-md-9">
                        <textarea class="summernote-simple" class="summernote" name="penjelasan_kategori"> </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="brosur" class="col-md-3 control-label">Brosur</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="brosur_kategori">
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-md-3 control-label">Foto</label>
                    <div class="col-md-9">
                        <input class="form-control" type="file" name="foto_kategori">
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-md-3 control-label">Logo</label>
                    <div class="col-md-9">
                        <input class="form-control" type="file" name="logo_kategori">
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
@section('script')
<script src="{{asset('theme/node_modules/summernote/dist/summernote-bs4.js')}}"></script>
@endsection