@extends('layouts.admin.master')
@section('title')
Categories Product  
@endsection
@section('content')
<section class="section">
          <div class="section-header">
          <a href="{{route('categories.create')}}" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i> Tambah Kategori Produk</a>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kategori</a></div>
              <div class="breadcrumb-item">Daftar Kategori</div>
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
                            <th>Judul</th>
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
    ajax: "{{route('categories.json')}}",
    columns: [
        // { data: 'checkbox', orderable:false, searchable:false },
        { data: 'logo_kategori', name: 'logo_kategori', render: function( data, type, full, meta ) {
            if (data == null) {
                return "<img src=\"/image/default.png\" height=\"50\"/>";
            } else {
                return "<img src=\"/uploads/kategori/" + data + "\" height=\"100\"/>";
            }
                    } },
                { data: 'foto_kategori', name: 'foto_kategori', render: function( data, type, full, meta ) {
        if (data == null) {
            return "<img src=\"/image/default.png\" height=\"50\"/>";
        } else {
            return "<img src=\"/uploads/kategori/" + data + "\" width=\"300\"/>";
        }
                } },
        { data: 'nama_kategori', name: 'nama_kategori'},
        // { data: 'penjelasan_kategori', name: 'penjelasan_kategori'},
        { data: 'action', orderable:false, searchable:false },
    ]
    }
    );
});
</script>