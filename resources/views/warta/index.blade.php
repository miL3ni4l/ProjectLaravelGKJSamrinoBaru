@extends('layouts.layout')

@section('breadcrumb')
<a href="/warta">Warta Gereja</a> 
@endsection()

@section('judul')
Warta Gereja GKJ Samironobaru
@endsection()

@section('content')

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Daftar Warta Gereja</div>
<div class="card-body">
<a href="/warta/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambahkan Warta</i>
</button></a>

<br><br>
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
            <th>ID </th>
            <th>Judul </th>
            <th>Keterangan </th>
            <th>Isi </th>
            <th colspan="3"> Action </th>
        </thead>
        <tbody>
            @foreach($warta as $warta)
            <tr>
                <td>{{ $warta->id }}</td>
                <td>{{ $warta->judul}}</td>
                <td>{{ $warta->keterangan}}</td>
                <td>{{ $warta->isi}}</td>
                <td><a href="warta/show/{{$warta->id}}">Show </a></td>
                <td><a href="warta/edit/{{$warta->id}}">Edit </a></td>
                <td><a href="warta/delete/{{$warta->id}}">Delete </a></td>
            </tr>
            @endforeach
        </tbody>
    
</table>

    </div>
</div>
</div>



@endsection