@extends('layouts.layout')

@section('breadcrumb')
<a href="/kegiatan">Gallery</a> / Buat Kegiatan
@endsection()

@section('judul','Gallery GKJ Samironobaru')

@section('content')
<div class="container">
  <form action="/kegiatan/create" method="post" class="was-validated">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="nama_kegiatan">Nama Kegiatan: </label>
      <input type="text" class="form-control" id="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" name="nama_kegiatan" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="tanggal">Tanggal Kegiatan</label>
      <input type="date" class="form-control" id="tanggal" name="tanggal" required style="width:25%">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Submit"> <input type="reset" class="btn btn-primary" value="Reset" >
  </form>
</div>


@endsection