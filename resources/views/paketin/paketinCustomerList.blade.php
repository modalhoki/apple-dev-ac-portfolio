@extends('paketin.paketin')
@section('view')
<div class="row mx-3 px-3">
    <div class="col">
        <div class="row">
            <div class="col">
                <h1> <img src="{{ asset('/img/customer.png ') }}" alt="gambar box" width="50" height="50">&nbsp;&nbsp;Customer List</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach($daftarcustomer as $d)
                        <tr>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->noHp }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>
                                <a href="/customerlist/resetpwd/{{ $d->id }}" class="btn btn-warning">Reset Password</a>
                                <!--|
                                <a href="/customerlist/delete/{{ $d->id }}" class="btn btn-danger">DELETE</a-->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
