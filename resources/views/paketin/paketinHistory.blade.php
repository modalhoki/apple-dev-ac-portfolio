@extends('paketin.paketin')
@section('view')
<div class="row mx-3 px-3">
    <div class="col">
        <div class="row">
            <div class="col">
                <h1><img src="{{ asset('/img/clock-history.svg ') }}" alt="gambar box" width="50" height="50">&nbsp;&nbsp;Transaction History</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Penerima</th>
                            <th>Alamat Pengiriman</th>
                            <th>Nama Barang</th>
                            <th>Material Barang</th>
                            <th>No. Penerima</th>
                            <th>Nomor Resi</th>
                            <th>Tipe Barang</th>
                            <th>Bahan Pengemasan</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach($datapaket as $d)
                        <tr>
                            <td>{{ $d->namaPenerima }}</td>
                            <td>{{ $d->alamatPengiriman }}</td>
                            <td>{{ $d->namaBarang}}</td>
                            <td>{{ $d->materialBarang }}</td>
                            <td>{{ $d->noPenerima }}</td>
                            <td>{{ $d->noResi }}</td>
                            <td>{{ $d->typeBarang }}</td>
                            <td>{{ $d->bahanPengemasan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection