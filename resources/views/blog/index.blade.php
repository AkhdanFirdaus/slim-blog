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
	<ul>
		@foreach ($posts as $post)
		<li>
			<a href="/{{$post->slug}}">{{ $post->title }}</a>
			<em>({{ $post->created_at->format('M jS Y g:ia') }})</em>
			<p>
				{{ str_limit($post->content) }}
			</p>
		</li>
		@endforeach
	</ul>
	<hr>
	{!! $posts->render() !!}
@endsection
