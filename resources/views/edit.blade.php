@extends('master')
@section('title','Edit Pegawai')

@section('konten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
        |
        <a class="btn btn-warning" href="/pegawai"> Kembali</a>
	</form>
	@endforeach

@endsection
