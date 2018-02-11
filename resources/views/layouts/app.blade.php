<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('blog.title') }}</title>

    <link rel="stylesheet" href="{{'/css/app.css'}}">
    <link rel="stylesheet" href="{{'/css/authstyle.css'}}">
    <link rel="stylesheet" href="{{'/css/font-awesome.min.css'}}">

</head>
<body id="page-top">

    <div class="container">
        @include('inc.pesan')
    </div>

    @yield('autentikasi')
</body>
</html>
