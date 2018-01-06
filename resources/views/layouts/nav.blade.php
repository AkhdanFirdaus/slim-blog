<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="/">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/blog/tulis">Tulis</a>
  </li>
</ul>

@section('judul')
      <h1>{{config('blog.title')}}</h1>
      <h5>Blog Sederhana</h5> 

      <div class="search">          
        {!! Form::open(['url' => 'mencari']) !!}
        <div class="form-inline">
          <div class="form-group">          
            {{Form::text('pencarian', '', ['class' => 'form-control', 'placeholder' => 'kata kunci'])}}
          </div>
          <div class="form-group">
            {{Form::submit('Cari', ['class' => 'btn btn-success'])}}
          </div>
        </div>
        {!! Form::close() !!}
      </div>      
  </div>  
@endsection