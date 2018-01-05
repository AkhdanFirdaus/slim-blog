@extends('layouts.app')

@section('content')
		<h2>{{ $posts->title }}</h2>
		<em>({{ $posts->created_at->format('M jS Y g:ia') }})</em>
		<hr>
		<p>
			{{ str_limit($posts->content) }}
		</p>
@endsection