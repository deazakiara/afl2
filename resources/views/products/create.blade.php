@extends('layouts.app')

@section('title', 'Add Product - Lumospace')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="text-center mb-4">Add New Product</h1>

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
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Price ($)</label>
                                <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Product Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(event)">
                                <img id="preview" class="mt-3" src="#" style="max-width:100%; display:none;">
                            </div>

                            <button type="submit" class="btn btn-dark w-100">Save Product</button>
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

