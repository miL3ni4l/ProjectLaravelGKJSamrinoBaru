@extends('layouts.layout')

@section('breadcrumb')
<a href="/profil">Profil Gereja</a> / Create
@endsection()

@section('judul')
Tambah Profil Baru 
@endsection()

@section('content')
<div class="container">
<form method="POST" action="/profil/create" class="was-validated">
{{ csrf_field() }}
    <div class="form-group">
        <label for="nama_gereja">Nama Gereja</label>
        <input type="text" class="form-control" id="judul" name="nama_gereja" placeholder="Masukan Nama Gereja" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="alamat_gereja">Alamat Gereja</label>
        <input type="text" class="form-control" id="keterangan" name="alamat_gereja" placeholder="Masukan Alamat Gereja" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="tlp_gereja">Telp Gereja</label>
        <input type="text" class="form-control" id="keterangan" name="tlp_gereja" placeholder="Masukan Telp Gereja" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="email_gereja">Email Gereja</label>
        <input type="text" class="form-control" id="keterangan" name="email_gereja" placeholder="Masukan Email Gereja" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="sejarah_gereja">Sejarah Gereja</label><br>
        <textarea name="sejarah_gereja" class="form-control" placeholder="Masukan sejarah gereja" rows="10" cols="100" required></textarea>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="visi_gereja">Visi Gereja</label>
        <input type="text" class="form-control" id="keterangan" name="visi_gereja" placeholder="Masukan Visi gereja" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="misi_gereja">Misi Gereja</label>
        <input type="text" class="form-control" id="keterangan" name="misi_gereja" placeholder="Masukan Visi gereja" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div> <br/>
    <input type="submit" class="btn btn-primary" value="Submit"> <input type="reset" class="btn btn-danger" value="Reset" required>
    </form>
</div> <br/><br/>

@endsection()


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Profil</title>
</head>
<body>
    <form action="/profil/create" method="post">
    {{ csrf_field() }}
        <label for="nama_gereja">Nama Gereja</label><br>
        <input type="text" name="nama_gereja" placeholder="Masukan Nama Gereja"><br><br>

        <label for="alamat_gereja">Alamat Gereja</label><br>
        <input type="text" name="alamat_gereja" placeholder="Masukan Alamat Gereja"><br><br>
        
        <label for="tlp_gereja">Telp Gereja</label><br>
        <input type="text" name="tlp_gereja" placeholder="Masukan Telp Gereja"><br><br>

        <label for="email_gereja" >Email Gereja</label><br>
        <input type="text" name="email_gereja" placeholder="Masukan email Gereja"><br><br>

        <label for="sejarah_gereja" >Sejarah Gereja</label><br>
        <textarea name="sejarah_gereja" placeholder="Masukan sejarah gereja" rows="10" cols="100"></textarea> <br><br>

        <label for="visi_gereja">Visi Gereja</label><br>
        <input type="text" name="visi_gereja" placeholder="Masukan Visi gereja"><br><br>

        <label for="misi_gereja">Misi Gereja</label><br>
        <input type="text" name="misi_gereja" placeholder="Masukan Misi gereja"><br><br>

        <input type="submit" value="kirim"> <input type="reset" value="reset">
    </form>
</body>
</html> -->