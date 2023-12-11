@extends('master')
@section('title','Edit Mahasiswa')

@section('konten')
	<h3>Edit Mahasiswa</h3>

	@foreach($mahasiswa as $m)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="NRP" value="{{ $m->NRP }}"> <br/>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right">NRP:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="NRP" value="{{ $m->NRP }}" placeholder="Masukkan NRP">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="Nama" value="{{ $m->Nama}}" placeholder="Masukkan Nama">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Jurusan:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Jurusan" value="{{ $m->Jurusan}}" placeholder="Masukkan Jurusan">
              </div>
            </div>
        <div class="form-group row">
                <label class="control-label col-sm-2 align-right" >IPK:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="IPK" value="{{ $m->IPK}}" placeholder="IPK">
                  </div>
            </div>
        <div class="form-group row">
            <div class="control-label col-sm-2 align-right" ></div>
            <div class="col-sm-10">
                <input class="btn btn-success" type="submit" value="Simpan">
                |
                <a class="btn btn-warning" href="/mahasiswa"> Kembali</a>
            </div>
          </div>
	</form>
	@endforeach

@endsection
