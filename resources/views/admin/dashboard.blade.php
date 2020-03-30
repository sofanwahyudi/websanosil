@extends('layouts.admin.master')
@section('title')
Dashboard
@stop
@section('content')
<section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-cube"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Produk</h4>
                  </div>
                  <div class="card-body">
                    {{$product->count()}} Produk
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-images"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Galeri</h4>
                  </div>
                  <div class="card-body">
                    {{$galeri->count()}} Foto
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Post</h4>
                  </div>
                  <div class="card-body">
                    {{$allpost->count()}} Post
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-filter"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kategori</h4>
                  </div>
                  <div class="card-body">
                    {{$kategori->count()}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-angle-double-right"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Sub Kategori</h4>
                  </div>
                  <div class="card-body">
                    {{$subkat->count()}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-cubes"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Sub2 Kategori</h4>
                  </div>
                  <div class="card-body">
                    {{$sub2kat->count()}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Latest Post</h4>
                  <div class="card-header-action">
                    <a href="{{route('news')}}" class="btn btn-danger">Lihat Semua Post <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Judul</th>
                        <th>Tgl Post</th>
                        <th>Action</th>
                      </tr>
                      @foreach($post as $p)
                      <tr>

                        <td>{{$p->title}}</td>
                        <td><div class="badge badge-warning">{{$p->created_at->diffForHumans()}}</div></td>
                        <td><a target="_blank" href="/news/{{$p->slug}}" class="btn btn-primary">Detail</a></td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                    <i class="far fa-question-circle"></i>
                  </div>
                  <h4>{{date('d M')}}</h4>
                  <div class="card-description">{{date('D, d M Y')}}</div>
                  <span id="txt"></span>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    <a href="#" class="ticket-item">
                      <div class="ticket-title">
                        <h4>UPDATE COVID-19 INDONESIA</h4>
                      </div>
                      <div class="ticket-info">
                     
              <!-- Widget -->
              <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-smile-beam"></i>
                  <span class="badge badge-success" id="sembuh"></span>
                </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2" >
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-user-injured"></i>
                  <span class="badge badge-warning" id="terjangkit"></span>
                </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-bed"></i>
                  <span class="badge badge-danger" id="meninggal"></span>
                </div>
                </div>
                </div>
                <!-- End Widget -->
                      </div>
                    </a>
                    <!-- <a href="features-tickets.html" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>  
@endsection
@section('script')
<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
};
$(document).ready(function(){
var d = new Date();
$("#date").html(d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear());
    $.ajax({url: "https://api.kawalcorona.com/indonesia/", success: function(result){
     $("#terjangkit").html(result[0].positif);
     $("#sembuh").html(result[0].sembuh);
     $("#meninggal").html(result[0].meninggal);
    }});
});
</script>
<script>
  $(document).ready(function(){
  var d = new Date();
  $("#date").html(d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear());
      $.ajax({url: "http://ip-api.com/json", success: function(result){
        $("#ip").html(result.query);
      }});
  })
  </script>
@endsection