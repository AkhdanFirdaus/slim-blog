@extends('layouts.appblog')

@section('blogcontent')
	<div class="container">
	<a class="btn btn-primary" onclick="history.go(-1)">
		<span class="fa fa-arrow-left"></span> Kembali
	</a>
	<h1>Ingin menulis sesuatu?</h1>

	@include('inc.pesan')

	{!! Form::open(['url' => '/post/edit/'.$post->id, 'method' => 'post']) !!}

	<div class="form-group">
		{{Form::label('judul', 'Judul')}}
		{{Form::text('Judul', $post->title, ['class' => 'form-control', 'placeholder' => 'Pastikan judul menarik', 'required' => 'required'])}}
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
