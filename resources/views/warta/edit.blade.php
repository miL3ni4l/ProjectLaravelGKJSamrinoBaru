@extends('layouts.layout')

@section('breadcrumb')
<a href="/warta">Warta Gereja</a> / Edit Warta
@endsection()

@section('judul')
Edit Warta Gereja
@endsection()

@section('content')
<div class="container">
<form action="/warta/edit/{{$warta->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
{{ csrf_field() }}
<div class="form-group">
    <label for="judul">Judul</label><br>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul" value="{{$warta->judul}}">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group">
<label for="keterangan">Masukan keterangan</label><br>
    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan,cth:penulis dll" value="{{$warta->keterangan}}">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group">
    <label for="isi">Masukan isi warta</label><br>
    <textarea name="isi" placeholder="Masukan isi warta gereja" rows="10" cols="100" >{{$warta->isi}}</textarea> 
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group">
    <label for="file">Upload file</label>
    <input type="file" name="file" id="file">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<p>Ketika Edit File Foto Harus diisi</p>
    {{ csrf_field() }}
    <input type="submit" value="Submit"> <input type="reset" value="Reset">
    </form>
</div>
@endsection()