<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="/">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/tulis">Tulis</a>
  </li>
</ul>

@section('judul')
  <h1>{{config('blog.title')}}</h1>
  <h5>Blog Sederhana</h5> 


  {!! Form::open(['url' => '/search']) !!}
  <div class="form-inline">
    <div class="form-group">
          {{Form::text('searchData', '', ['class' => 'form-control', 'placeholder' => 'Mencari Sesuatu?'])}}
        </div>
        <div class="form-group">
          {{Form::submit('submit', ['class' => 'btn btn-success'])}}
        </div>
  </div>      
  {!! Form::close() !!}
@endsection