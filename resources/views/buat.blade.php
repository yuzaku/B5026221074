@extends('master')
@section('title','Tambah Nilai')

@section('konten')
	<h3>Tambah Nilai</h3>
    <br>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		NRP <input class="form-control" type="text" name="NRP"> <br/>
		Nilai Angka <input class="form-control" type="text" name="NilaiAngka"> <br/>
		SKS <input class="form-control" type="number" name="SKS"> <br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
        |
        <a class="btn btn-warning" href="/nilaikuliah"> Kembali</a>
	</form>



@endsection
