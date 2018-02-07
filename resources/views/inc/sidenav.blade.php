<div class="navbar-fixed-bottom text-right container-fluid navigasi">
  <a href="#page-top" class="btn btn-primary"><span class="fa fa-chevron-up"></span></a>
  <button type="button" id="sidebarCollapse" class="btn btn-primary">
    Toggle Sidebar
  </button>
</div>
<div class="text-center navbar-fixed-left">
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
          <li><a type="button" data-toggle="modal" data-target="#loginModal"><span class="fa fa-sign-in"></span> Login</a>
          <li><a type="button" data-toggle="modal" data-target="#registerModal"><span class="fa fa-address-book"></span> Register</a></li>
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
    <div class="components">
      <br>
      @auth ('web')
        <a href="/post/tulis">Tulis</a>
      @endauth
      <a href="/#post">Post</a>
      <a href="/#gallery">Gallery</a>
      <a href="/#about">About</a>
      <a href="/#contact">Contact</a>
    </div>
  </nav>
</div>

<div class="permodalan">
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      @include('auth.login')
    </div>
  </div>

  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      @include('auth.register')
    </div>
  </div>
</div>
