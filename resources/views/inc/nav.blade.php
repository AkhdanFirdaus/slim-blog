<div id="app">
    <nav class="navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">                    
                    @guest
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            Slim Blog <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">                            
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>            
                    </li>
                    @else
                    <li><a href="/tulis">Tulis</a></li>
                    <li class="active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>                    
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest

                    <li><a href="#">Photos</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>

@section('judul')
<div class="jumbotron">
  <h1 class="display-4 text-center">{{config('blog.title')}}</h1>
  <h5 class="text-center">Blog Sederhana</h5> 
  {!! Form::open(['url' => '/search']) !!}
  <div class="form-inline text-center">
    <div class="form-group">
          {{Form::text('searchData', '', ['class' => 'form-control', 'placeholder' => 'Mencari Sesuatu?', 'required' => 'required'])}}
        </div>
        <div class="form-group">
          {{Form::submit('submit', ['class' => 'btn btn-success'])}}
        </div>
  </div>      
  {!! Form::close() !!}
</div>  
@endsection