@extends('layouts.appblog')

@section('title', '| ' . e($post->title))

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
      <hr>
      <div class="comments container-fluid">
          <h2>Komentar <span class="fa fa-comment"></span> {{ $post->comments()->count() }}</h2>
        @foreach ($post->comments as $key => $comment)
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object img-circle" src="/authors/avatars/default.jpg" alt="..." title="{{ $comment->email }}" width="72px" height="72px">
                    </a>
                </div>
                <div class="media-body">
                    <h3 class="media-heading">{{ $comment->name }} <small>{{ $comment->created_at->format('M jS Y g:ia') }}</small></h3>
                    <p>{{ $comment->comment }}</p>
                </div>
                <hr>
            </div>
        @endforeach
      </div>
      <div class="commentform container-fluid">
          <h2>Ingin berkomentar?</h2>
          {!! Form::open(['route' => ['comments.store', $post->slug], 'method' => 'POST']) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nama']) }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('email', 'E-Mail') }}
                        {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-Mail']) }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('comment', 'Comment') }}
                        {{ Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Comment']) }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::submit('Add Comment', ['class' => 'btn btn-success form-control'])}}
                    </div>
                </div>
            </div>
          {!! Form::close() !!}
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
          <p>Category | <a href="{{ route('categories.show', $post->category->slug) }}"><span class="label label-primary">{{ $post->category->name }}</span></a></p>
          <footer>
              @foreach ($post->tags as $key => $tag)
                  <a href="{{ route('tags.show', $tag->slug) }}"><span class="label label-default">{{ $tag->name }}</span></a>
              @endforeach
          </footer>
      </blockquote>

      <div class="container-fluid text-right">
          <h3>Artikel Acak</h3>
          <hr>
          @foreach ($prs as $pr)
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ $pr->slug }}"><h4>{{ $pr->title }}</h4></a></div>
                <div class="panel-body">
                    <a href="{{ route('categories.show', $pr->category->slug) }}"><span class="label label-primary">{{ $pr->category->name }}</span></a> |
                    @foreach ($pr->tags as $key => $tag)
                    <a href="{{ route('tags.show', $tag->slug) }}"><span class="label label-default">{{ $tag->name }}</span></a>
                    @endforeach
                </div>
            </div>
          @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
