@extends('paketin.paketin')
@section('view')
<div class="row mx-3 px-3">
    <div class="col">
        <div class="row">
            <div class="col">
                <h1><img src="{{ asset('/img/person-circle.svg ') }}" alt="gambar box" width="50" height="50">&nbsp;&nbsp;My Profile</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('postregis') }}">
                    {{ csrf_field() }}
                    <div class="form-group mb-3">
                        <label for="name" class="mb-1">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $userdata->name }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="mb-1">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $userdata->email }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label for="noHp" class="mb-1">Nomor Telefon</label>
                        <input type="text" class="form-control" id="nphp" name="noHp" value="{{ $userdata->noHp }}" readonly>
                    </div> 
                    
                    <div class="form-group mb-3">
                        <label for="alamat" class="mb-1">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $userdata->alamat }}" readonly>
                    </div> 

                    <div class="form-group mb-3">
                        <label for="role" class="mb-1">Registered As</label>
                        <input type="text" class="form-control" id="role" name="sebagai" value="{{ $userdata->sebagai }}" readonly>
                    </div> 
                </form>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ route('editprofile') }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection