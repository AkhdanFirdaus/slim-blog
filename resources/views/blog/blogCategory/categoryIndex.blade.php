@extends('layouts.appblog')

@section('title', '| All Categories')

@section('blogcontent')
<div class="container">
@if (Request::is('categories'))
    @auth ('web')
    <div class="row">
        <div class="col-md-9">
            <h1>Categories <small>{{ $categories->count() }} category</small></h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Jumlah Post</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $category)
                        <tr>
                            <th>{{ $index+1 }}</th>
                            <td><a href="categories/{{ $category->slug }}" class="label label-primary">{{ $category->name }}</a></td>
                            <td>{{ $category->posts_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">
                <h2>New Category</h2>
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name:')}}
                    {{Form::text('name', '', ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block'])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endauth
@else
    <div class="row">
        <div class="col-md-9">
            <h2>Kategori {{ $categories->name }} <small>{{$categories->posts()->count() }} Posts</small></h2>
            <hr>
            @foreach ($categories->posts as $index => $post)
                <div class="media">
                  <div class="media-left">
                    <a href="/post/{{ $post->slug }}">
                      <img class="media-object" src="/posts/post_cover/{{ $post->post_image }}" alt="..." width="72px" height="72px">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">{{ $post->title }}</h4>
                    <p><a href="/author/{{ $post->authors['slug'] }}">{{ $post->authors['name'] }}</a> - <em>({{ $post->created_at->format('M jS Y') }})</em></p>
                    <p>
                        @foreach ($post->tags as $key => $tag)
                            <span class="label label-default">{{ $tag->name }}</span>
                        @endforeach
                    </p>
                  </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Kategori lainnya
              </a>
              @foreach ($category as $key => $cats)
                  <a href="/categories/{{ $cats->slug }}" class="list-group-item">{{ $cats->name }} <span class="badge">{{ $cats->posts_count }}</span></a>
              @endforeach
            </div>
        </div>
    </div>
@endif
</div>
@endsection
