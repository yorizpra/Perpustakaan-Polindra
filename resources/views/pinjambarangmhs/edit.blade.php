@extends('layout/mhs')

@section('title', 'Form Ubah Data Ruangan')

@section('container')
<div class="container">
  <center><h1 class="mt-3">Form Ubah Data Ruangan</h1></center>

  <form method="post" action="Edit/{{ $room->id_ruangan }}">
  @method('patch')
  @csrf
  <div class="form-group">
    <label for="id_ruangan">ID_Ruangan</label>
    <input type="number" class="form-control @error('id_ruangan') is-invalid @enderror" id="id_ruangan" placeholder="Masukan ID_Ruangan" name="id_ruangan" value="{{ $room->id_ruangan }}">
    @error('id_ruangan')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="nama_ruangan">Nama Ruangan</label>
    <input type="text" class="form-control @error('nama_ruangan') is-invalid @enderror" id="nama_ruangan" placeholder="Masukan nama_ruangan" name="nama_ruangan" value="{{ $room->nama_ruangan }}">
    @error('nama_ruangan')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="jenis_ruangan">Jenis Ruangan</label>
    <input type="text" class="form-control @error('jenis_ruangan') is-invalid @enderror" id="jenis_ruangan" placeholder="Masukan jenis_ruangan" name="jenis_ruangan" value="{{ $room->jenis_ruangan }}">
    @error('jenis_ruangan')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Ubah Data!</button>
</form>

</div>
@endsection