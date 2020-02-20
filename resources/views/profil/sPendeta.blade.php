@extends('layouts.layout')
@section('breadcrumb')
<a href="/profil">Profil Gereja</a> / Detail Pendeta
@endsection

@section('judul')
Detail Pendeta Gereja
@endsection()

@section('content')

<div class="container">
<div class="card mb-3">
          <div class="card-header">
            <h3><b>{{ $pendeta ->nama_pendeta }}</b></h3><br>
            <h6>{{ $pendeta ->tlp_pendeta }}</h6></div><br/>
            @if($pendeta->foto_pendeta !=null)
    <p style="text-align:center"><img src="{{ asset('storage/'.$pendeta->foto_pendeta)}}" width="25%" height="auto"></p>
    <div class="card-header">
        @else
        <p></p>
            @endif
            <h6>{{ $pendeta ->keterangan_pendeta }}</h6></div>
</div>
</div>

@endsection()
