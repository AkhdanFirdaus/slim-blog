<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{'css/app.css'}}">
    <link rel="stylesheet" href="{{'css/homestyle.css'}}">
    <link rel="stylesheet" href="{{'css/font-awesome.min.css'}}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>

    {{-- sidebar --}}
    <div class="wrapper text-center navbar-fixed-left">
      <nav id="sidebar">

        {{-- sidebar Header --}}
        <div class="sidebar-header">
          <img src="/uploads/avatars/{{ $user->avatar }}" alt="" class="img-circle">
        @guest
          <div class="dropdown">
            <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h2>Guest</h2>
              <span class="caret"></span>
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
          </div>
        @else
          <div class="dropdown">
            <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h2>{{ Auth::user()->name }}</h2>
              <span class="caret"></span>
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="/profile">Profile</a></li>
              <li><a href="#">Setting</a></li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </div>
        @endguest
        </div>

        {{-- sidebar link --}}
        <div "components">
          <a href="#about">About</a>
          <a href="#pengalaman">Experience</a>
          <a href="#pendidikan">Education</a>
          <a href="#skill">Skill</a>
          <a href="#">Minat</a>
          <a href="/blog">Blog</a>
          <a href="#">Gallery</a>
        </div>
      </nav>
    </div>
    {{-- content --}}
    <div class="wrapper2 container">
      <div id="wrapper3">
        @yield('homecontent')
      </div>
    </div>

</body>
</html>
