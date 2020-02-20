@extends('layouts.layout')

@section('breadcrumb')
<a href="/kegiatan">Gallery</a> / Buat Kegiatan
@endsection()

@section('judul','Gallery GKJ Samironobaru')

@section('content')
<div class="container">
<form action="/kegiatan/addfoto" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
      <div class="form-group">
        <label for="nama_kegiatan">Nama Kegiatan</label>
        <select name="kegiatan_id" class="form-control" style="width:30%" >
      @foreach ($kegiatan as $kegiatan)
        <option value="{{$kegiatan->id}}"> {{$kegiatan->nama_kegiatan}}</option>
      @endforeach  
        </select>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="foto">Upload Foto</label><br>
        <input type="file" name="foto" id="file"><br><br>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.
      </div>
      <input type="submit" class="btn btn-primary" value="Submit"> <input type="reset" class="btn btn-primary" value="Reset" >
    </div>

@endsection()

