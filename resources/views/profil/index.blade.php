
@extends('layouts.layout')

@section('breadcrumb')
<a href="/profil">Profil Gereja</a> 
@endsection()

@section('judul')
Profil GKJ Samironobaru
@endsection()

@section('content')

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Profi Gereja GKJ Samironobaru Jogja</div>

<div class="card-body">

<!-- <a href="/profil/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambahkan Profil Gereja</i>
</button></a> -->

<a href="/profil/edit">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Edit Profil Gereja</i>
</button></a>


<br/><br/>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nama Gereja</th>
            <th>Alamat Gereja</th>
            <th>Telp Gereja</th>
            <th>Email Gereja</th>
            <th>Sejarah Gereja</th>
            <th>Visi Gereja</th>
            <th>Misi Gereja</th>
        </tr>    
    </thead>
    <tbody>
       <tr>
            <td>{{ $profil-> nama_gereja}}</td>
            <td>{{ $profil-> alamat_gereja}}</td>
            <td>{{ $profil-> tlp_gereja}}</td>
            <td>{{ $profil-> email_gereja}}</td>
            <td>{{ $profil-> sejarah_gereja}}</td>
            <td>{{ $profil-> visi_gereja}}</td>
            <td>{{ $profil-> misi_gereja}}</td>
        </tr>
    </tbody>
    
</table>


</div>
</div>
</div>
<br/>
<div class="card mb-3">

<div class="card-header">
            <i class="fas fa-table"></i>
            Daftar Majelis & Pendeta GKJ Samironobaru Jogja</div>

<div class="card-body">
<a href="/profil/cpendeta">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Create Daftar Pendeta</i>
</button></a>

<br/><br/>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pendeta</th>
            <th>Telepon Pendeta</th>
            <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>    
    </thead>
    <tbody>
    @foreach($pendeta as $pendeta)
        <tr>
            <td>{{ $pendeta ->id }}</td>
            <td>{{ $pendeta ->nama_pendeta }}</td>
            <td>{{ $pendeta ->tlp_pendeta }}</td>
            <td>{{ $pendeta ->keterangan_pendeta }}</td>
            <td><a href="/profil/spendeta/{{$pendeta->id}}">Show</a> </td>
            <td><a href="/profil/ependeta/{{$pendeta->id}}">Edit</a> </td>
            <td><a href="/profil/dpendeta/{{$pendeta->id}}">Delete</a> </td>
        </tr>
    @endforeach
    </tbody>
    </table>
        </div>
    </div>
</div>


<br/><br/><br/>

@endsection()

