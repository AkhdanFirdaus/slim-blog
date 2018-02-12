@extends('layouts.appblog')

@section('title', '| All Categories')

@section('blogcontent')
<div class="container">
@if (Request::is('post/categories'))
    @auth ('web')
    <div class="row">
        <div class="col-md-9">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <td><a href="/post/categories/{{ $category->slug }}" class="label label-primary">{{ $category->name }}</a></td>
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
            <h2>Kategori <small></small><label for="" class="label label-primary">{{ $categories->name }}</label></small></h2>
            <hr>
            @foreach ($categories->posts as $index => $post)
                <div class="media">
                  <div class="media-left media-middle">
                    <a href="/post/{{ $post->slug }}">
                      <img class="media-object" src="/posts/post_cover/{{ $post->post_image }}" alt="..." width="72px" height="72px">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">{{ $post->title }}</h4>
                    <p><a href="/author/{{ $post->authors['slug'] }}">{{ $post->authors['name'] }}</a> - <em>({{ $post->created_at->format('M jS Y') }})</em></p>
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
                  <a href="/post/categories/{{ $cats->slug }}" class="list-group-item">{{ $cats->name }}</a>
              @endforeach
            </div>
        </div>
    </div>
@endif
</div>
@endsection
