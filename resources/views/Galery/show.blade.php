@extends('layouts.layout')

@section('breadcrumb')
<a href="/kegiatan">Gallery</a> / Lihat Foto Kegiatan
@endsection()

@section('judul','Gallery GKJ Samironobaru')

@section('content')
<h3>Daftar Foto {{$kegiatan->nama_kegiatan}}</h3>
    <div class="gallery" id="gallery">
    @if($foto != null)
        @foreach ($foto as $foto)  
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="{{ asset('storage/'.$foto->foto_kegiatan)}}" alt="Card image cap">
            <a href="/kegiatan/fdelete/{{$foto->id}}">Hapus Foto</a>
        </div>
        @endforeach
    @else
         
    @endif
    </div>
    
@endsection()