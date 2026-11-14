@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Daftar Produk</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                        Sepatu
                        <a href="/produk/detail/300.000" class="btn btn-sm btn-outline-primary">Detail (Rp 300.000)</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                        Baju
                        <a href="/produk/detail/200.000" class="btn btn-sm btn-outline-primary">Detail (Rp 200.000)</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                        Celana
                        <a href="/produk/detail/150.000" class="btn btn-sm btn-outline-primary">Detail (Rp 150.000)</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection