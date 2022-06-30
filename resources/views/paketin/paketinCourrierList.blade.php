@extends('paketin.paketin')
@section('view')
<div class="row mx-3 px-3">
    <div class="col">
        <div class="row">
            <div class="col">
                <h1> <img src="{{ asset('/img/datakurir.png ') }}" alt="gambar box" width="50" height="50">&nbsp;&nbsp;Courier List</h1>
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
                        @foreach($daftarcourrier as $d)
                        <tr>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->noHp }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>
                                <a href="/courrierlist/resetpwd/{{ $d->id }}" class="btn btn-warning me-3">Reset Password</a>
                                <a href="/courrierlist/delete/{{ $d->id }}" class="btn btn-danger">DELETE</a>
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