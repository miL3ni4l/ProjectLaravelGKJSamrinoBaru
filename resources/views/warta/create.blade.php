@extends('layouts.layout')

@section('breadcrumb')
<a href="/warta">Warta Gereja</a> / Buat Warta
@endsection()

@section('judul')
Tambah Warta Baru 
@endsection()

@section('content')
<div class="container">
<form method="POST" action="/warta/create" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="keterangan">Masukan keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan,cth:penulis dll">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="isi">Masukan isi warta</label><br>
        <textarea name="isi" placeholder="Masukan isi warta gereja" rows="10" cols="100"></textarea>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="file">Upload file</label>
        <input type="file" name="file" id="file">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <input type="submit" value="Submit"> <input type="reset" value="Reset">
    </form>
</div>
<br><br>

@endsection()
