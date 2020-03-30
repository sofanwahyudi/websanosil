@extends('layouts.admin.master')
@section('title')
News & Update
@stop
@section('content')
<section class="section">
          <div class="section-header">
          <a href="{{route('news.create')}}" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i> Tambah Post Baru</a>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Post</a></div>
              <div class="breadcrumb-item">Daftar Post</div>
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
                            <th>Judul</th>
                            <th>Waktu Posting</th>
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
    ajax: "{{route('news.json')}}",
    columns: [
        // { data: 'checkbox', orderable:false, searchable:false },
        { data: 'title', name: 'title'},
        { data: 'waktu', name: 'waktu'},
        { data: 'action', orderable:false, searchable:false },
    ]
    }
    );
});
</script>