@extends('layouts.admin.master')
@section('title')
Galeri
@stop
@section('content')
<section class="section">
          <div class="section-header">
          <a href="{{route('galery.create')}}" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i> Tambah Galeri Baru</a>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Galeri</a></div>
              <div class="breadcrumb-item">Daftar Galeri</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="datatable">
                        <thead>
                          <tr>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#datatable').DataTable(
    {
    processing: true,
    serverSide: true,
    ajax: "{{route('galeri.json')}}",
    columns: [
        { data: 'galeri', name: 'galeri', render: function( data, type, full, meta ) {
            if (data == null) {
                return "<img src=\"/image/default.png\" height=\"50\"/>";
            } else {
                return "<img src=\"/storage/uploads/galeri/" + data + "\" height=\"100\"/>";
            }
                    } },
        { data: 'title', name: 'title'},
        { data: 'action', orderable:false, searchable:false },
    ]
    }
    );
});
</script>