@extends('layouts.appblog')

@section('title', '| Edit Tags')

@section('blogcontent')
    <div class="container">
        <h2>Edit Tag</h2>
        {!! Form::model($tag, ['route' => ['tags.update', $tag->slug], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name:')}}
            {{Form::text('name', $tag->name, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Save Change', ['class' => 'btn btn-success btn-block'])}}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
