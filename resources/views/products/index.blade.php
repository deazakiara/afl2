@extends('layouts.app')

@section('title', 'Shop - Lumospace')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-4">Our Collection</h1>
            <!-- Search Result Info -->
            @if (request()->has('q'))
                <p class="text-center text-muted mb-3">
                    Showing results for: <strong>"{{ request('q') }}"</strong>
                </p>
            @endif

            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('assets/images/' . $product->image) }}" class="card-img-top"
                                alt="{{ $product->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-muted">${{ $product->price }}</p>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-dark btn-sm">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
        </div>

    </section>
@endsection
