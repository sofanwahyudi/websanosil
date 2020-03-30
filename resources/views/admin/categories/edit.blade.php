@extends('layouts.admin.master')
@section('title')
Edit Kategori
@stop
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{route('categories')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Kategori</a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Kategori</a></div>
      <div class="breadcrumb-item">Edit Kategori</div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Edit Kategori {{$categories->nama_kategori}}</h4>
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
              {!! Form::model($categories, ['action' => ['CategoriesController@update', $categories->id], 'method' => 'PUT', 'files'=>'true']) !!}
                @csrf
                <div class="form-group {{ $errors->has('nama_kategori') ? 'has-error' : ''}}">
                    {!! Form::label('Name') !!}
                    {!! Form::text('nama_kategori', null, ['class'=>'form-control']) !!}
                    @if($errors->has('nama_kategori'))
                    <span class="badge badge-danger">{{ $errors->first('nama_kategori') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('judul_kategori') ? 'has-error' : ''}}">
                    {!! Form::label('Judul') !!}
                    {!! Form::text('judul_kategori', null, ['class'=>'form-control']) !!}
                    @if($errors->has('judul_kategori'))
                    <span class="badge badge-danger">{{ $errors->first('judul_kategori') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('penjelasan_kategori') ? 'has-error' : ''}}">
                    {!! Form::label('Penjelasan') !!}
                    {!! Form::textarea('penjelasan_kategori', null, ['class'=>'summernote-simple']) !!}
                    @if($errors->has('penjelasan_kategori'))
                    <span class="badge badge-danger">{{ $errors->first('penjelasan_kategori') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('brosur_kategori') ? 'has-error' : ''}}">
                    {!! Form::label('Brosur') !!}
                    {!! Form::text('brosur_kategori', null, ['class'=>'form-control']) !!}
                    @if($errors->has('brosur_kategori'))
                    <span class="badge badge-danger">{{ $errors->first('brosur_kategori') }}</span>
                    @endif
                </div>
              <div class="form-group {{ $errors->has('foto_kategori') ? 'has-error' : ''}}">
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
                    <img src="/uploads/kategori/{{$categories->foto_kategori}}" alt="thumbnail" style="max-width: 200px; max-height: 150px;">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('foto_kategori') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('foto_kategori'))
              		<span class="badge badge-danger">{{ $errors->first('foto_kategori') }}</span>
              	@endif
              </div>
              <div class="form-group {{ $errors->has('logo_kategori') ? 'has-error' : ''}}">
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
                    <img src="/uploads/kategori/{{$categories->logo_kategori}}" alt="thumbnail" style="max-width: 200px; max-height: 150px;">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('logo_kategori') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('logo_kategori'))
              		<span class="badge badge-danger">{{ $errors->first('logo_kategori') }}</span>
              	@endif
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