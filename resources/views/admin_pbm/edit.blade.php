@extends('layouts/main')

@section('title', 'Form Ubah Data Peminjaman Buku')

@section('container')
<div class="container">
  <center><h1 class="mt-3">Anda yakin data ini sudah kembali?</h1></center>

  <form method="post" action="Edit/{{ $data->id_peminjaman }}">
  @method('patch')
  @csrf
  <div class="form-group">
    <label for="id_peminjaman">ID Peminjaman</label>
    <input type="text" class="form-control @error('id_peminjaman') is-invalid @enderror" id="id_peminjaman" placeholder="" name="id_peminjaman" value="{{ $data->id_peminjaman }}" readonly>
    @error('id_peminjaman')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="status"></label>
    <input type="hidden" class="form-control @error('status') is-invalid @enderror" id="status" placeholder="" name="status" value="kembali" readonly>
    @error('status')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <center>
  <button type="submit" class="btn btn-primary">Yakin</button>
  <a href = "{{ url('/admin_pbm') }}"><input type="button" class="btn btn-danger" value="Belum Yakin"></a>
  </center>
</form>

</div>
@endsection