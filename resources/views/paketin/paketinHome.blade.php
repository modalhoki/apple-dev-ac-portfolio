@extends('paketin.paketin')
@section('view')

<div class="px-5">
  <div class="row" id="home-content">
    <div class="col">
      <div class="row" id="judul-main-features">
        <div class="col">
          <h1>Yuk, Paket.in!</h1>
          <hr>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-6 g-4" id="paketin-features">
        <div class="col">
          <a href="{{ route('pemaketan') }}" class="text-reset text-decoration-none">
            <div class="card justify-content-center">
              <img src="{{ asset('/img/box.png ') }}" class="card-img-top img-fluid m-auto mt-3" alt="..." style="max-width : 30%">
              <div class="card-body">
                <h5 class="card-title text-center">Pemaketan</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="{{ route('pengiriman') }}" class="text-reset text-decoration-none">
            <div class="card justify-content-center">
              <img src="{{ asset('/img/truck.png') }}" class="card-img-top img-fluid m-auto mt-3" alt="..." style="max-width : 30%">
              <div class="card-body">
                <h5 class="card-title text-center">Pengiriman</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="{{ route('keranjang') }}" class="text-reset text-decoration-none">
            <div class="card justify-content-center">
              <img src="{{ asset('/img/shopping.png ') }}" class="card-img-top img-fluid m-auto mt-3" alt="..." style="max-width : 30%">
              <div class="card-body">
                <h5 class="card-title text-center">Keranjang</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="{{ route('history') }}" class="text-reset text-decoration-none">
            <div class="card justify-content-center">
              <img src="{{ asset('/img/clock-history.svg') }}" class="card-img-top img-fluid m-auto mt-3" alt="..." style="max-width : 30%">
              <div class="card-body">
                <h5 class="card-title text-center">Transaction History</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="{{ route('trace-track') }}" class="text-reset text-decoration-none">
            <div class="card justify-content-center">
              <img src="{{ asset('/img/search.svg') }}" class="card-img-top img-fluid m-auto mt-3" alt="..." style="max-width : 30%">
              <div class="card-body">
                <h5 class="card-title text-center">Trace & Track</h5>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="row mt-5" id="judul-admin">
        <div class="col">
          <h1>Administrator</h1>
          <hr>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-6 g-4" id="admin-things">
        <div class="col">
          <a href="{{ route('customerlist') }}" class="text-reset text-decoration-none">
            <div class="card justify-content-center">
              <img src="{{ asset('/img/customer.png ') }}" class="card-img-top img-fluid m-auto mt-3" alt="..." style="max-width : 30%">
              <div class="card-body">
                <h5 class="card-title text-center">Customer List</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="{{ route('courrierlist') }}" class="text-reset text-decoration-none">
            <div class="card justify-content-center">
              <img src="{{ asset('/img/datakurir.png ') }}" class="card-img-top img-fluid m-auto mt-3" alt="..." style="max-width : 30%">
              <div class="card-body">
                <h5 class="card-title text-center">Courrier List</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="{{ route('statistics') }}" class="text-reset text-decoration-none">
            <div class="card justify-content-center">
              <img src="{{ asset('/img/statistik.png ') }}" class="card-img-top img-fluid m-auto mt-3" alt="..." style="max-width : 30%">
              <div class="card-body">
                <h5 class="card-title text-center">Statistics</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="{{ route('listpaket') }}" class="text-reset text-decoration-none">
            <div class="card justify-content-center">
              <img src="{{ asset('/img/paket.png ') }}" class="card-img-top img-fluid m-auto mt-3" alt="..." style="max-width : 30%">
              <div class="card-body">
                <h5 class="card-title text-center">All Transactions</h5>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection