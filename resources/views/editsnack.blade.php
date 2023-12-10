@extends('master')
@section('title','Edit Snack')

@section('konten')
	<h3>Edit Snack</h3>

	@foreach($snack as $s)
	<form action="/snack/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodesnack" value="{{ $s->kodesnack }}"> <br/>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right">Merk Snack:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="merksnack" value="{{ $s->merksnack }}" placeholder="Masukkan Merk Snack">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Stock Snack:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="stocksnack" value="{{ $s->stocksnack }}" placeholder="Masukkan Stock Snack">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Tersedia:</label>
            <div class="col-sm-10">
                @if ($s->tersedia == "Y")
                <div class="form-check"><input type="radio" class="form-check-input" name="tersedia" style="text-transform:uppercase" value="Y" checked>Tersedia</div>
                <div class="form-check"><input type="radio" class="form-check form-check-input" name="tersedia" style="text-transform:uppercase" value="T"> Tidak Tersedia</div>
                @else
                <div class="form-check"><input type="radio" class="form-check-input" name="tersedia" style="text-transform:uppercase" value="Y">Tersedia</div>
                <div class="form-check"><input type="radio" class="form-check form-check-input" name="tersedia" style="text-transform:uppercase" value="T" checked> Tidak Tersedia</div>
                @endif
            </div>
          </div>
          <div class="form-group row">
            <div class="control-label col-sm-2 align-right" ></div>
            <div class="col-sm-10">
                <input class="btn btn-success" type="submit" value="Simpan">
                |
                <a class="btn btn-warning" href="/snack"> Kembali</a>
            </div>
          </div>
	</form>
	@endforeach

@endsection
