@extends('layouts.appblog')

@section('blogcontent')
	<div class="container">
	<div class="row">
		<div class="col-md-3">
			sidebar
		</div>
		<div class="col-md-9">
			@include('inc.pesan')
			<h5>
				@if (Request::is('/post/search'))
						<a class="btn btn-primary" onclick="history.go(-1)">
					  	<span class="fa fa-arrow-left"></span> Kembali
					  </a>
						{{$msg}}
				@else
					<div class="text-center">
						Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}
					</div>
				@endif
			</h5>
			<hr>
			@if ($posts->isEmpty())
				<strong><p>Maaf Postingan tidak ditemukan</p></strong>
				<a class="btn btn-primary" onclick="history.go(-1)">
					<span class="fa fa-arrow-left"></span> Kembali
				</a>
			@endif
			@foreach ($posts as $post)
			<div class="col-md-4">
				<div class="post">
					<img src="/posts/post_cover/{{$post->post_image}}" alt="">
					<div class="caption">
						<div class="text">
							<strong><h3><a href="/post/{{$post->slug}}">{{ $post->title }}</a></h3></strong>
							<p>{{ $post->author }} - <em>({{ $post->created_at->format('M jS Y') }})</em></p>							
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<div class="text-center">
				{!! $posts->render() !!}
			</div>
			<hr>
		</div>
	</div>
	</div>
@endsection
