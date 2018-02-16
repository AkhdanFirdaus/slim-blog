@extends('layouts.appgallery')

@section('galcontent')
<div id="photos">
  <a href="/gallery" class="btn btn-default">Back</a>
  @auth ('web')
    <a href="{{ route('photo.create', $album->id)}}" class="btn btn-primary">Upload Photo To Album</a>
  @endauth
  <hr>
  @if (count($album->photos) > 0)
    <h1 class="text-center">{{$album->name}}</h1>
    <hr>
    <div class="row">
      @php
        $i = 1;
      @endphp
      @foreach ($album->photos as $count => $photo)
        @if ($count % 3 == 0)
				</div><div class="row">
				@endif
          <div class="col-sm-6 col-md-4">
              <div class="panel panel-default">
                  <div class="panel-image">
                      <img src="/uploads/photos/{{$photo->photo}}" class="panel-image-preview" />
                      <label for="toggle-{{$i}}"></label>
                  </div>
                  <input type="checkbox" id="toggle-{{$i}}" class="panel-image-toggle">
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
          @endphp
      @endforeach
    </div>
  @else
    <div class="alert alert-info text-center kosong">
      <h3>Photo Kosong</h3>
    </div>
    <hr>
  @endif
</div>
@endsection
