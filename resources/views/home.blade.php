@extends('layouts.apphome')

@section('homecontent')
{{-- content --}}
<div class="bgimg1">
  <div class="caption">
    <span class="border">SELAMAT DATANG</span>
  </div>
</div>
<div id="about" class="wrapper3" style="padding-top: 140px; padding-bottom: 140px;">
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

<div id="pengalaman">
  <div class="bgimg2">
    <div class="caption">
      <span class="border">PENGALAMAN</span>
    </div>
  </div>
  <div style="color: #ddd; background-color:#282E34;" class="container wrapper4">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa maxime, repellendus harum autem, voluptas, nostrum ratione commodi fuga saepe atque iure voluptatem iusto reprehenderit temporibus quisquam repellat. Ratione quisquam, perspiciatis consequatur. Nisi cumque illum qui eum vel rem tempore, commodi quod reiciendis dolore, nemo nam consequuntur, libero aliquam placeat animi!</p>
  </div>
</div>

<div id="skill">
  <div class="bgimg3">
    <div class="caption">
      <span class="border">SKILL</span>
    </div>
  </div>
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
