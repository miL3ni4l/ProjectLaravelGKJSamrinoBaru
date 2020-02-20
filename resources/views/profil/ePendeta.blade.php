

@extends('layouts.layout')
@section('breadcrumb')
<a href="profil">Profil Gereja</a> / Edit Pendeta
@endsection

@section('judul')
Edit Pendeta Gereja
@endsection()

@section('content')
<div class="container">
  <form action="/profil/ependeta/{{$pendeta->id}}" method="POST" enctype="multipart/form-data" class="was-validated">
  {{ csrf_field() }}
    <div class="form-group">
    <label for="nama_pendeta">Nama Pendeta</label>
      <input type="text" class="form-control" placeholder="Masukkan Nama Pendeta" name="nama_pendeta" value="{{$pendeta->nama_pendeta}}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="tlp_pendeta">Telepon Pendeta</label>
      <input type="text" class="form-control" placeholder="Masukkan Telp Pendeta" name="tlp_pendeta" value="{{$pendeta->tlp_pendeta}}"required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="keterangan_pendeta">Keterangan Pendeta</label>
      <input type="text" class="form-control" placeholder="Masukkan Keterangan Pendeta" name="keterangan_pendeta" value="{{$pendeta->keterangan_pendeta}}"required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <label for="file">Upload file</label><br/>
    <input type="file" name="file" id="file"><br/>
    <p class="text-danger">*Ketika Edit File Foto Harus diisi</p><br/>
    <input type="submit" class="btn btn-primary" value="Submit"> <input type="reset" class="btn btn-danger" value="Reset" >
  </form>
</div>
<br/><br/><br/>

@endsection()
