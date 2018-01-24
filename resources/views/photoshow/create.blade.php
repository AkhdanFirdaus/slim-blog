@extends('layouts.appgallery')

@section('galcontent')
  <h3>Create Album</h3>

  {!! Form::open(['url' => '/gallery/create', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Album Name'])}}
    </div>

    <div class="form-group">
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Album Description'])}}
    </div>

    <div class="form-group">
      {{Form::file('cover_image')}}
    </div>

    <div class="form-group">
      {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
@endsection
