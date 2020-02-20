@extends('layouts.layout')

@section('breadcrumb')
<a href="/jadwal">Jadwal Ibadah</a> / Edit
@endsection()

@section('judul')
Edit Jadwal Ibadah
@endsection()

@section('content')

<div class="container">
  <form action="/jadwal/edit/{{$jadwal->id}}" method="post" class="was-validated">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="judul">Judul Ibadah</label>
      <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Ibadah" name="judul" value="{{$jadwal->judul_ibadah}}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="waktu">Waktu Ibadah</label>
      <input type="time" class="form-control" id="waktu" name="waktu" value="{{$jadwal->waktu_ibadah}}" required style="width:25%">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="keterangan">Keterangan Ibadah</label>
      <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$jadwal->ket_ibadah}}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit"> <input type="reset" class="btn btn-primary" value="Reset" >
  </form>
</div>

@endsection