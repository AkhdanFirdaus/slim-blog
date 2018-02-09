@extends('layouts.appblog')

@section('blogcontent')
	<div class="container">
			@include('inc.pesan')
			<h5>
				@if (Request::is('post/search'))
					<h2>
							<a class="btn btn-primary" onclick="history.go(-1)">
					  		<span class="fa fa-arrow-left"></span> Kembali
					  	</a>
							<small>{{$msg}}</small>
					</h2>
				@else
					<div class="text-center">
						Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}
					</div>
				@endif
			</h5>
			<hr>
			@if ($posts->isEmpty())
				<div class="panel">
					<div class="panel-body">
						<h2>Maaf Postingan tidak ditemukan</h2>
					</div>
				</div>

			@endif
			<div class="row">
			@foreach ($posts as $count => $post)
				@if ($count % 3 == 0)
				</div><div class="row">
				@endif
			<div class="col-md-4" style="margin-bottom: 30px;">
				<div class="post">
					<a href="/post/{{$post->slug}}"><img src="/posts/post_cover/{{$post->post_image}}" alt=""></a>
					<div class="caption">
						<strong><h3><a href="/post/{{$post->slug}}">{{ $post->title }}</a></h3></strong>
						<p>{{ $post->author }} - <em>({{ $post->created_at->format('M jS Y') }})</em></p>
					</div>
				</div>
			</div>
			@endforeach
			</div>
			<div class="text-center">
				{!! $posts->render() !!}
			</div>
			<hr>
	</div>
@endsection
