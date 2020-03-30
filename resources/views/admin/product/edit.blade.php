@extends('layouts.admin.master')
@section('title')
Edit Produk 
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="{{route('product')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i> Kembali Ke List Produk</a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Produk</a></div>
      <div class="breadcrumb-item">Edit Produk</div>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Edit Produk  {{$product->nama}}</h4>
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
              {!! Form::model($product, ['action' => ['ProductController@update', $product->id], 'method' => 'PUT', 'files'=>'true']) !!}
                @csrf
                <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('Nama') !!}
                {!! Form::text('nama', null, ['class'=>'form-control']) !!}
                @if($errors->has('nama'))
                  <span class="badge badge-danger">{{ $errors->first('nama') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('deskripsi_singkat') ? 'has-error' : ''}}">
                {!! Form::label('Deskripsi Singkat') !!}
                {!! Form::textarea('deskripsi_singkat', null, ['class'=>'summernote-simple']) !!}
                @if($errors->has('deskripsi_singkat'))
                  <span class="badge badge-danger">{{ $errors->first('deskripsi_singkat') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : ''}}">
                  {!! Form::label('Deskripsi') !!}
                  {!! Form::textarea('deskripsi', null, ['class'=>'summernote-simple']) !!}
                  @if($errors->has('deskripsi'))
                    <span class="badge badge-danger">{{ $errors->first('deskripsi') }}</span>
                  @endif
              </div>
              <div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
              {!! Form::label('Foto Produk') !!}
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
              	    <img src="/uploads/product/{{$product->foto}}" alt="thumbnail">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('foto') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('foto'))
              		<span class="badge badge-danger">{{ $errors->first('logo_product') }}</span>
              	@endif
              </div>
              <div class="form-group {{ $errors->has('application') ? 'has-error' : ''}}">
                {!! Form::label('Applikasi') !!}
                {!! Form::text('application', null, ['class'=>'form-control']) !!}
                @if($errors->has('application'))
                  <span class="badge badge-danger">{{ $errors->first('application') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('effectiveness') ? 'has-error' : ''}}">
                {!! Form::label('Effectiveness') !!}
                {!! Form::text('effectiveness', null, ['class'=>'form-control']) !!}
                @if($errors->has('effectiveness'))
                  <span class="badge badge-danger">{{ $errors->first('effectiveness') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('packaging') ? 'has-error' : ''}}">
                {!! Form::label('Packaging') !!}
                {!! Form::text('packaging', null, ['class'=>'form-control']) !!}
                @if($errors->has('packaging'))
                  <span class="badge badge-danger">{{ $errors->first('packaging') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('agents') ? 'has-error' : ''}}">
                {!! Form::label('Agents') !!}
                {!! Form::text('agents', null, ['class'=>'form-control']) !!}
                @if($errors->has('agents'))
                  <span class="badge badge-danger">{{ $errors->first('agents') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('product_type') ? 'has-error' : ''}}">
                {!! Form::label('Tipe Produk') !!}
                {!! Form::text('product_type', null, ['class'=>'form-control']) !!}
                @if($errors->has('product_type'))
                  <span class="badge badge-danger">{{ $errors->first('product_type') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('shelf_life') ? 'has-error' : ''}}">
                {!! Form::label('Shelf Life') !!}
                {!! Form::text('shelf_life', null, ['class'=>'form-control']) !!}
                @if($errors->has('self_life'))
                  <span class="badge badge-danger">{{ $errors->first('shelf_life') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('delivery_storage') ? 'has-error' : ''}}">
                {!! Form::label('Delivery Storage') !!}
                {!! Form::text('delivery_storage', null, ['class'=>'form-control']) !!}
                @if($errors->has('delivery_storage'))
                  <span class="badge badge-danger">{{ $errors->first('delivery_storage') }}</span>
                @endif
              </div>
              <!-- <div class="form-group {{ $errors->has('logo_product') ? 'has-error' : ''}}">
                {!! Form::label('Logo') !!}
                {!! Form::text('logo_product', null, ['class'=>'form-control']) !!}
                @if($errors->has('logo_product'))
                  <span class="badge badge-danger">{{ $errors->first('logo_product') }}</span>
                @endif
              </div> -->
              <div class="form-group {{ $errors->has('logo_product') ? 'has-error' : ''}}">
              {!! Form::label('Logo Produk') !!}
              	<div class="fileinput fileinput-new" data-provides="fileinput">
              	  <div class="gallery-item">
              	    <img src="/uploads/product/{{$product->logo_product}}" alt="thumbnail">
              	  </div>
              	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                  </div>
              	  <div>
              	    {!! Form::file('logo_product') !!}
              		</span>
              	  </div>
              	</div>

              	@if($errors->has('logo_product'))
              		<span class="badge badge-danger">{{ $errors->first('logo_product') }}</span>
              	@endif
              </div>
              <div class="form-group {{ $errors->has('product_flyer') ? 'has-error' : ''}}">
                {!! Form::label('Flyer Produk ') !!}
                {!! Form::text('product_flyer', null, ['class'=>'form-control']) !!}
                @if($errors->has('product_flyer'))
                  <span class="badge badge-danger">{{ $errors->first('product_flyer') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('brosur_product') ? 'has-error' : ''}}">
                {!! Form::label('Brosur Produk') !!}
                {!! Form::text('brosur_product', null, ['class'=>'form-control']) !!}
                @if($errors->has('brosur_product'))
                  <span class="badge badge-danger">{{ $errors->first('brosur_product') }}</span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('ketegori') ? 'has-error' : ''}}">
                <label>Kategori</label>
                <select id="kategori[]" class="form-control select2" name="kategori[]" multiple>
                    <option value="#">-- Pilih Kategori --</option>
                    @foreach (\App\Model\KatProd::all() as $jp)
                    @foreach($product->categories as $pt)
                    <option value="{{$jp->id}}" {{ ( $jp->id == $pt->id) ? 'selected' : '' }} >{{$jp->nama_kategori}}</option>
                    @endforeach
                    @endforeach
                </select>
              </div>
              <div class="form-group {{ $errors->has('subketegori') ? 'has-error' : ''}}">
                <label>Sub Kategori</label>
                <select id="subkategori[]" class="form-control select2" name="subkategori[]" multiple>
                    <option value="#">-- Pilih Sub Kategori --</option>
                    @foreach (\App\Model\SubKat::all() as $jp)
                    @foreach($product->subcategories as $pt)
                    <option value="{{$jp->id_subKategori}}" {{ ( $jp->id_subKategori == $pt->id_subKategori) ? 'selected' : '' }} >{{$jp->nama_subKategori}}</option>
                    @endforeach
                    @endforeach
                </select>
              </div>
              <div class="form-group {{ $errors->has('subsubketegori') ? 'has-error' : ''}}">
                <label>Sub2 Kategori</label>
                <select id="subsubkategori[]" class="form-control select2" name="subsubkategori[]" multiple>
                    <option value="#">-- Pilih Sub2 Kategori --</option>
                    @foreach (\App\Model\SubKatProd::all() as $jp)
                    @foreach($product->sub2categories as $pt)
                    <option value="{{$jp->id_subsubKategori}}" {{ ( $jp->id_subsubKategori == $pt->id_subsubKategori) ? 'selected' : '' }} >{{$jp->nama_subsubKategori}}</option>
                    @endforeach
                    @endforeach
                </select>
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