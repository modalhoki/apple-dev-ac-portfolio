@extends('paketin.paketin')
@section('view')
<div class="row mx-3 px-3">
    <div class="col">
        <div class="row">
            <div class="col">

                <h1> <img src="{{ asset('/img/box.png ') }}" alt="gambar box" width="50" height="50">&nbsp;&nbsp;Pemaketan</h1>
                <hr>

                <!--  <h1 align="center"> <u>Pemaketan</u></h1>-->
                <!--hr-->
            </div>
        </div>
        <!-- Yogik Septiadi -->
        <div class="row" id="konten">
            <div class="col">
                <form action="{{ route('postpemaketan') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Nama Barang" required="required" class="mb-1">Nama Barang:</label>
                        <input type="text" name="NamaBarang" class="form-control mb-3">
                    </div>
                    <!-- Type Barang -->
                    <div class="form-group">
                        <label for="Type Barang" class="mb-1">Type Barang:</label>
                        <select class="form-control mb-3" name="TypeBarang">
                            <option value=”Lunak”>Lunak</option>
                            <option value=”MudahPecah”>Mudah Pecah</option>
                            <option value=”Keras”>Keras</option>
                            <option value=”Lainya”>Lainya</option>
                        </select>
                    </div>
                    <!-- Material Barang -->
                    <div class="form-group">
                        <label for="MaterialBarang" class="mb-1">Material Barang:</label>
                        <input type="text" required="required" name="MaterialBarang" class="form-control mb-3">
                    </div>
                    <!-- Bahan Pengemasan -->
                    <div class="form-group">
                        <label for="Bahan Pengemasan mb-3" class="mb-1">Bahan Pengemasan:</label>
                        <select class="form-control mb-3" name="BahanPengemasan">
                            <option value=”Kertas”>Kertas</option>
                            <option value=”Plastik”>Plastik</option>
                            <option value=”Keras”>Box</option>
                            <option value=”Kayu”>Kayu</option>
                            <option value=”Lainya”>Lainya</option>
                        </select>
                    </div>
                    <!-- Alamat Tujuan -->
                    <div class="form-group">
                        <label for="alamat" class="mb-1">Alamat:</label>
                        <textarea class="form-control mb-3" name="alamat" required="required" rows="3"></textarea>
                    </div>
                    <!-- Nama Penerima -->
                    <div class="form-group">
                        <label for="Nama Penerima" class="mb-1">Nama Penerima:</label>
                        <input type="text" name="NamaPenerima" class="form-control mb-3">
                    </div>
                    <!-- No.Telp -->
                    <div class="form-group">
                        <label for="No.Telp" class="mb-1">No.Telp:</label>
                        <input type="number" required="required" name="NoTelp" class="form-control mb-3">
                    </div> <br>
                    <!-- <button onclick="myalert()"> -->
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <script>
                        function myalert() {
                            alert("Data anda disimpan!");
                        }
                    </script>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
