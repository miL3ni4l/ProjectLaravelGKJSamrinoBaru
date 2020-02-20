@extends('layouts.layout')

@section('breadcrumb')
<a href="/kegiatan">Gallery</a> 
@endsection()

@section('judul','Gallery GKJ Samironobaru')

@section('content')

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Daftar Kegiatan Gereja</div>
<div class="card-body">
    <a href="/kegiatan/create">
    <button class="btn btn-info" id="sidebarToggle">
        <i class="far fa-plus-square"> Tambahkan Kegiatan</i>
    </button></a>

    <a href="/kegiatan/addfoto">
    <button class="btn btn-info" id="sidebarToggle">
        <i class="far fa-plus-square"> Tambahkan Foto</i>
    </button></a> <br> <br>
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID </th>
            <th>Nama Kegiatan </th>
            <th>Tanggal </th>
            <th colspan="3">Action</th>
        </tr>    
    </thead>
    <tbody>
    @foreach($kegiatan as $kegiatan)
    <tr>
        <td>{{$kegiatan->id}}</td>
        <td>{{$kegiatan->nama_kegiatan}}</td>
        <td>{{$kegiatan->tanggal}}</td>
        <td><a href="/kegiatan/edit/{{$kegiatan->id}}">Edit</a></td>
        <td><a href="/kegiatan/delete/{{$kegiatan->id}}">Delete</a></td>
        <td><a href="/kegiatan/show/{{$kegiatan->id}}">Lihat Foto</a></td>
        </tr>
    @endforeach
     
    </tbody>
    
</table>

    </div>
</div>
</div>
<br><br>


@endsection()
