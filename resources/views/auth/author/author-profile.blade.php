@extends('layouts.app')

@section('autentikasi')
<section id="profile">
    <div class="jumbotron text-center">
        <img src="/authors/avatars/{{$user->avatar}}" alt="" class="img-circle img-thumbnail">
        <h1>{{$user->name}}</h1>
        <p class="lead">{{$user->job}}</p>
    </div>
</section>
<div class="container">
    <section>
        <blockquote>
          <p>{{$user->quote}}</p>
          <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
    </section>
    <section>
        <div class="jumbotron">
            <p>{{$user->about}}</p>
        </div>
    </section>    
    <section>
        <hr>
        <footer class="text-center">
            <div class="col-md-4 col-md-offset-4">
                <p>created with <i class="fa fa-heart" style="color: #ff0000;"></i> by AkhdanFirdaus</p>
            </div>
            <div class="col-md-2 col-md-offset-2">
                <div class="side">
                    <a onclick="history.go(-1)" class="btn btn-primary"><i class="fa fa-chevron-left"></i></a>
                    <a href="/" class="btn btn-primary"><i class="fa fa-home"></i></a>
                </div>
            </div>
        </footer>
    </section>
</div>
@endsection
