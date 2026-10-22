@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card shadow-md">
            <div class="card-body">
                <div class="card-title">
                    <h3 class="card-title">
                        Selamat datang di {{ config('app.name') }}
                    </h3>
                    <p class="card-text">
                        Toko kami menyediakan berbagai macam produk berkualitas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
