@extends('layouts.appgallery')

@section('galcontent')
  @if (count($albums) > 0)
    @php
      $colcount = count($albums);
      $i = 1;
      $t = 1;
    @endphp
    <h3>Albums</h3>
    <div id="albums">
        @foreach ($albums as $album)

            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-image">
                        <img src="/uploads/album_covers/{{$album->cover_image}}" class="panel-image-preview" />
                        <label for="toggle-<?= $t; ?>"></label>
                    </div>
                    <input type="checkbox" id="toggle-<?= $t; ?>" class="panel-image-toggle">
                    <div class="panel-body">
                        <a href="/gallery/{{$album->id}}">
                          <h4>{{$album->name}}</h4>
                        </a>
                        <p>{{$album->description}}</p>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                        <a href="#facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                    </div>
                </div>
            </div>

          @php
            $i++;
            $t++;
          @endphp
        @endforeach
    </div>
  @else
    <h3>Album Kosong</h3>
  @endif
@endsection
