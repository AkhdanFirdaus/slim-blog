@extends('layouts.apphome')
<link rel="stylesheet" href="{{'/css/galstyle.css'}}">

@section('homecontent')
<div class="container wrapper4">
  @include('inc.galnav')
  @include('inc.pesan')
  @yield('galcontent')
</div>
@endsection
