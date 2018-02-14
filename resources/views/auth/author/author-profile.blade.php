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
            <h2>Tentang Saya</h2>
            <p>{{$user->about}}</p>
        </div>
    </section>
    <section>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Tulisan Saya</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                    @foreach ($user->posts as $index => $post)
                        <li class="list-group-item">

                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="/post/{{ $post->slug }}">
                                        <img class="media-object" src="/posts/post_cover/{{ $post->post_image }}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading">{{ $post->title }}</h4>
                                    <p>Tags
                                        @foreach ($post->tags as $key => $tag)
                                            <span class="label label-primary">{{ $tag->name }}</span>
                                        @endforeach
                                    </p>
                                </div>
                                <div class="media-right media-middle text-center">
                                    <span class="label label-primary">{{ $post->category->name }}</span>
                                    <span class="badge">{{$index+1}}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <a onclick="history.go(-1)" class="btn btn-primary"><span class="fa fa-chevron-left"></span></a>
            <a href="/" class="btn btn-primary"><span class="fa fa-home"></span></a>
        </div>
        <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Kategori lainnya
              </a>
              @foreach ($categories as $count => $category)
                  <a href="categories/{{ $category->slug }}" class="list-group-item">{{ $category->name }} <span class="badge">{{ $category->posts_count }}</span></a>
              @endforeach
            </div>
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Tag lainnya
              </a>
              @foreach ($tags as $count => $tag)
                  <a href="categories/{{ $tag->slug }}" class="list-group-item">{{ $tag->name }} <span class="badge">{{ $tag->posts_count }}</span></a>
              @endforeach
            </div>
        </div>
    </section>
</div>
@include('inc.footer')
@endsection
