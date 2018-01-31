@extends('layouts.appgallery')

@section('galcontent')

  @if (count($album->photos) > 0)
    @php
      $colcount = count($album->photos);
      $i = 1;
      $t = 1;
    @endphp
    
    <a href="/gallery" class="btn btn-default">Back</a>
    <a href="/gallery/photos/create/{{$album->id}}" class="btn btn-primary">Upload Photo To Album</a>

    <hr>
    <h1 class="text-center">{{$album->name}}</h1>
    <hr>
    <div id="photos">
        @foreach ($album->photos as $photo)

            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-image">
                        <img src="/uploads/photos/{{$photo->photo}}" class="panel-image-preview" />
                        <label for="toggle-<?= $t; ?>"></label>
                    </div>
                    <input type="checkbox" id="toggle-<?= $t; ?>" class="panel-image-toggle">
                    <div class="panel-body">
                        <h4>{{$photo->title}}</h4>
                        <p>{{$photo->description}}</p>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="/download/{{$photo->photo}}" download="{{$photo->photo}}"><span class="fa fa-download"></span></a>
                        <a href="#facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#share"><span class="fa fa-share"></span></a>
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
    <h3>Photo Kosong</h3>
  @endif
@endsection
