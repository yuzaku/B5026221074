@extends('master')
@section('title','Tambah Pegawai')

@section('konten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Pegawai</h3>
    <br>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		Nama <input class="form-control" type="text" name="nama"> <br/>
		Jabatan <input class="form-control" type="text" name="jabatan"> <br/>
		Umur <input class="form-control" type="number" name="umur"> <br/>
		Alamat <textarea class="form-control" name="alamat"></textarea> <br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
        |
        <a class="btn btn-warning" href="/pegawai"> Kembali</a>
	</form>



@endsection
