@extends('layouts.admin.master')
@section('title')
Applikasi Produk 
@endsection
@section('content')
<section class="section">
          <div class="section-header">
          <a href="{{route('application.create')}}" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i> Tambah Aplikasi</a>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Aplikasi</a></div>
              <div class="breadcrumb-item">Daftar Aplikasi</div>
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
                            <th>Logo</th>
                            <th>Nama Aplikasi</th>
                            <th>Nama Kategori</th>
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
    ajax: "{{route('application.json')}}",
    columns: [
        // { data: 'checkbox', orderable:false, searchable:false },
        { data: 'logo_app', name: 'logo_app', render: function( data, type, full, meta ) {
            if (data == null) {
                return "<img src=\"/image/default.png\" height=\"50\"/>";
            } else {
                return "<img src=\"/uploads/application/" + data + "\" height=\"100\"/>";
            }
                    } },
        { data: 'nama_app', name: 'nama_app'},
        { data: 'kategori', name: 'kategori', render : function(data, type, row) {
              return '<span class="badge badge-success">'+data+'</span>'
          }  },
        { data: 'action', orderable:false, searchable:false },
    ]
    }
    );
});
</script>