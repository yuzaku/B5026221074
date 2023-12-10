@extends('master')
@section('title','Tambah Keranjang Belanja')

@section('konten')
	<h3>Tambah Keranjang Belanja</h3>
    <br>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		Kode Barang <input class="form-control" type="number" name="KodeBarang"> <br/>
		Jumlah <input class="form-control" type="number" name="Jumlah"> <br/>
		Harga <input class="form-control" type="number" name="Harga"> <br/>
		<input class="btn btn-success" type="submit" value="Beli">
        |
        <a class="btn btn-warning" href="/keranjangbelanja"> Kembali</a>
	</form>



@endsection
