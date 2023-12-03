@extends('master')

@section('title','Lihat Pegawai')

@section('konten')
<center><h3>View Data Pegawai</h3></center>

@foreach ($pegawai as $p)
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
            <li class="list-group-item">Nama : {{$p->pegawai_nama}}</li>
            <li class="list-group-item">Jabatan : {{$p->pegawai_jabatan}}</li>
            <li class="list-group-item">Umur : {{$p->pegawai_umur}}</li>
            <li class="list-group-item">Alamat : {{$p->pegawai_alamat}}</li>
        </ul>
        <br>
        <center><a class="btn btn-success mx-auto" href="/pegawai"> OK</a></center>
    </div>

</div>
<br>
<br>
@endforeach


@endsection
