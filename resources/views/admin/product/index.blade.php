@extends('layouts.admin.master')
@section('title')
Produk 
@endsection
@section('content')
<section class="section">
          <div class="section-header">
          <a href="{{route('product.create')}}" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i> Tambah Produk Baru</a>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Produk</a></div>
              <div class="breadcrumb-item">Daftar Produk</div>
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
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Sub Kategori</th>
                            <th>Sub2 Kategori</th>
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
    ajax: "{{route('product.json')}}",
    columns: [
        // { data: 'checkbox', orderable:false, searchable:false },
        { data: 'foto', name: 'foto', render: function( data, type, full, meta ) {
            if (data == null) {
                return "<img src=\"/image/default.png\" height=\"50\"/>";
            } else {
                return "<img src=\"/uploads/product/" + data + "\" height=\"100\"/>";
            }
                    } },
        { data: 'nama', name: 'nama'},
        { data: 'kategori', name: 'kategori', render : function(data, type, row) {
              return '<span class="badge badge-success">'+data+'</span>'
          }  },
          { data: 'subkategori', name: 'subkategori', render : function(data, type, row) {
              return '<span class="badge badge-primary">'+data+'</span>'
          }  },
          { data: 'sub2kategori', name: 'sub2kategori', render : function(data, type, row) {
              return '<span class="badge badge-danger">'+data+'</span>'
          }  },
        { data: 'action', orderable:false, searchable:false },
    ]
    }
    );
});
</script>