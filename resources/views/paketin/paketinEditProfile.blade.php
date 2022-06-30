@extends('paketin.paketin')
@section('view')
<div class="row mx-3 px-3">
    <div class="col">
        <div class="row">
            <div class="col">
                <h1>Edit Profile</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('posteditprofile') }}">
                    {{ csrf_field() }}
                    <div class="form-group mb-3">
                        <label for="name" class="mb-1">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $userdata->name }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="mb-1">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $userdata->email }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="noHp" class="mb-1">Nomor Telefon</label>
                        <input type="text" class="form-control" id="nphp" name="noHp" value="{{ $userdata->noHp }}">
                    </div>

                    <div class="form-group mb-5">
                        <label for="alamat" class="mb-1">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $userdata->alamat }}">
                    </div>

                    <div class="form-group">
                        <button style="cursor:pointer" type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection