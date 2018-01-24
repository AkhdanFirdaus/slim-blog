@extends('layouts.apphome')
<link rel="stylesheet" href="{{'/css/galstyle.css'}}">

@section('homecontent')
  @include('inc.galnav')
  @include('inc.pesan')
  @yield('galcontent')
@endsection
