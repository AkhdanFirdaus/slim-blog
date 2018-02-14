@extends('layouts.app')

@section('autentikasi')
<section id="profile">
    <div class="jumbotron text-center">
        <img src="/authors/avatars/{{$user->avatar}}" alt="" class="img-circle img-thumbnail">
        <h1>{{$user->name}}</h1>
        <p class="lead">{{$user->job}}</p>
    </div>
</section>
<div class="container">
    <section>
        <blockquote>
          <p>{{$user->quote}}</p>
          <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
    </section>
    <section>
        <div class="jumbotron">
            <p>{{$user->about}}</p>
        </div>
    </section>
    <section>
        <h2 class="text-center">Posts
            @foreach ($ups as $key => $up)
                <span class="badge">{{ $up->posts_count }}</span>
            @endforeach
            | <small><a href="/post/tulis" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Tulis</a></small></h2>
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th>Cover</th>
                <th>Post</th>
                <th>Categories</th>
                <th>Tags</th>
                <th class="text-center">Action</th>
            </tr>
            @foreach ($user->posts as $index => $post)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td><img src="/posts/post_cover/{{ $post->post_image }}" alt="" width="72px" height="54px"></td>
                    <td><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></td>
                    <td><span class="label label-primary">{{ $post->category->name }}</span></td>
                    <td>
                        @foreach ($post->tags as $key => $tag)
                            <span class="label label-default">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        {{ Form::open(['url' => '/post/edit/'.$post->id, 'method' => 'get']) }}
                            {{Form::submit('Edit', ['class' => 'btn btn-primary btn-block'])}}
                            {{ Form::token() }}
                        {!! Form::close() !!}

                        {{ Form::open(['url' => '/post/hapus/'. $post->id, 'method' => 'delete']) }}
                            {{Form::submit('Hapus', ['class' => 'btn btn-danger btn-block'])}}
                            {{ Form::token() }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
</div>
@include('inc.footer')
@endsection
