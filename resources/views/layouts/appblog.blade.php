@extends('layouts.apphome')

@section('homecontent')

<div class="container">
    @include('inc.pesan')
</div>

@yield('blogcontent')

@endsection
