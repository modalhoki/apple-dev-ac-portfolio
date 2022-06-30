@extends('paketin.paketin')
@section('view')
<div class="row mx-3 px-3">
    <div class="col">
        <div class="row">
            <div class="col">
                <h1> <img src="{{ asset('/img/statistik.png ') }}" alt="gambar box" width="50" height="50">&nbsp;&nbsp;Statistics</h1>
                <hr>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="Nama Barang" required="required" class="mb-1 me-1">Login Count:</label>{{ $logincount }}
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Date & Time</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach($statistik as $d)
                        <tr>
                            <td>{{ $d->actionName}}</td>
                            <td>{{ $d->datetime}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                {!! $statistik->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
</div>
@endsection