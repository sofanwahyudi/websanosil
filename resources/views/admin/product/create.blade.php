@extends('layouts.admin.master')
@section('title')
Tambah Produk
@stop
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{route('product')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Produk</a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Produk</a></div>
      <div class="breadcrumb-item">Tambah Produk</div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Produk</h4>
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
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                            <label for="nama" class="col-md-3 control-label">Nama</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_singkat" class="col-md-3 control-label">Deskripsi Singkat</label>
                            <div class="col-md-9">
                                <textarea class="summernote-simple" class="summernote" name="deskripsi_singkat"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="col-md-3 control-label">Deskripsi</label>
                            <div class="col-md-9">
                                <textarea class="summernote-simple" class="summernote" name="deskripsi"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-md-3 control-label">Foto</label>
                            <div class="col-md-9">
                                <input class="form-control" type="file" name="foto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="application" class="col-md-3 control-label">Applikasi</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="application">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="effectiveness" class="col-md-3 control-label">Effectiveness</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="effectiveness">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="packaging" class="col-md-3 control-label">Packaging</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="packaging">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agents" class="col-md-3 control-label">Agents</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="agents">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_type" class="col-md-3 control-label">Tipe Produk</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="product_type">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shelf_life" class="col-md-3 control-label">Shelf Life</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="shelf_life">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="delivery_storage" class="col-md-3 control-label">Delivery Storage</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="delivery_storage">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logo_product" class="col-md-3 control-label">Logo</label>
                            <div class="col-md-9">
                                <input class="form-control" type="file" name="logo_product">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_flyer" class="col-md-3 control-label">Flyer Produk</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="product_flyer">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="brosur_product" class="col-md-3 control-label">Brosur Produk</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="brosur_product">
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('ketegori') ? 'has-error' : ''}}">
                <label>Kategori</label>
                <select id="kategori[]" class="form-control select2" name="kategori[]" multiple>
                    <option value="#">-- Pilih Kategori --</option>
                    @foreach (\App\Model\KatProd::all() as $jp)
                    <option value="{{$jp->id}}">{{$jp->nama_kategori}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group {{ $errors->has('subketegori') ? 'has-error' : ''}}">
                <label>Sub Kategori</label>
                <select id="subkategori[]" class="form-control select2" name="subkategori[]" multiple>
                    <option value="#">-- Pilih Sub Kategori --</option>
                    @foreach (\App\Model\SubKat::all() as $jp)
                    <option value="{{$jp->id_subKategori}}" >{{$jp->nama_subKategori}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group {{ $errors->has('subsubketegori') ? 'has-error' : ''}}">
                <label>Sub2 Kategori</label>
                <select id="subsubkategori[]" class="form-control select2" name="subsubkategori[]" multiple>
                    <option value="#">-- Pilih Sub2 Kategori --</option>
                    @foreach (\App\Model\SubKatProd::all() as $jp)
                    <option value="{{$jp->id_subsubKategori}}">{{$jp->nama_subsubKategori}}</option>
                    @endforeach
                </select>
              </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Simpan">
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