@extends('layouts.utama2')

@section('content')
<br/>
  <div class="col-lg-12 text-center">
      <h1>WARTA GEREJA</h1>
  </div>
  <br/>
<!-- Owl Carousel 1 -->
<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
    <!-- ARTICLE -->
    @foreach ($warta as $warta)
    <article class="article thumb-article">
        <div class="article-img">
        <img src="{{ asset('storage/'.$warta->foto) }}"> 
        </div>
        <div class="article-body">
            <ul class="article-info">
            </ul>
            <h2 class="article-title"><a href="/utama/swarta/{{$warta->id}}">{{$warta->judul}}</a></h2>
            <ul class="article-meta">
                <li><i></i>{{$warta->keterangan}}</li>
            </ul>
            </article>
        @endforeach
        </div>
        <br/>
        <div class="row text-left"> 
        @foreach ($coba as $coba)
        <div class="col-md-6 border-rounded">
        <div class="alert alert-secondary center-block">
                <table><br/>
                        <tr>
                            <td><img src="{{ asset('storage/'.$coba->foto) }}" width="200cm" height="200cm"></td>
                            <td> <a href="/utama/swarta/{{$warta->id}}" style="text-decoration: none;"><h5>&nbsp;&nbsp;{{$coba->judul}}</h5></a> <p>&nbsp; &nbsp;{{$coba->keterangan}}</p></td>
                        </tr>
                </table><br/>
            </div>
        </div>
        @endforeach
      </div>

        
@endsection