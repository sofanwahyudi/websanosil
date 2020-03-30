<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') | Admin Website</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/favicon.ico')}}">
  
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('theme/node_modules/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/node_modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/node_modules/summernote/dist/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('theme/node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css')}}">



  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('theme/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('layouts.admin.nav')
      <!-- ini include nav -->
      <div class="main-sidebar">
      @include('layouts.admin.aside')
        <!-- ini include aside  -->
      </div>

      <!-- Main Content -->
      <div class="main-content">
      @yield('content')
       <!-- ini section -->
      </div>
      @include('layouts.admin.footer')
<!-- ini include footer -->
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('theme/assets/js/stisla.js')}}"></script>
  <script src="{{asset('theme/node_modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('theme/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('theme/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>

  <!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
</script>
@yield('script')
  <!-- JS Libraies -->
  <script src="{{asset('theme/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('theme/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('theme/node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>
  <script src="{{asset('theme/node_modules/summernote/dist/summernote-bs4.js')}}"></script>
  <script src="{{asset('theme/node_modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  <script src="{{asset('theme/node_modules/select2/dist/js/select2.full.min.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{asset('theme/assets/js/scripts.js')}}"></script>
  <script src="{{asset('theme/assets/js/app.js')}}"></script>
  <script src="{{asset('theme/assets/js/custom.js')}}"></script>
  <!-- Page Specific JS File -->
  <!-- <script src="{{asset('theme/assets/js/page/index.js')}}"></script> -->
</body>
</html>
