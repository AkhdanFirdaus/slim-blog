@extends('layouts.app')

@section('content')	
	@include('inc.pesan')
	<h5>
		@if (Request::is('/'))
			Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}
		@else
			<a class="btn btn-primary" onclick="history.go(-1)">
		      &laquo; Kembali
		    </a>
			{{$msg}}
		@endif	
	</h5>	
	<hr>
	@if ($posts->isEmpty())
		Maaf Postingan tidak ditemukan
	@endif
	@foreach ($posts as $post)
	<div class="row konten">
		<div class="col-md-6 kiri">
			<h2 class="text-center">Gambar</h2>
		</div>
		<div class="col-md-6 kanan">		
			<em>({{ $post->created_at->format('M jS Y g:ia') }})</em>
			<h3><a href="/{{$post->slug}}">{{ $post->title }}</a></h3>
			<p>
				{{ str_limit($post->content) }}
			</p>
			<hr>
			Writted By: {{ $post->author }}
		</div>
	</div>
	@endforeach
	<hr>
	{!! $posts->render() !!}
@endsection
