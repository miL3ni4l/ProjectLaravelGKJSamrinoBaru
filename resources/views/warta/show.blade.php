@extends('layouts.layout')

@section('breadcrumb')
<a href="/warta">Warta Gereja</a> / Lihat Warta
@endsection()

@section('judul')
Warta Gereja GKJ Samironobaru
@endsection()

@section('content')
<div class="container">
<div class="card mb-3">
          <div class="card-header">
            <h3><b>{{$warta->judul}}</b></h3><br/>
            <h6>{{$warta->keterangan}}</h6></div><br/>
            
        @if($warta->foto != null)
    <p style="text-align:center"><img src="{{ asset('storage/'.$warta->foto) }}" width="25%" height="auto"></p>
    <div class="card-header">
        @else
                <p>Tidak ada gambar</p>
        @endif
            <h6>{{$warta->isi}}</h6></div>
</div>
</div>
@endsection()
