@extends('layouts.utama')

@section('header')
<div class="intro-text">
        <div class="intro-lead-in">Selamat Datang di</div>
        <div class="intro-heading text-uppercases">GEREJA KRISTEN JAWA SAMIRONOBARU</div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <a class="js-scroll-trigger" href="#warta">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-newspaper fa-stack-1x fa-inverse"></i>
            </a>
          </span>
          <h4 class="service-heading">Warta Gereja</h4>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <a class="js-scroll-trigger" href="#ibadah">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-calendar-alt fa-stack-1x fa-inverse"></i>
            </a>
          </span>
          <h4 class="service-heading">Jadwal Ibadah</h4>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <a class="js-scroll-trigger" href="utama/kegiatan">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-photo fa-stack-1x fa-inverse"></i>
            </a>            
          </span>
          <h4 class="service-heading">Gallery</h4>
        </div>
      </div>
@endsection

@section('content')
<section id="ibadah">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Jadwal Ibadah</h2><br>
        </div>
      </div>
      <div class="row text-center">
        
        @foreach ($jadwal as $jadwal)
        <div class="col-md-4 border-rounded">
          <h4 class="service-heading">{{$jadwal->judul_ibadah}}</h4>
          <hr>
          <div class="alert alert-warning">
            <h5 class="service-heading">{{$jadwal->waktu_ibadah}}</h5>
            <h5 class="service-heading">{{$jadwal->ket_ibadah}}</h5>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>


<!--Warta Gereja-->
<section id="warta">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Warta Gereja</h2><br>
      </div>
    </div>
        <!-- SECTION -->
<div class="section">
  <!-- CONTAINER -->
  <div class="container">
    <!-- ROW -->
    <div class="row">
      <!-- Main Column -->
      <div class="col-md-12">
        <!-- section title -->
        <div class="section-title">
          <h2 class="title">Berita Terkini</h2>
        </div>
        <!-- /section title -->
        
        <!-- owl carousel 2 -->
        
        <div id="owl-carousel-2" class="owl-carousel owl-theme">        
        @foreach ($warta as $warta)
          <article class="article thumb-article" width="50px" height="50px">
            <div class="article-img">
            <img src="{{ asset('storage/'.$warta->foto) }}"> 
            </div>
            <div class="article-body">
              <ul class="article-info">
              </ul>
              <h3 class="article-title"><a href="/utama/swarta/{{$warta->id}}">{{$warta->judul}}</a></h3>
              <ul class="article-meta">
                <li><i></i>{{$warta->keterangan}}</li>
              </ul>
            </div>
          </article>
          @endforeach
  </div>
  <br/><br/>

  <div class="col-lg-12 text-center">
      <a href="/utama/2"><h4>Read More >></h4></a>
  </div>
</section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <p class="section-heading text-uppercase">Telp : {{$kontak -> tlp_gereja}}</p>
          <p class="section-heading text-uppercase">Email : {{$kontak -> email_gereja}}</p>
        </div>
      </div>
      <div class="col-md-12 text-center">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://instagram.com/benimulia">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://instagram.com/benimulia">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://instagram.com/benimulia">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        
    </div>
    
  </section>
@endsection
