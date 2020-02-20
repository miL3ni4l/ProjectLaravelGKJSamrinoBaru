
@extends('layouts.layout')
@section('breadcrumb')
<a href="/profil">Profil Gereja</a> / Edit Profil
@endsection

@section('judul')
Edit Profil Gereja
@endsection()

@section('content')

<div class="container">
  <form action="/profil/edit" method="post" class="was-validated">
  {{ csrf_field() }}
    <div class="form-group">
    <label for="nama_gereja">Nama Gereja</label>
      <input type="text" class="form-control" name="nama_gereja" value="{{$profil->nama_gereja}}" required style="width:40%">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="alamat_gereja">Alamat Gereja</label>
      <input type="text" class="form-control" name="alamat_gereja" value="{{$profil->alamat_gereja}}" required style="width:80%">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="tlp_gereja">Telp Gereja</label>
      <input type="text" class="form-control" name="tlp_gereja" value="{{$profil->tlp_gereja}}" required style="width:20%">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="email_gereja" >Email Gereja</label>
      <input type="text" class="form-control" name="email_gereja" value="{{$profil->email_gereja}}" required style="width:30%">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="sejarah_gereja">Sejarah Gereja</label><br>
      <textarea class="form-control" name="sejarah_gereja"  rows="10" cols="100" required>{{$profil->sejarah_gereja}}"</textarea>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="visi_gereja" >Visi Gereja</label>
      <input type="text" class="form-control" name="visi_gereja" value="{{$profil->visi_gereja}}" required style="width:80%">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="misi_gereja" >Misi Gereja</label>
      <input type="text" class="form-control" name="misi_gereja" value="{{$profil->misi_gereja}}" required style="width:80%">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit">
  </form>
</div>

<br/><br/><br/>

@endsection()