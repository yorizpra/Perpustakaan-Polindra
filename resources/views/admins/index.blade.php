@extends('layouts/main')

@section('title', 'Data Admin')

@section('container')
<div class="container">
  <center><h1 class="mt-3">Data Admin</h1></center>
  <a href="/registeradmin" class="btn btn-primary my-3">Tambah Data Admin</a>  

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID_Admin</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $admins as $admin )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $admin->id_admin }}</td>
                <td>{{ $admin->nama }}</td>
                <td>{{ $admin->jenis_kelamin }}</td>
                <td>{{ $admin->no_telepon }}</td>
                <td>{{ $admin->alamat }}</td>
                <td>
                    <a href="admins/{{ $admin->id_admin }}" class="btn btn-primary">Edit</a>
                    <form action="admins/{{ $admin->id_admin }}" method="post" class="d-inline">
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
</div>
@endsection

    