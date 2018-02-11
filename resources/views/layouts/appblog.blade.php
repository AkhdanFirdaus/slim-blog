@extends('layouts.apphome')

@section('homecontent')

@include('inc.judul')

<div class="container">
    @include('inc.pesan')
</div>

@yield('blogcontent')

@endsection
