@extends('layouts.app')

@section('title', $product->name . ' - Lumospace')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/' . $product->image) }}" class="img-fluid rounded shadow" alt="{{ $product->name }}">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p class="text-muted mb-3">${{ $product->price }}</p>
                <p>{{ $product->long_description }}</p>
                <a href="{{ route('service') }}" class="btn btn-warning px-4">Order This Product</a>
            </div>
        </div>
    </div>
</section>
@endsection
