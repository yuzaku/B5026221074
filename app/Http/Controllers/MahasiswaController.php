<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
	public function index()
	{
		$mahasiswa = DB::table('mahasiswa')->get();
		return view('mahasiswa',['mahasiswa' => $mahasiswa]);

	}

	public function edit($id)
	{
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		return view('editmahasiswa',['mahasiswa' => $mahasiswa]);

	}
	public function update(Request $request)
	{
		DB::table('mahasiswa')->where('NRP',$request->NRP)->update([
			'NRP' => $request->NRP,
			'Nama' => $request->Nama,
			'Jurusan' => $request->Jurusan,
			'IPK' => $request->IPK
		]);
		return redirect('/mahasiswa');
	}
    public function lihat($id)
	{
        $mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		return view('viewmahasiswa',['mahasiswa' => $mahasiswa]);

	}
}
