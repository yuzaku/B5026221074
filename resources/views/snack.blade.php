@extends('master')

@section('title','Snack')

@section('konten')
<h3>Daftar Snack</h3>
<a href="/snack/tambah" class="btn btn-primary"> Tambah Snack</a>
<table class="table table-striped table-hover">
    <tr>
        <th>Kode Snack</th>
        <th>Merk Snack</th>
        <th>Stock Snack</th>
        <th>Tersedia </th>
        <th>Action</th>
    </tr>
    @foreach($snack as $s)
    <tr>
        <td>{{ $s->kodesnack }}</td>
        <td>{{ $s->merksnack }}</td>
        <td>{{ $s->stocksnack }}</td>
        @if ($s->tersedia == "Y")
        <td>Tersedia</td>
        @else
        <td>Tidak Tersedia</td>
        @endif
        <td>
            <a href="/snack/editsnack/{{ $s->kodesnack }}" class="btn btn-warning">Edit</a>
            |
            <a href="/snack/hapus/{{ $s->kodesnack }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
