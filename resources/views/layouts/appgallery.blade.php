@extends('layouts.apphome')
{!! Html::style('css/galstyle.css') !!}

@section('homecontent')
  <div class="container gal">
    @include('inc.galnav')
    @include('inc.pesan')
    @yield('galcontent')
  </div>
@endsection
