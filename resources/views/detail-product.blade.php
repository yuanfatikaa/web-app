@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <h3 class="text-success mb-3">Detail Harga Produk</h3>
                <p class="text-muted">Harga produk yang Anda pilih:</p>
                <h2 class="fw-bold text-dark bg-light p-3 rounded border mb-4">Rp {{ $harga }}</h2>
                <a href="/product" class="btn btn-secondary">Kembali ke Produk</a>
            </div>
        </div>
    </div>
</div>
@endsection