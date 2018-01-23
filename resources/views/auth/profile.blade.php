@extends('layouts.apphome')

@section('homecontent')
  <div id="profile">
    <blockquote cite="http://">
      <h1>Change Profile Image</h1>
    </blockquote>
    <div class="col-md-5 well well-lg">
      <h2>{{ Auth::user()->name }}</h2>
      <form enctype="multipart/form-data" action="/profile" method="POST">
        <label>Update Profile Image</label>
        <input type="file" name="avatar">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <br>
        <input type="submit" class="btn btn-sm btn-primary" value="Update Avatar">
      </form>
    </div>
    <div class="col-md-7">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, labore.
    </div>
  </div>
@endsection
