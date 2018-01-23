<div class="jumbotron">
  <h1 class="display-4 text-center">{{config('blog.title')}}</h1>
  <h5 class="text-center">Blog Sederhana</h5>
  {!! Form::open(['url' => '/blog/search']) !!}
  <div class="form-inline text-center">
    <div class="form-group">
      {{Form::text('searchData', '', ['class' => 'form-control', 'placeholder' => 'Mencari Sesuatu?', 'required' => 'required'])}}
    </div>
    <div class="form-group">
      {{Form::submit('Cari', ['class' => 'btn btn-success'])}}
    </div>
  </div>
  {!! Form::close() !!}
</div>
