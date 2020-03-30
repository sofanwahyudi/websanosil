@extends('layouts.admin.master')
@section('title')
Tambah Sub Sub Kategori
@stop
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{route('sub.prod')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Sub Sub Kategori</a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Sub Sub Kategori</a></div>
      <div class="breadcrumb-item">Tambah Sub Sub Kategori</div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Sub Sub Kategori</h4>
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
            <form action="{{route('sub_cat_prod.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_subsubKategori" class="col-md-3 control-label">Nama</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="nama_subsubKategori">
                    </div>
                </div>
                <div class="form-group">
                    <label for="judul_subsubKategori" class="col-md-3 control-label">Judul</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="judul_subsubKategori">
                    </div>
                </div>
                <div class="form-group">
                    <label for="penjelasan_subsubKategori" class="col-md-3 control-label">Penjelasan</label>
                    <div class="col-md-9">
                        <textarea class="summernote-simple" class="summernote" name="penjelasan_subsubKategori"> </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="brosur_subsubKategori" class="col-md-3 control-label">Brosur</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="brosur_subsubKategori">
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-md-3 control-label">Foto</label>
                    <div class="col-md-9">
                        <input class="form-control" type="file" name="foto_subsubKategori">
                    </div>
                </div>
                <div class="form-group">
                    <label for="logo" class="col-md-3 control-label">Logo</label>
                    <div class="col-md-9">
                        <input class="form-control" type="file" name="logo_subsubKategori">
                    </div>
                </div>
                <div class="form-group col-md-6 required ">
                <label for="name" class="control-label">Sub Kategori</label>
                    <div class="input-group">
                        <select id="subKategori_id" class="form-control select2" name="subKategori_id">
                            <option value="#">-- Pilih Sub Kategori --</option>
                            @foreach (\App\Model\SubKat::all() as $jp)
                            <option value="{{$jp->id_subKategori}}">{{$jp->nama_subKategori}}</option>
                            @endforeach
                        </select>
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