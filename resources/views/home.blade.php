@extends('layouts.apphome')

@section('homecontent')
{{-- content --}}
<section id="headline" class="bgimg1">
  <h1 class="text-uppercase judul"><strong>Slim</strong><span class="text-primary">Blog</span></h1>
  <h3>Hanya untuk mengisi waktu luang | <small><strong><span class="text-danger">akhdan.musyaffa.firdaus@gmail.com</span></strong></small></h3>
  <br>
  <p class="lead text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ipsam exercitationem quibusdam hic temporibus, modi assumenda sint quisquam possimus minima!</p>
  <br>
  <div class="icon">
    <a href="https://www.instagram.com/akhdanfirdaus/" target="_blank" class="fa fa-instagram fa-lg text-center" aria-hidden="true"></a>
    <a class="fa fa-facebook fa-lg text-center" aria-hidden="true"></a>
    <a href="https://github.com/AkhdanMF" target="_blank" class="fa fa-github fa-lg text-center" aria-hidden="true"></a>
  </div>
</section>

<section id="post">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <h2>POST TERBARU</h2>
          <hr class="star">
      </div>
    </div>
    <div class="row">
      @foreach ($posts as $post)
        <div class="col-md-4" style="margin-bottom: 30px;">
  				<div class="post">
  					<a href="/post/{{$post->slug}}"><img src="/posts/post_cover/{{$post->post_image}}" alt=""></a>
  					<div class="caption">
  						<div class="text">
  							<strong><h3><a href="/post/{{$post->slug}}">{{ $post->title }}</a></h3></strong>
  							<p><a href="/author/{{ $post->authors['slug'] }} ">{{ $post->authors['name'] }}</a> - <em>({{ $post->created_at->format('M jS Y') }})</em></p>
  						</div>
  					</div>
  				</div>
  			</div>
      @endforeach
    </div>
    <div class="text-center">
      <a href="/post" class="btn btn-primary btn-block">Lihat Selengkapnya</a>
    </div>
  </div>
</section>

<section id="gallery" class="bgimg2">
  <div style="margin-top: 12%;">
    <div class="row">
      <div class="col-lg-12 text-center">
          <h2>GALLERY</h2>
          <hr class="star star-light">
          <a href="/gallery" class="btn btn-primary">Lihat Selengkapnya</a>
      </div>
    </div>
  </div>
</section>

<section id="about">
  <div class="row">
    <div class="col-lg-12 text-center">
        <h2>ABOUT</h2>
        <hr class="star star-light">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-2">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nihil animi tenetur ipsam sit corporis nesciunt in amet, praesentium ad.</p>
      </div>
      <div class="col-lg-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem hic eos quos minima odit porro, a quo consectetur reiciendis blanditiis!</p>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="bgimg3">
  <div class="row">
    <div class="col-lg-12 text-center">
        <h2>Contact Me</h2>
        <hr class="star">
    </div>
  </div>
  <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(['url' => '']) !!}

        <div class="form-group">
      		{{Form::text('Subjek', '', ['class' => 'form-control', 'placeholder' => 'Subjek', 'required' => 'required'])}}
        </div>

        <div class="form-group">
          {{Form::textarea('Pesan', '', ['class' => 'form-control', 'placeholder' => 'Pesan', 'required' => 'required'])}}
        </div>

        <div class="form-group">
      		{{Form::text('Nama', '', ['class' => 'form-control', 'placeholder' => 'Nama', 'required' => 'required'])}}
        </div>
        <div class="form-group">
          {{Form::text('E-Mail', '', ['class' => 'form-control', 'placeholder' => 'Alamat E-Mail', 'required' => 'required'])}}
        </div>
        <div class="form-group">
          {{Form::text('Phone', '', ['class' => 'form-control', 'placeholder' => 'Nomor Telephone', 'required' => 'required'])}}
        </div>

        <div class="form-group text-right">
          {{Form::submit('Send', ['class' => 'btn btn-success'])}}
        </div>

        {!!Form::close() !!}
      </div>
  </div>
</section>

@endsection
