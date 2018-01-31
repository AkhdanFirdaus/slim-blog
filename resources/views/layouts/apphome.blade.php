<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{'/css/app.css'}}">
    <link rel="stylesheet" href="{{'/css/homestyle.css'}}">
    <link rel="stylesheet" href="{{'/css/font-awesome.min.css'}}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>

    {{-- sidebar --}}
    <div class="wrapper text-center navbar-fixed-left">
      <nav id="sidebar">

        {{-- sidebar Header --}}
        <div class="sidebar-header">
          @guest
            <img src="/uploads/avatars/default.jpg" alt="" class="img-circle">
          @else
            <img src="/uploads/avatars/{{ $user->avatar }}" alt="" class="img-circle">
          @endguest
        @guest
          <div class="dropdown">
            <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h2>Guest</h2>
              <span class="caret"></span>
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="{{ route('login') }}"><span class="fa fa-sign-in"></span> Login</a></li>
              <li><a href="{{ route('register') }}"><span class="fa fa-address-book"></span> Register</a></li>
            </ul>
          </div>
        @else
          <div class="dropdown">
            <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h2>{{ Auth::user()->name }}</h2>
              <span class="caret"></span>
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="/profile"><span class="fa fa-user-circle"></span> Profile</a></li>
              <li><a href="#"><span class="fa fa-edit"></span> Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><span class="fa fa-sign-out"></span>
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
          <br>
          <a href="/#about">About</a>
          <a href="/#pengalaman">Experience</a>
          <a href="/#skill">Skill</a>      
          <a href="/blog">Blog</a>
          <a href="/gallery">Gallery</a>
        </div>
      </nav>
    </div>
    {{-- content --}}
    <div class="wrapper2">
      @yield('homecontent')
    </div>

</body>
</html>
