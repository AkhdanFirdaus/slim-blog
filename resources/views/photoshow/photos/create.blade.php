@extends('layouts.appgallery')

@section('galcontent')
  <h3>Upload Photo</h3>

  {!! Form::open(['url' => '/gallery/photos/create', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Photo Title'])}}
    </div>

    <div class="form-group">
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Photo Description'])}}
    </div>

    {{Form::hidden('album_id', $album_id)}}

    <div class="form-group">
      {{Form::file('photo')}}
    </div>

    <div class="form-group">
      {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
@endsection
