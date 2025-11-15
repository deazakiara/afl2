@extends('layouts.app')

@section('title', 'Contact Us - Lumospace')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="text-center mb-5">Get in Touch</h1>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <p class="lead mb-3">Need assistance or want to learn more about our products?</p>
                <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> 124 Harmony St, London, UK</p>
                <p class="mb-1"><i class="bi bi-envelope-fill"></i> contact@lumospace.com</p>
                <p><i class="bi bi-telephone-fill"></i> +44 123 456 7890</p>
            </div>
        </div>

        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <i class="bi {{ $service->icon }} display-6 mb-3 text-warning"></i>
                    <h5 class="card-title">{{ $service->name }}</h5>
                    <p class="card-text text-muted">{{ $service->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
