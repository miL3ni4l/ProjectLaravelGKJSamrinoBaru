@extends('layouts.utama')

@section('content')
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
          <div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
        </div>
        <!-- /section title -->
        
        <!-- owl carousel 2 -->
        @foreach ($warta as $warta)
        <div id="owl-carousel-2" class="owl-carousel owl-theme">
          <!-- ARTICLE -->
          <article class="article thumb-article">
            <div class="article-img">
            <img src="{{ asset('storage/'.$warta->foto) }}" width="25%" height="auto">
            </div>
            <div class="article-body">
              <ul class="article-info">
                <li class="article-category"><a href="#">Berita</a></li>
                <li class="article-type"><i class="fa fa-video-camera"></i></li>
              </ul>
              <h3 class="article-title"><a href="#">{{$warta->judul}}</a></h3>
              <ul class="article-meta">
                <li><i class="fa fa-clock-o"></i>{{$warta->keterangan}}</li>
                <li><i class="fa fa-comments"></i> 33</li>
              </ul>
            </div>
          </article>
          @endforeach
          <!-- ARTICLE -->
          <article class="article thumb-article">
            <div class="article-img">
                <img src="./img/img-thumb-2.jpg" alt="">
            </div>
            <div class="article-body">
                <ul class="article-info">
                    <li class="article-category"><a href="#">News</a></li>
                    <li class="article-type"><i class="fa fa-video-camera"></i></li>
                </ul>
                <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                <ul class="article-meta">
                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                    <li><i class="fa fa-comments"></i> 33</li>
                </ul>
            </div>
        </article>
        <!-- /ARTICLE -->
        <!-- ARTICLE -->
        <article class="article thumb-article">
          <div class="article-img">
              <img src="./img/img-thumb-2.jpg" alt="">
          </div>
          <div class="article-body">
              <ul class="article-info">
                  <li class="article-category"><a href="#">News</a></li>
                  <li class="article-type"><i class="fa fa-video-camera"></i></li>
              </ul>
              <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
              <ul class="article-meta">
                  <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                  <li><i class="fa fa-comments"></i> 33</li>
              </ul>
          </div>
      </article>
      <!-- /ARTICLE -->
      <!-- ARTICLE -->
      <article class="article thumb-article">
        <div class="article-img">
            <img src="./img/img-thumb-2.jpg" alt="">
        </div>
        <div class="article-body">
            <ul class="article-info">
                <li class="article-category"><a href="#">News</a></li>
                <li class="article-type"><i class="fa fa-video-camera"></i></li>
            </ul>
            <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
            <ul class="article-meta">
                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                <li><i class="fa fa-comments"></i> 33</li>
            </ul>
        </div>
    </article>
    <!-- /ARTICLE -->
  </div><<br/><br/>
  <div class="col-lg-12 text-center">
      <a href="warta.html"><h4>Read More >></h4></a>
  </div>
</section>
    @foreach ($warta as $warta)
    {{$warta->judul}}
    {{$warta->keterangan}}
    <img src="{{ asset('storage/'.$warta->foto) }}" width="25%" height="auto">
    {{$warta->isi}}
    <br>
    @endforeach

@endsection