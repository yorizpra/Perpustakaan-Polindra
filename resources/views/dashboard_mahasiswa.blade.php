@extends('layouts.mhs')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <center><h1 class="mt-3"> Halo {{ session('nama') }} Selamat Datang</h1></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
