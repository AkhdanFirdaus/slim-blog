@extends('layouts.appblog')

@section('blogcontent')
	<div class="container">
	<a class="btn btn-primary" onclick="history.go(-1)">
		<span class="fa fa-arrow-left"></span> Kembali
	</a>
	<h1>Ingin menulis sesuatu?</h1>

	{!! Form::open(['url' => '/post/tulis', 'enctype' => 'multipart/form-data', 'method' => 'post']) !!}

	<div class="form-group">
		{{Form::label('post_image', 'Post Image')}}
		{{Form::file('post_image')}}
	</div>

	<div class="form-group">
		{{Form::label('judul', 'Judul')}}
		{{Form::text('Judul', '', ['class' => 'form-control', 'placeholder' => 'Pastikan judul menarik', 'required' => 'required'])}}
	</div>

	<div class="form-group">
		{{Form::label('category_id', 'Categories')}}
		{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}﻿
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
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
	<script>
	 var editor = document.getElementById("editor");
		 CKEDITOR.replace(editor,{
		 language:'en-gb'
	 });
	 CKEDITOR.config.allowedContent = true;
</script>
@endsection
