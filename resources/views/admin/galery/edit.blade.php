@extends('layouts.admin.master')
@section('title')
Edit Post
@stop
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{route('galeri')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Galeri</a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Galeri</a></div>
      <div class="breadcrumb-item">Edit Galeri</div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Edit Galeri</h4>
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
              {!! Form::model($galeri, ['action' => ['GaleryController@update', $galeri->id], 'method' => 'PUT', 'files'=>'true']) !!}
                @csrf
                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('Keterangan') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                @if($errors->has('title'))
                  <span class="badge badge-danger">{{ $errors->first('title') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('galeri') ? 'has-error' : ''}}">
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
              	    <img src="/storage/uploads/galeri/{{$galeri->galeri}}" alt="thumbnail">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('galeri') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('galeri'))
              		<span class="badge badge-danger">{{ $errors->first('galeri') }}</span>
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