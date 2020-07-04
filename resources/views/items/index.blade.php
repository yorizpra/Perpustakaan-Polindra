@extends('layouts/main')

@section('title', 'Data Buku')

@section('container')
<div class="container">
  <center><h1 class="mt-3">Data Buku</h1></center>
  <a href="/items/Create" class="btn btn-primary my-3">Tambah Data Buku</a>  

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Jenis Buku</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Jumlah Buku</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $items as $item )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->jenis_buku }}</td>
                <td>{{ $item->pengarang }}</td>
                <td>{{ $item->penerbit }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>{{ $item->jumlah_buku }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <a href="items/{{ $item->id_buku }}" class="btn btn-primary">Edit</a>
                    <form action="items/{{ $item->id_buku }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
  </table>
</div>
@endsection