@extends('layouts/main')

@section('title', 'Perpustakaan Polindra')

@section('container')
<div class="container">                    
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
       <center><h1 class="mt-3"> Selamat Datang Admin {{ session('nama') }} </h1></center>
    </div>
</div>
@endsection