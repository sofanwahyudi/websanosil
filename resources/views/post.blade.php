@extends('layouts.master')
@section('title')
{{$blog->title}}
@endsection
@section('content')
<!-- Check if is home page and apply slider -->     
<div id="pageHeader" style="background: url('/storage/uploads/{{$blog->image}}') no-repeat 50% 50%; background-size: cover;">
<div class="container relative height100 555">
<div id="pageTitleHolder">
<!-- <h1 id="pageTitle" class="bold white">
    Disinfectant against  Coronavirus                </h1> -->
<h1 id="pageTitle"  class="bold white" >{{$blog->title}}</h1> >
</div>
</div>
</div>
<div id="pageWrapper">
<div class="container">
<h3>{{$blog->subtitle}}</h3>
<p>
{!!($blog->description)!!}
</p>
</div>
</div>

@endsection