@extends('layouts.layout')

@section('breadcrumb')
<a href="/jadwal">Jadwal Ibadah</a> 
@endsection()

@section('judul')
Jadwal Ibadah GKJ Samironobaru
@endsection()

@section('content')

<!-- <input type="button" href="/jadwal/create" value="Insert baru"> -->
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Daftar Jadwal Ibadah</div>
<div class="card-body">
<a href="/jadwal/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambahkan Jadwal</i>
</button></a>

<br><br>
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul Ibadah</th>
            <th>Waktu Ibadah</th>
            <th>Keterangan Ibadah</th>
            <th colspan="2">Action</th>
        </tr>    
    </thead>
    <tbody>
    @foreach($jadwal as $agenda)
       <tr>
            <td>{{ $agenda->id }}</td>
            <td>{{ $agenda->judul_ibadah }}</td>
            <td>{{ $agenda->waktu_ibadah }}</td>
            <td>{{ $agenda->ket_ibadah }}</td>
            <td><a href="jadwal/delete/{{$agenda->id}}">Delete</a> </td>
            <td><a href="jadwal/edit/{{$agenda->id}}">Edit</a> </td>
        </tr>
    @endforeach
     
    </tbody>
    
</table>

    </div>
</div>
</div>
@endsection()

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seluruh Jadwal</title>
</head>
<body>
<h1>Jadwal Ibadah Gereja Samirono Baru</h1>
<a href="/jadwal/create">Tambah Jadwal </a> -->
<!-- <input type="button" href="/jadwal/create" value="Insert baru"> -->
<!-- <table border='1'>
    <thead>
    <th>ID</th>
    <th>Judul Ibadah</th>
    <th>Waktu Ibadah</th>
    <th>Keterangan Ibadah</th>
    <th colspan="2">Action</th>
    </thead>
    <tbody>
    @foreach($jadwal as $agenda)
       <tr>
        <td>{{ $agenda->id }}</td>
        <td>{{ $agenda->judul_ibadah }}</td>
        <td>{{ $agenda->waktu_ibadah }}</td>
        <td>{{ $agenda->ket_ibadah }}</td>
        <td><a href="jadwal/delete/{{$agenda->id}}">Delete</a> </td>
        <td><a href="jadwal/Edit/{{$agenda->id}}">Edit</a> </td>
        </tr>
    @endforeach
     
    </tbody>
    
</table>
</body>
</html> -->
