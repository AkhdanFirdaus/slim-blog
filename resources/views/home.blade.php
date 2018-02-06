@extends('layouts.apphome')

@section('homecontent')
<div class="navbar-fixed-top text-center">
  <a href="#page-top" class="luhur btn btn-primary"><span class="fa fa-chevron-up"></span></a>
  <button type="button" id="sidebarCollapse" class="btn btn-primary luhur">
    Toggle Sidebar
  </button>
</div>
{{-- content --}}
<div id="headline" class="bgimg1">
    <div class="bungkus">
      <h1 class="text-uppercase judul"><strong>Slim</strong><span class="text-primary">Blog</span></h1>
      <h4>Hanya untuk mengisi waktu luang | <span class="text-danger">akhdan.musyaffa.firdaus@gmail.com</span></h4>
      <br>
      <p class="lead text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ipsam exercitationem quibusdam hic temporibus, modi assumenda sint quisquam possimus minima!</p>
      <br>
      <div class="icon">
        <a class="fa fa-instagram fa-lg" aria-hidden="true"></a>
        <a class="fa fa-facebook fa-lg" aria-hidden="true"></a>
        <a class="fa fa-github fa-lg" aria-hidden="true"></a>
      </div>
    </div>
</div>
<div id="post">
  <div class="text-center caption">
    <h1>Ini untuk post</h1>
    <a href="/blog" class="btn btn-primary">Lihat Selengkapnya</a>
  </div>
</div>

<div id="gallery" class="bgimg2">
  <div class="text-center caption">
    <h1>Ini untuk gallery</h1>
    <a href="/gallery" class="btn btn-primary">Lihat Selengkapnya</a>
  </div>
</div>

<div id="about">
  <div class="bgimg3"></div>
  <div class="container wrapper4">
    <div class="row">
      <div class="col-md-4">
        <h3>Web</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nihil animi tenetur ipsam sit corporis nesciunt in amet, praesentium ad.</p>
      </div>
      <div class="col-md-4">
        <h3>Desktop</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem hic eos quos minima odit porro, a quo consectetur reiciendis blanditiis!</p>
      </div>
      <div class="col-md-4">
        <h3>Mobile</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad iste expedita cum esse perspiciatis vel iusto autem animi eligendi ducimus!</p>
      </div>
    </div>
  </div>
</div>
@endsection
