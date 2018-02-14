@extends('layouts.appblog')
{!! Html::style('css/select2.min.css') !!}

@section('blogcontent')
<div class="container">
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
		{!! Form::select('category_id', $categories, null, ['class' => 'form-control select2-single']) !!}﻿
	</div>

	<div class="form-group">
		{{Form::label('tags', 'Tags')}}
		{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) !!}﻿
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
{!! Html::script('js/select2.min.js') !!}
{!! Html::script('ckeditor/ckeditor.js') !!}
<script>
	var editor = document.getElementById("editor");
	 CKEDITOR.replace(editor,{
	 language:'en-gb'
	});
	CKEDITOR.config.allowedContent = true;

	$('.select2-single').select2();
	$('.select2-multi').select2();
</script>
@endsection
