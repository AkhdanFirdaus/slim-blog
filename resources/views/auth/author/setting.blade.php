@extends('layouts.app')

@section('autentikasi')
<div id="profile">
    <div class="container">
        <blockquote cite="http://">
          <h1>Update Profile</h1>
        </blockquote>
        <div class="row">
          <div class="col-md-6">
            <div class="well well-lg">
                <h3 class="text-center">Update Information</h3>
                {!! Form::open(['url' => '/profile/setting/{{$user->id}}']) !!}

                    <div class="form-group">
                        {{Form::text('Job', '', ['class' => 'form-control', 'placeholder' => 'Pekerjaan Anda'])}}
                    </div>

                    <div class="form-group">
                        {{Form::text('Quote', '', ['class' => 'form-control', 'placeholder' => 'Quote Favorit Anda'])}}
                    </div>

                    <div class="form-group">
                        {{Form::textarea('About', '', ['class' => 'form-control', 'placeholder' => 'Tentang Anda'])}}
                    </div>

                {!! Form::close() !!}
                <br><br>
                <input type="submit" class="btn btn-sm btn-primary" value="Update Information">
              </form>
            </div>
          </div>
          <div class="col-md-6 well well-lg">
              <h2>Change Profile Image</h2>
              <form enctype="multipart/form-data" action="/profile/setting" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <input type="submit" class="btn btn-sm btn-primary" value="Update Avatar">
              </form>
          </div>
        </div>
      </div>
</div>
@endsection
