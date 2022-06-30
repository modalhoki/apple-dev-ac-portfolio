@extends('paketin.master')
@section('master')
<div class="container"><br>
  <div class="row">
    <div class="col">
      <a href="{{ url('/') }}" class="text-reset text-decoration-none">
        <h1 class="text-center"><img src="{{ asset('/img/kurir.png ') }}" width="4%" alt="" class="me-3"><b>Paket.in</b></h1>
      </a>
      <h2 class="text-center">Login</h2>
      <h3 class="text-center">Early Prototype</h3>
      <hr>
      @if(session('error'))
      <div class="alert alert-danger">
        <b>Oops!</b> {{session('error')}}
      </div>
      @endif
      <form action="{{ route('postlogin') }}" method="post">
        @csrf
        <div class="form-group">
          <label class="mb-1">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Email" required="">
        </div>
        <div class="form-group mt-3">
          <label class="mb-1">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required="">
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-5">Log In</button>
        <hr>
        <p class="text-center">Belum punya akun? <a href="{{ route('regis') }}">Register</a> sekarang!</p>
      </form>
    </div>
  </div>
</div>
@endsection