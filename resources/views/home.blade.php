@extends('layouts.app')

@section('title', 'Lumospace - Illuminate Your Home')

@section('content')

    <section class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-3"> Brighten Your Space<br> With Modern Lighting & Furniture </h1>
                    <p class="lead mb-4"> Discover minimalist design and timeless craftsmanship for every room. </p> <a
                        href="{{ route('products') }}" class="btn btn-dark btn-lg px-4">Explore Collection</a>
                </div>
                <div class="col-lg-6 text-center"> <img src="{{ asset('assets/images/hero_lamp.png') }}" alt="Lamp"
                        class="img-fluid rounded shadow"> </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Our Best Sellers</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-4 d-flex align-items-stretch">
                    <div class="card border-0 shadow-sm w-100">
                        <div class="ratio ratio-1x1" style="overflow: hidden;"> <img
                                src="{{ asset('assets/images/mushroom.png') }}" class="card-img-top" alt="Lamp 1"
                                style="object-fit: cover;"> </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">French Cream Mushroom Lamp</h5>
                            <p class="card-text">Minimal yet warm glow for your modern workspace.</p> <a
                                href="{{ route('products') }}" class="btn btn-outline-dark mt-auto">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex align-items-stretch">
                    <div class="card border-0 shadow-sm w-100">
                        <div class="ratio ratio-1x1" style="overflow: hidden;"> <img
                                src="{{ asset('assets/images/tulip.png') }}" class="card-img-top" alt="Chair"
                                style="object-fit: cover;"> </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">White Table Lamp</h5>
                            <p class="card-text">Minimal yet warm glow for your modern workspace.</p> <a
                                href="{{ route('products') }}" class="btn btn-outline-dark mt-auto">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> @endsection
