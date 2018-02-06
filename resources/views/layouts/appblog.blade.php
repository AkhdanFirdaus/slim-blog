<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('blog.title') }}</title>

    <!-- Styles -->
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/blogstyle.css') }}">
    <link rel="stylesheet" href="{{'/css/font-awesome.min.css'}}">
</head>
<body>

	@include('inc.blognav')
  @include('inc.judul')
	<div class="container">
		<div class="wadah">
			@yield('content')
		</div>
	</div>
	@include('inc.footer')

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
</body>
</html>
