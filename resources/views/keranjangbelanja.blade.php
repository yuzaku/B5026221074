@extends('master')

@section('title', 'Keranjang Belanja')

@section('konten')
<a href="/keranjangbelanja/tambahbelanja" class="btn btn-primary"> + Tambah Barang Baru</a>
<br/>
<br/>
    <table class="table table-striped table-hover">
        <tr>
            <td>Kode Pembelian</td>
            <td>Kode Barang</td>
            <td>Jumlah Barang</td>
            <td>Harga Barang</td>
            <td>Total</td>
            <td>Action</td>
        </tr>
        @foreach ($keranjangbelanja as $kb)
            <tr>
                <td>{{ $kb->ID }}</td>
                <td>{{ $kb->KodeBarang }}</td>
                <td>{{ $kb->Jumlah }}</td>
                <td>{{ number_format($kb->Harga, 2) }}</td>
                <td>{{ number_format($kb->Jumlah * $kb->Harga, 2) }}
                <td>
                    <a href="/keranjangbelanja/hapus/{{ $kb->ID}}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
