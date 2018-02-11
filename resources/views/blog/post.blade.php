@extends('layouts.appblog')

@section('blogcontent')
<div class="container">
  <h1>{{ $post->title }}</h1>
  <h5>{{ $post->created_at->format('M jS Y g:ia') }}</h5>
  <hr>
  <div class="row">
    <div class="col-md-9">
      <div class="gambar-post text-center">
        <img src="/posts/post_cover/{{$post->post_image}}" alt="">
      </div>
      {!! $post->content !!}
      <hr>
      <div class="ket">
        <div class="pull-right">
          Writted By: <a href="author/{{ $post->authors['slug'] }} "><strong>{{ $post->authors['name'] }} </strong></a>
          <img src="/authors/avatars/{{ $post->authors['avatar'] }} " alt="" class="img-circle img-thumbnail" width="50px" height="auto">
        </div>
        <a class="btn btn-primary" onclick="history.go(-1)">
          <span class="fa fa-arrow-left"></span> Kembali
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well">
        <dl class="dl-horizontal info">
          <dt>Created at:</dt>
          <dd>{{ $post->created_at->format('M jS Y g:ia') }}</dd>
        </dl>
        <dl class="dl-horizontal info">
          <dt>Last updated:</dt>
          <dd>{{ $post->updated_at->format('M jS Y g:ia') }}</dd>
        </dl>
        @auth ('web')
        <hr>
        <div class="row">
          <div class="col-sm-6">
            {{ Form::open(['url' => '/post/edit/'.$post->id, 'method' => 'get']) }}
              <button type="submit" class="btn btn-primary btn-block">Edit</button>
              {{ Form::token() }}
            {{ Form::close() }}
          </div>
          <div class="col-sm-6">
            {{ Form::open(['url' => '/post/hapus/'. $post->id, 'method' => 'delete']) }}
              <button type="submit" class="btn btn-danger btn-block">Hapus</button>
              {{ Form::token() }}
            {{ Form::close() }}
          </div>
        </div>
        @endauth
      </div>

      {{-- @foreach ($postrandoms as $postrandom)
        <dl>
          <dt>{{ $postrandom->title }}</dt>
          <dd>{{ $postrandom->created_at->format('M jS Y g:ia') }}</dd>
        </dl>
      @endforeach --}}
    </div>
  </div>
</div>
@endsection
