@extends('layouts.appblog')

@section('title', '| ' . e($post->title))

@section('blogcontent')
<div class="bgtop" style="background-image: url('/posts/post_cover/{{$post->post_image}}');"></div>
<div class="container" style="margin-top: 70px;">
  <div class="row">
    <div class="col-md-9"  style="padding: 30px;background-color: #fff;">
        <h1>{{ $post->title }} <small>{{ $post->created_at->format('M jS Y g:ia') }}</small></h1>
        <hr>
        <div class="gambar-post text-center">
            <img src="/posts/post_cover/{{$post->post_image}}" alt="">
        </div>
        {!! $post->content !!}
        <hr>
        <div class="ket">
            <div class="pull-right" style="margin-top: -10px;">
                Writted By: <a href="/author/{{ $post->authors['slug'] }} "><strong>{{ $post->authors['name'] }} </strong></a>
                <img src="/authors/avatars/{{ $post->authors['avatar'] }} " alt="" class="img-circle" width="50px" height="auto">
            </div>
            <h2>Komentar <span class="fa fa-comment"></span> {{ $post->comments()->count() }}</h2>
        </div>
        <hr>
        <div class="comments">
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
                @auth ('web')
                    <div class="media-right">
                        {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!}

                        <div class="form-group">
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        </div>

                        {!! Form::close() !!}
                    </div>
                @endauth
                <hr>
            </div>
            @endforeach
        </div>
        <div class="commentform">
            <h2>Ingin berkomentar?</h2>
            {!! Form::open(['route' => ['comments.store', $post->slug], 'method' => 'POST']) !!}
            @if (Auth::check())
              <div></div>
            @else
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
            @endif
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

    {{-- sisi kanan --}}
    <div class="col-md-3" style="margin-top: 350px;">
        @auth ('web')
            <div class="well">
                <dl class="dl-horizontal info">
                    <dt>Created at:</dt>
                    <dd>{{ $post->created_at->format('M jS Y g:ia') }}</dd>
                </dl>
                <dl class="dl-horizontal info">
                    <dt>Last updated:</dt>
                    <dd>{{ $post->updated_at->format('M jS Y g:ia') }}</dd>
                </dl>
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
            </div>
        @endauth
      <blockquote cite="Category">
          <p><a href="{{ route('categories.show', $post->category->slug) }}"><span class="label label-primary">{{ $post->category->name }}</span></a></p>
          <footer>
              @foreach ($post->tags as $key => $tag)
                  <a href="{{ route('tags.show', $tag->slug) }}"><span class="label label-default">{{ $tag->name }}</span></a>
              @endforeach
          </footer>
      </blockquote>
      <hr>
      <div class="container-fluid text-right">
          <h3>Artikel Acak</h3>
          <hr>
          @foreach ($prs as $pr)
              <div class="post" style="margin-bottom: 20px;">
                  <a href="{{ $pr->slug }}"><img src="/posts/post_cover/{{$pr->post_image}}" alt="" width="90px" height="90px"></a>
                  <div class="caption">
                      <div class="text">
                          <p><strong><a href="{{ $pr->slug }}">{{ $pr->title }}</a></strong></p>
                          <p>
                              @foreach ($pr->tags as $key => $tag)
                                  <a href="{{ route('tags.show', $tag->slug) }}"><span class="label label-default">{{ $tag->name }}</span></a>
                              @endforeach
                          </p>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
