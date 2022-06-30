@extends('paketin.master')
@section('master')
<header>
    <nav class="navbar navbar-expand-lg navbar-light" aria-label="breadcrumb">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('/img/kurir.png ') }}" width="30" alt="Gambar Paketin" class="d-inline-block me-1">
                <b class="">Paket.in</b>
            </a>
            <!--span class="navbar-text">/ Link</span-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ol class="breadcrumb pt-3">
                <li class="breadcrumb-item"><a href="#"></a></li>
                @foreach($link as $l)
                <li class="breadcrumb-item active" aria-current="page">{{ $l }}</li>
                @endforeach
            </ol>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pemaketan') ? 'active' : '' }}" aria-current="page" href="{{ route('pemaketan') }}"><img class="me-1" src="{{ asset('/img/box.png ') }}" alt="gambar box" width="21" height="21">Pemaketan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('keranjang') ? 'active' : '' }}" aria-current="page" href="{{ route('keranjang') }}"><img class="me-1" src="{{ asset('/img/shopping.png ') }}" alt="gambar box" width="21" height="21">Keranjang</a>
                    </li>
                </ul>
                <div class="m-3"></div>
                <span class="navbar-text pe-2">
                    {{ $userdata->sebagai }} /
                </span>
                <img src="{{ asset('/img/person-circle.svg') }}" alt="" class="d-inline-block">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $userdata->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('myprofile') }}">View Profile</a></li>
                            <li><a class="dropdown-item link-danger" href="{{ route('logout') }}">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="pb-3"></div>
</header>

<main>
    @yield('view')
    <div class="p-3"></div>
</main>

<footer class="mt-auto bg-dark bg-gradient text-white text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3">
        Paketin © 2022 RBPL A | Kelompok V
    </div>
    <!-- Copyright -->
</footer>

@endsection