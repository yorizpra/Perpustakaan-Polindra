@extends('layouts/main')

@section('title', 'Form Tambah Data Buku')

@section('container')
<div class="container">
  <center><h1 class="mt-3">Form Tambah Data Buku</h1></center>
            
  <form method="post" action="/items">
  @csrf
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Masukan judul" name="judul" value="{{ old('judul') }}">
    @error('judul')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="jenis_buku">Jenis buku</label>
    <input type="text" class="form-control @error('jenis_buku') is-invalid @enderror" id="jenis_buku" placeholder="Masukan jenis_buku" name="jenis_buku" value="{{ old('jenis_buku') }}">
    @error('jenis_buku')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="pengarang">Pengarang</label>
    <input type="text" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang" placeholder="Masukan pengarang" name="pengarang" value="{{ old('pengarang') }}">
    @error('pengarang')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="penerbit">Penerbit</label>
    <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" placeholder="Masukan penerbit" name="penerbit" value="{{ old('penerbit') }}">
    @error('penerbit')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="tahun_terbit">Tahun Terbit</label>
    <input type="number" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" placeholder="Masukan tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
    @error('tahun_terbit')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="jumlah_buku">Jumlah Buku</label>
    <input type="number" class="form-control @error('jumlah_buku') is-invalid @enderror" id="jumlah_buku" placeholder="Masukan jumlah_buku" name="jumlah_buku" value="{{ old('jumlah_buku') }}">
    @error('jumlah_buku')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukan deskripsi" name="deskripsi" value="{{ old('deskripsi') }}">
    @error('deskripsi')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data!</button>
  <a href = "{{ url('/items') }}"><input type="button" class="btn btn-danger" value="Kembali"></a>
</form>

</div>
@endsection