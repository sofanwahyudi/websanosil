@extends('layouts.admin.master')
@section('title')
Edit Sub Sub Kategori
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
      <div class="breadcrumb-item">Edit Sub Sub Kategori</div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Edit Sub Sub Kategori {{$subsub->nama_subsubKategori}}</h4>
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
              {!! Form::model($subsub, ['action' => ['SubCaregoriesProductController@update', $subsub->id_subsubKategori], 'method' => 'PUT', 'files'=>'true']) !!}
                @csrf
                <div class="form-group {{ $errors->has('nama_subsubKategori') ? 'has-error' : ''}}">
                    {!! Form::label('Nama') !!}
                    {!! Form::text('nama_subsubKategori', null, ['class'=>'form-control']) !!}
                    @if($errors->has('nama_subsubKategori'))
                    <span class="badge badge-danger">{{ $errors->first('nama_subsubKategori') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('judul_subsubKategori') ? 'has-error' : ''}}">
                    {!! Form::label('Judul') !!}
                    {!! Form::text('judul_subsubKategori', null, ['class'=>'form-control']) !!}
                    @if($errors->has('judul_subsubKategori'))
                    <span class="badge badge-danger">{{ $errors->first('judul_subsubKategori') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('penjelasan_subsubKategori') ? 'has-error' : ''}}">
                    {!! Form::label('Penjelasan') !!}
                    {!! Form::textarea('penjelasan_subsubKategori', null, ['class'=>'summernote-simple']) !!}
                    @if($errors->has('penjelasan_subsubKategori'))
                    <span class="badge badge-danger">{{ $errors->first('penjelasan_subsubKategori') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('brosur_subsubKategori') ? 'has-error' : ''}}">
                    {!! Form::label('Brosur') !!}
                    {!! Form::text('brosur_subsubKategori', null, ['class'=>'form-control']) !!}
                    @if($errors->has('brosur_subsubKategori'))
                    <span class="badge badge-danger">{{ $errors->first('brosur_subsubKategori') }}</span>
                    @endif
                </div>
              <div class="form-group {{ $errors->has('foto_subsubKategori') ? 'has-error' : ''}}">
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
                    <img src="/uploads/subsubkategori/{{$subsub->foto_subsubKategori}}" alt="thumbnail" style="max-width: 200px; max-height: 150px;">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('foto_subsubKategori') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('foto_subsubKategori'))
              		<span class="badge badge-danger">{{ $errors->first('foto_subsubKategori') }}</span>
              	@endif
              </div>
              <div class="form-group {{ $errors->has('logo_subsubKategori') ? 'has-error' : ''}}">
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
                    <img src="/uploads/subsubkategori/{{$subsub->logo_subsubKategori}}" alt="thumbnail" style="max-width: 200px; max-height: 150px;">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('logo_subsubKategori') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('logo_subsubKategori'))
              		<span class="badge badge-danger">{{ $errors->first('logo_subsubKategori') }}</span>
              	@endif
              </div>
              <div class="form-group col-md-6 required ">
            <label for="name" class="control-label">Sub Kategori Produk</label>
                <div class="input-group">
                    <select id="subKategori_id" class="form-control select2" name="subKategori_id">
                        <option value="#">-- Pilih Sub Kategori --</option>
                        @foreach(\App\Model\SubKat::all() as $jp)
                        <option value="{{$jp->id_subKategori}}">{{$jp->nama_subKategori}}</option>
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