@extends('layouts.appblog')

@section('title', "| $tag->name Tag")

@section('blogcontent')
<div class="tagshow"></div>
<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-md-4 col-md-offset-4">
            <div class="card" style="padding: 20px;">
              <div class="cardcapt text-center">
                <h1>
                    <span class="label label-default">Tag {{ $tag->name }}</span>
                    <br>
                    <small>{{ $tag->posts()->count() }} Posts</small>
                </h1>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, reiciendis.</p>
                @auth ('web')
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editTag">Edit Tag</button>
                            @include('blog.blogTag.tagEdit')
                        </div>
                        <div class="col-md-6">
                            {!! Form::open(['route' => ['tags.destroy', $tag->slug], 'method' => 'DELETE']) !!}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                @endauth
              </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        @foreach ($tag->posts as $index => $post)
            <div class="col-md-4">
                <div class="post">
                    <a href="{{ $post->slug }}"><img src="/posts/post_cover/{{$post->post_image}}" alt=""></a>
                    <div class="caption">
                        <div class="text">
                            <h3><a href="{{ $post->slug }}">{{ $post->title }}</a></h3>
                            <p>{!! str_limit($post->content, 50) !!}</p>
                            <hr>
                            <p><a href="/author/{{ $post->authors['slug'] }} "><strong>{{ $post->authors['name'] }} </strong></a> - {{ $post->created_at->format('M jS Y g:ia') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
