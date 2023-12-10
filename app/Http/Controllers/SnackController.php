<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SnackController extends Controller
{
	public function snack()
	{
    	// mengambil data dari table pegawai
		$snack = DB::table('snack')->get();
        // $pegawai = DB::table('snack')
        // ->orderBy('pegawai_nama', 'asc')
        // ->paginate(10);

    	// mengirim data pegawai ke view index
		return view('snack',['snack' => $snack]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahsnack()
	{

		// memanggil view tambah
		return view('tambahsnack');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('snack')->insert([
			'merksnack' => $request->merksnack,
			'stocksnack' => $request->stocksnack,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/snack');

	}

	// method untuk edit data pegawai
	public function editsnack($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$snack = DB::table('snack')->where('kodesnack',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editsnack',['snack' => $snack]);

	}

	// update data pegawai
	public function updatesnack(Request $request)
	{
		// update data pegawai
		DB::table('snack')->where('kodesnack',$request->kodesnack)->update([
			'merksnack' => $request->merksnack,
			'stocksnack' => $request->stocksnack,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/snack');
	}

	// method untuk hapus data pegawai
	public function hapussnack($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('snack')->where('kodesnack',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/snack');
	}
}
