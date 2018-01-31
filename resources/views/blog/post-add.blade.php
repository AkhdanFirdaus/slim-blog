@extends('layouts.appblog')

@section('content')
	<a class="btn btn-primary" onclick="history.go(-1)">
		&laquo; Kembali
	</a>
	<h1>Ingin menulis sesuatu?</h1>

	@include('inc.pesan')

	{!! Form::open(['url' => '/blog/tulis/posting', 'enctype' => 'multipart/form-data']) !!}

	<div class="form-group">
		{{Form::label('post_image', 'Post Image')}}
		{{Form::file('post_image')}}
	</div>

	<div class="form-group">
		{{Form::label('judul', 'Judul')}}
		{{Form::text('Judul', '', ['class' => 'form-control', 'placeholder' => 'Pastikan judul menarik', 'required' => 'required'])}}
	</div>
	<div class="form-group">
		{{Form::label('konten', 'Konten')}}
		{{Form::textarea('Konten', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Tuangkan apa yang ingin anda tuliskan', 'required' => 'required'])}}
	</div>
	<div>
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		{{Form::reset('Reset', ['class' => 'btn btn-danger'])}}
	</div>
	{!! Form::close() !!}
@endsection
