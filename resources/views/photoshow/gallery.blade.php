@extends('layouts.appgallery')

@section('galcontent')
<div id="albums">
  @if (count($albums) > 0)
    <h1 class="text-center">Albums</h1>
    <hr>
      <div class="row">
      @php
        $index = 0;
      @endphp
        @foreach ($albums as $count => $album)
          @if ($count % 3 == 0)
  				</div><div class="row">
  				@endif
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-image">
                        <img src="/uploads/album_covers/{{$album->cover_image}}" class="panel-image-preview" />
                        <label for="toggle-{{$index+1}}"></label>
                    </div>
                    <input type="checkbox" id="toggle-{{$index+1}}" class="panel-image-toggle">
                    <div class="panel-body">
                        <a href="/gallery/{{$album->id}}">
                          <h4>{{$album->name}}</h4>
                        </a>
                        <p>{{$album->description}}</p>
                        @auth ('web')
                          <div>
                            {{ Form::open(['url' => '/gallery/hapus/'. $album->id, 'method' => 'delete']) }}
                              <button type="submit" class="label label-danger">Hapus</button>
                              {{ Form::token() }}
                            {{ Form::close() }}
                          </div>
                        @endauth
                    </div>
                    <div class="panel-footer text-center">
                        <a href="#download"><span class="fa fa-download"></span></a>
                        <a href="#facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#share"><span class="fa fa-share"></span></a>
                    </div>
                </div>
            </div>
        @endforeach
        @php
          $index++;
        @endphp
      </div>
  @else
    <div class="alert alert-info text-center Kosong">
      <h3>Album Kosong</h3>
    </div>
    <hr>
  @endif
</div>
@endsection
