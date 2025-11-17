@extends('layouts.app')

@section('title', 'Edit Product - Lumospace')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="text-center mb-4">Edit Product</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Price ($)</label>
                                <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Current Image</label><br>
                                @if($product->image)
                                    <img id="preview" src="{{ asset('storage/' . $product->image) }}" style="max-width:100%;">
                                @else
                                    <img id="preview" src="#" style="max-width:100%; display:none;">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Change Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(event)">
                            </div>

                            <button type="submit" class="btn btn-dark w-100">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview');
        output.src = reader.result;
        output.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@endsection

