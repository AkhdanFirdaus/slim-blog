@extends('layouts.app')

@section('content')	
	<h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
	<hr>	
	<ul>
		@foreach ($posts as $post)
		<li>
			<a href="/blog/lihat/{{$post->id}}">{{ $post->title }}</a>
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
