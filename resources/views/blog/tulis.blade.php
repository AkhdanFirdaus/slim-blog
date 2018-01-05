@extends('layouts.app')

@section('content')
	<a href="/">
		<div class="beranda">
			<h5>Kembali</h5>
		</div>
	</a>
	<h1>Ini halaman tulis</h1>

	{!! Form::open(['url' => 'tulis/posting']) !!}

	<div class="form-group">
		{{Form::label('judul', 'Judul')}}
		{{Form::text('Judul', '', ['class' => 'form-control', 'placeholder' => 'Pastikan judul menarik'])}}
	</div>
	<div class="form-group">
		{{Form::label('konten', 'Konten')}}
		{{Form::textarea('Konten', '', ['class' => 'form-control', 'placeholder' => 'Tuangkan apa yang ingin anda tuliskan'])}}
	</div>
	<div>
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		{{Form::reset('Reset', ['class' => 'btn btn-danger'])}}
	</div>
	{!! Form::close() !!}
@endsection