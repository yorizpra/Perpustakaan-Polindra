@extends('layouts/main')

@section('title', 'Daftar Anggota')

@section('container')
<div class="container">
  <center><h1 class="mt-3">Daftar Anggota</h1></center>
  <a href="/registermahasiswa" class="btn btn-primary my-3">Tambah Data Anggota</a>  

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
            <th scope="col">Username</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $users as $usr )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $usr->username }}</td>
                <td>{{ $usr->nama }}</td>
                <td>{{ $usr->jenis_kelamin }}</td>
                <td>{{ $usr->no_telepon }}</td>
                <td>{{ $usr->alamat }}</td>
                <td>
                    <a href="users/{{ $usr->id_user }}" class="btn btn-primary">Edit</a>
                    <form action="users/{{ $usr->id_user }}" method="post" class="d-inline">
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