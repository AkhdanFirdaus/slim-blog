@extends('layouts.apphome')

@section('homecontent')
  <div id="profile">
    <blockquote cite="http://">
      <h1>Update Profile</h1>
    </blockquote>
    <div class="row">
      <div class="col-md-6">
        <div class="well well-lg">
          <h2>Change Profile Image</h2>
          <form enctype="multipart/form-data" action="/profile" method="POST">
            <label>Update Profile Image</label>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <br>
            <input type="submit" class="btn btn-sm btn-primary" value="Update Avatar">
          </form>
        </div>
        <div class="well well-lg">
          <form action="/profile/{{ $user->id }}" method="POST">
            <h2>Update Information</h2>
            <label for="">Name</label>
            <input type="text" name="name" value="">
            <input type="hidden" name="" value="{{ csrf_token() }}">
            <br><br>
            <input type="submit" class="btn btn-sm btn-primary" value="Update Information">
          </form>
        </div>
      </div>
      <div class="col-md-6 well well-lg">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi explicabo quos iusto vel velit placeat vero exercitationem, delectus facilis eligendi.
      </div>
    </div>
  </div>
@endsection
