@extends('master')

@section('title','Lihat Mahasiswa')

@section('konten')
<center><h3>View Data Mahasiswa</h3></center>

@foreach ($mahasiswa as $m)
<br>
<br>
<div class="row border-all">
    <div class="col-6">
        <br>
        <div class="square border-lihat mx-auto"></div>
        <br>

    </div>
    <div class="col-6">
        <br>
        <br>
        <ul class="list-group">
            <li class="list-group-item">NRP : {{$m->NRP}}</li>
            <li class="list-group-item">Nama : {{$m->Nama}}</li>
            <li class="list-group-item">Jurusan : {{$m->Jurusan}}</li>
            <li class="list-group-item">IPK : {{$m->IPK}}</li>
        </ul>
        <br>
        <center><a class="btn btn-success mx-auto" href="/mahasiswa"> OK</a></center>
    </div>

</div>
<br>
<br>
@endforeach


@endsection
