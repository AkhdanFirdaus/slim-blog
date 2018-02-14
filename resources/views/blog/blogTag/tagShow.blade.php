@extends('layouts.appblog')

@section('title', "| $tag->name Tag")

@section('blogcontent')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Tag {{ $tag->name }} <small>{{ $tag->posts()->count() }} Posts</small></h1>
        </div>
        @auth ('web')
            <div class="col-md-offset-2 col-md-1">
                <a href="{{ route('tags.edit', $tag->slug) }}" class="btn btn-primary btn-block" style="margin-top: 20px;">Edit</a>
            </div>
            <div class="col-md-1">
                {!! Form::open(['route' => ['tags.destroy', $tag->slug], 'method' => 'DELETE']) !!}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 20px;'])}}
                {!! Form::close() !!}
            </div>
        @endauth
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tag->posts as $key => $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td><span class="label label-primary">{{ $post->Category->name }}</span></td>
                            <td>
                                @foreach ($post->tags as $key => $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
