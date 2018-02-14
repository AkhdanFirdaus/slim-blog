@extends('layouts.appblog')
{!! Html::style('css/select2.min.css') !!}

@section('blogcontent')
	<div class="container">
	<a class="btn btn-primary" onclick="history.go(-1)">
		<span class="fa fa-arrow-left"></span> Kembali
	</a>
	<h1>Edit Post?</h1>

	{!! Form::open(['url' => '/post/edit/'.$post->id, 'method' => 'post']) !!}

	<div class="form-group">
		{{Form::label('judul', 'Judul')}}
		{{Form::text('Judul', $post->title, ['class' => 'form-control', 'placeholder' => 'Pastikan judul menarik', 'required' => 'required'])}}
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
		{{Form::textarea('Konten', $post->content, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Tuangkan apa yang ingin anda tuliskan', 'required' => 'required'])}}
	</div>
	<div>
		{{Form::submit('Save changes', ['class' => 'btn btn-success'])}}
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
		$('.select2-multi').select2().val({!! json_encode($post->tags->pluck('id')) !!}).trigger('change');
	</script>
@endsection
