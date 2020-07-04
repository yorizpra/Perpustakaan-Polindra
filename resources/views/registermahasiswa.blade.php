<!DOCTYPE html>
<html lang="en">

<head>
 <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{csrf_token()}}">


  <!-- Custom fonts for this template-->
  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{url('css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css"> 

  <link href="{{url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

 <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table').DataTable();
        } );
    </script> 
</head>
<body id="page-top">

 <div class="card">
            <div class="card-header">
                <h3>Tambah Data Anggota</h3>
                @if($errors->any())
                              <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <ul>
                                      @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                      @endforeach
                                    </ul>
                              </div>
                            @endif
            </div>
            <div class="card-body">
            <form method="post" action="{{ url('/registermahasiswaPost') }}" enctype="multipart/form-data">
               @csrf
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Anggota</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                    <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin">
                    <option selected disabled value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki"  {{ old('jenis_kelamin') == 1 ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan"  {{ old('jenis_kelamin') == 2 ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="alamat" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_telepon" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                    <input type="text" name="no_telepon" class="form-control" id="no_telepon" required="">
                    </div>
                </div>

                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    <a href = "{{ url('/users') }}"><input type="button" class="btn btn-danger" value="Kembali"></a>
                    </div>
               
            </form>
            </div>
        </div>




</body>

</html>