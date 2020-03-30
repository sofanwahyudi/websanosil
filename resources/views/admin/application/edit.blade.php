@extends('layouts.admin.master')
@section('title')
Edit Application
@stop
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{route('application')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Aplikasi</a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Aplikasi</a></div>
      <div class="breadcrumb-item">Edit Aplikasi</div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Edit Aplikasi</h4>
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
              {!! Form::model($app, ['action' => ['ApplicationProductController@update', $app->id_app], 'method' => 'PUT', 'files'=>'true']) !!}
                @csrf
                <div class="form-group {{ $errors->has('nama_app') ? 'has-error' : ''}}">
                {!! Form::label('Name') !!}
                {!! Form::text('nama_app', null, ['class'=>'form-control']) !!}
                @if($errors->has('nama_app'))
                  <span class="badge badge-danger">{{ $errors->first('nama_app') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('logo_app') ? 'has-error' : ''}}">
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
              	    <img src="/uploads/application/{{$app->logo_app}}" alt="thumbnail">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('logo_app') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('logo_app'))
              		<span class="badge badge-danger">{{ $errors->first('logo_app') }}</span>
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