@extends('layouts.appblog')

@section('title', '| All Tags')

@section('blogcontent')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1>Tag <small>{{ $tags->count() }} tag</small></h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Jumlah Post</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $key => $tag)
                        <tr>
                            <th>{{ $tag->id }}</th>
                            <td><a href="{{ route('tags.show', $tag->slug) }}" class="label label-default">{{ $tag->name }}</a></td>
                            <td>{{ $tag->posts_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">
                <h2>New Tag</h2>
                {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name:')}}
                    {{Form::text('name', '', ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block'])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
