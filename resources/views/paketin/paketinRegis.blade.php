@extends('paketin.master')
@section('master')
<div class="container">
    <a href="{{ url('/') }}" class="text-reset text-decoration-none">
        <h1 class="text-center mt-4 text-reset text-decoration-none"><img src="{{ asset('/img/kurir.png ') }}" width="4%" alt="" class="me-3"><b>Paket.in</b></h1>
    </a>
    <h2 class="text-center">Register Page</h2>
    <hr>
    @if(session('error'))
    <div class="alert alert-danger">
        <b>Oops!</b> {{session('error')}}
    </div>
    @endif
    <!-- >
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <-->

    <form method="POST" action="{{ route('postregis') }}">
        {{ csrf_field() }}
        <div class="form-group mb-3">
            <label for="name" class="mb-1">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group mb-3">
            <label for="email" class="mb-1">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group mb-5">
            <label for="password" class="mb-1">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        <hr>
        <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
    </form>
</div>
@endsection