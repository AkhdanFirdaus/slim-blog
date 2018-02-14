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
      <div class="container-fluid">
          {!! $post->content !!}
      </div>
      <hr>
      <div class="ket">
        <div class="pull-right">
          Writted By: <a href="/author/{{ $post->authors['slug'] }} "><strong>{{ $post->authors['name'] }} </strong></a>
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
              {{Form::submit('Edit', ['class' => 'btn btn-primary btn-block'])}}
              {{ Form::token() }}
            {{ Form::close() }}
          </div>
          <div class="col-sm-6">
            {{ Form::open(['url' => '/post/hapus/'. $post->id, 'method' => 'delete']) }}
              {{Form::submit('Hapus', ['class' => 'btn btn-danger btn-block'])}}
              {{ Form::token() }}
            {{ Form::close() }}
          </div>
        </div>
        @endauth
      </div>
      <blockquote cite="Category">
          <p><a href="{{ route('categories.show', $post->category->slug) }}"><span class="label label-primary">{{ $post->category->name }}</span></a> | Category</p>
          <footer>
              @foreach ($post->tags as $key => $tag)
                  <a href="{{ route('tags.show', $tag->slug) }}"><span class="label label-default">{{ $tag->name }}</span></a>
              @endforeach
              | Tag
          </footer>
      </blockquote>

      <div class="container-fluid text-right">
          <h3>Artikel Acak</h3>
          <hr>
          @foreach ($prs as $pr)
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ $pr->slug }}"><h4>{{ $pr->title }}</h4></a></div>
                <div class="panel-body">
                    <a href="/categories/{{ $pr->category->slug }}"><span class="label label-primary">{{ $pr->category->name }}</span></a> |
                    @foreach ($pr->tags as $key => $tag)
                    <a href="/tags/{{ $tag->slug }}"><span class="label label-default">{{ $tag->name }}</span></a>
                    @endforeach
                </div>
            </div>
          @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
