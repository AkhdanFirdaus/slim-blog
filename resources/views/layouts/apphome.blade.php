<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('blog.title') }}</title>

    <link rel="stylesheet" href="{{'/css/app.css'}}">
    <link rel="stylesheet" href="{{'/css/homestyle.css'}}">
    <link rel="stylesheet" href="{{'/css/font-awesome.min.css'}}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/customscript.js') }}"></script>
</head>
<body id="page-top">
    <div class="wrapper">
        {{-- sidebar --}}
        @include('inc.sidenav')
        {{-- content --}}
        <div id="wrapper2">
          @yield('homecontent')
          @include('inc.footer')
        </div>
    </div>
</body>
</html>
