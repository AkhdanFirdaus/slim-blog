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
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>&nbsp;</td>
                    <td>
                        {!! Form::open(['']) !!}
                            {{Form::submit('Edit', ['class' => 'btn btn-primary btn-block'])}}
                        {!! Form::close() !!}

                        {!! Form::open(['']) !!}
                            {{Form::submit('Hapus', ['class' => 'btn btn-danger btn-block'])}}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
</div>
<section id="footer">
    <footer class="text-center row" >
        <div class="col-md-4 col-md-offset-4">
            <p>created with <i class="fa fa-heart"></i> by AkhdanFirdaus</p>
        </div>
        <div class="col-md-2 col-md-offset-2">
            <div class="side">
                <a onclick="history.go(-1)" class="btn btn-primary"><span class="fa fa-chevron-left"></span></a>
                <a href="/" class="btn btn-primary"><span class="fa fa-home"></span></a>
            </div>
        </div>
    </footer>
</section>
@endsection
