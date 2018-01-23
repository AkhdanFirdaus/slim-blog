@extends('layouts.apphome')

@section('homecontent')
{{-- content --}}
<div id="about">
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
<hr>
<div id="pendidikan">
  <blockquote cite="http://">
    <h1 class="text-uppercase">Pendidikan</h1>
  </blockquote>
  <br>
  <div>
    <h2>Sekolah Dasar</h2>
    <h4>SDN Taman Kopo Indah</h4>
  </div>
  <div>
    <h2>Sekolah Menengah Pertama</h2>
    <h4>SMPN 1 Margahayu</h4>
  </div>
  <div>
    <h2>Sekolah Menengah Kejuruan</h2>
    <h4>SMKN 1 Katapang</h4>
  </div>
</div>
@endsection
