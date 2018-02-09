@extends('layouts.app')

@section('autentikasi')
<div id="profile">
    <section>
        <div class="jumbotron text-center">
            <img src="/authors/avatars/{{$user->avatar}}" alt="" class="img-circle img-thumbnail">
            <h2>{{$user->name}}</h2>
            <p class="lead">{{$user->job}}</p>
        </div>
    </section>
    <section>
        <div class="container">
            <blockquote>
              <p>{{$user->quote}}</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
    </section>
    <section>
        <div class="container">
            <hr>
            <footer class="text-center">
                <p>created with <i class="fa fa-heart" style="color: #ff0000;"></i> by AkhdanFirdaus</p>
                <div class="mnav">
                    <a onclick="history.go(-1)" class="btn btn-primary"><i class="fa fa-chevron-left"></i></a>
                    <a href="/" class="btn btn-primary"><i class="fa fa-home"></i></a>
                </div>
            </footer>
        </div>
    </section>
</div>
@endsection
