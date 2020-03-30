@extends('layouts.admin.master')
@section('title')
Edit Sub Kategori
@stop
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{route('sub.cat')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Sub Kategori</a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Sub Kategori</a></div>
      <div class="breadcrumb-item">Edit Sub Kategori</div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Edit Sub Kategori {{$sub->nama_subKategori}}</h4>
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
              {!! Form::model($sub, ['action' => ['SubCategoriesController@update', $sub->id_subKategori], 'method' => 'PUT', 'files'=>'true']) !!}
                @csrf
                <div class="form-group {{ $errors->has('nama_subKategori') ? 'has-error' : ''}}">
                    {!! Form::label('Nama') !!}
                    {!! Form::text('nama_subKategori', null, ['class'=>'form-control']) !!}
                    @if($errors->has('nama_subKategori'))
                    <span class="badge badge-danger">{{ $errors->first('nama_subKategori') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('judul_subKategori') ? 'has-error' : ''}}">
                    {!! Form::label('Judul') !!}
                    {!! Form::text('judul_subKategori', null, ['class'=>'form-control']) !!}
                    @if($errors->has('judul_subKategori'))
                    <span class="badge badge-danger">{{ $errors->first('judul_subKategori') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('penjelasan_subKategori') ? 'has-error' : ''}}">
                    {!! Form::label('Penjelasan') !!}
                    {!! Form::textarea('penjelasan_subKategori', null, ['class'=>'summernote-simple']) !!}
                    @if($errors->has('penjelasan_subKategori'))
                    <span class="badge badge-danger">{{ $errors->first('penjelasan_subKategori') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('brosur_subKategori') ? 'has-error' : ''}}">
                    {!! Form::label('Brosur') !!}
                    {!! Form::text('brosur_subKategori', null, ['class'=>'form-control']) !!}
                    @if($errors->has('brosur_subKategori'))
                    <span class="badge badge-danger">{{ $errors->first('brosur_subKategori') }}</span>
                    @endif
                </div>
              <div class="form-group {{ $errors->has('foto_subKategori') ? 'has-error' : ''}}">
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
                    <img src="/uploads/subkategori/{{$sub->foto_subKategori}}" alt="thumbnail" style="max-width: 200px; max-height: 150px;">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('foto_subKategori') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('foto_subKategori'))
              		<span class="badge badge-danger">{{ $errors->first('foto_subKategori') }}</span>
              	@endif
              </div>
              <div class="form-group {{ $errors->has('logo_subKategori') ? 'has-error' : ''}}">
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
                    <img src="/uploads/subkategori/{{$sub->logo_subKategori}}" alt="thumbnail" style="max-width: 200px; max-height: 150px;">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('logo_subKategori') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('logo_subKategori'))
              		<span class="badge badge-danger">{{ $errors->first('logo_subKategori') }}</span>
              	@endif
              </div>
              <div class="form-group col-md-6 required ">
            <label for="name" class="control-label">Kategori Produk</label>
                <div class="input-group">
                    <select id="kategori_id" class="form-control select2" name="kategori_id">
                        <option value="#">-- Pilih Kategori --</option>
                        @foreach (\App\Model\KatProd::all() as $jp)
                        <option value="{{$jp->id}}" {{ ( $jp->id == '') ? 'selected' : '' }} >{{$jp->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-form-label text-md-right"></label>
              <div class="col-sm-12">
              {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
</section>
@endsection