<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{config('blog.title')}}</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/customstyle.css') }}">
</head>
<body>
	@include('layouts.nav')	
	<div class="judul">
		@yield('judul')
	</div>
	<div class="wadah">
		<div class="container">			
			@yield('content')
		</div>	
	</div>	
	<div class="footer text-center">
		2018 &copy; AkhdanFirdaus
	</div>
</body>
</html>