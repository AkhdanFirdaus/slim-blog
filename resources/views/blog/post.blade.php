@extends('layouts.appblog')

@section('blogcontent')
  <div class="container">
    <h1>{{ $post->title }}</h1>
    <h5>{{ $post->created_at->format('M jS Y g:ia') }}</h5>
    <hr>
    <div class="gambar-post text-center">
      <img src="/posts/post_cover/{{$post->post_image}}" alt="" width="400px" height="300px">
    </div>
    {!! $post->content !!}
    <hr>
    <div class="pull-right">
      Writted By: <strong>{{ $post->author }}</strong>
      <img src="/uploads/avatars/default.jpg" alt="" class="img-circle" width="50px" height="auto">
    </div>
    <button class="btn btn-primary" onclick="history.go(-1)">
      <span class="fa fa-arrow-left"></span> Kembali
    </button>
  </div>
@endsection
