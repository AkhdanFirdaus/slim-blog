<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('blog.title') }} @yield('title')</title>

    {!! Html::style('css/app.css') !!}
    {!! Html::style('css/homestyle.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js') !!}
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

    {!! Html::script('js/app.js') !!}
    {!! Html::script('js/customscript.js') !!}
</body>
</html>
