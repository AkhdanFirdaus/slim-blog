<div class="navbar-fixed-bottom text-right container-fluid navigasi">
    <a class="btn btn-primary" onclick="history.go(-1)"><i class="fa fa-chevron-left"></i></a>
    <a href="#page-top" class="btn btn-primary"><i class="fa fa-chevron-up"></i></a>
    <button type="button" id="sidebarCollapse" class="btn btn-primary">Navigation</button>
</div>
<div class="text-center navbar-fixed-left">
    <nav id="sidebar">
        {{-- sidebar Header --}}
        <div class="sidebar-header">
        @guest
            <img src="/authors/avatars/default.jpg" alt="" class="img-circle img-thumbnail">
        @else
            <img src="/authors/avatars/{{ $user->avatar }}" alt="" class="img-circle img-thumbnail">
        @endguest
        @guest
            <div class="dropdown">
                <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h2>Guest</h2>
                    <i class="caret"></i>
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><a style="color: #333;" type="button" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i> Login</a>
                    <li><a style="color: #333;" type="button" data-toggle="modal" data-target="#registerModal"><i class="fa fa-address-book"></i> Register</a></li>
                </ul>
            </div>
        @else
            <div class="dropdown">
                <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h2>{{ Auth::user()->name }}</h2>
                    <i class="caret"></i>
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><a href="/post/tulis">Tulis</a></li>
                    <li><a href="{{ route('categories.index') }}">Kategori</a></li>
                    <li><a href="{{ route('tags.index') }}">Tag</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/profile"><i class="fa fa-user-circle"></i> Profile</a></li>
                    <li><a href="/profile/setting"><i class="fa fa-edit"></i> Setting</a></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout
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

            @if (Request::is('/'))
                <a href="/#post">Post</a>
                <a href="/#gallery">Gallery</a>
                <a href="/#about">About</a>
                <a href="/#contact">Contact</a>
            @else
                <a href="/"><i class="fa fa-home"></i> Beranda</a>
            @endif
        </div>
    </nav>
</div>


@if (Request::is('/'))
    <div></div>
@else
    <div class="navbar-fixed-top text-right container-fluid navigasi">
        <div class="pull-right">
            <button type="button" id="searchCollapse" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div id="search">
            {!! Form::open(['url' => '/post/search']) !!}
                <div class="form-inline">
                    <div class="form-group">
                        {{Form::text('searchData', '', ['class' => 'form-control', 'placeholder' => 'Mencari Sesuatu?', 'required' => 'required'])}}
                    </div>
                    <div class="form-group">
                        {{Form::submit('Cari', ['class' => 'btn btn-success'])}}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endif
<!-- Modal -->
<div class="permodalan">
      @include('auth.login-modal')
      @include('auth.register-modal')
</div>
