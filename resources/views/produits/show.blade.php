<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{ $produit->image_url }}" class="img-fluid rounded" alt="{{ $produit->name }}">
            </div>
        </div>

        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('Produits.index') }}">Products</a></li>
                    <li class="breadcrumb-item active">{{ $produit->category->name ?? 'Uncategorized' }}</li>
                </ol>
            </nav>

            <h1 class="display-5 fw-bold">{{ $produit->name }}</h1>
            
            <div class="d-flex align-items-center mb-3">
                <h2 class="text-primary me-3 mb-0">{{ number_format($produit->prix, 2) }} €</h2>
                @if($produit->stock > 0)
                    <span class="badge bg-success">In Stock ({{ $produit->stock }})</span>
                @else
                    <span class="badge bg-danger">Out of Stock</span>
                @endif
            </div>

            <hr>

            <h5>Description</h5>
            <p class="text-muted leading-relaxed">
                {{ $produit->description ?: 'No description provided for this product.' }}
            </p>

            <div class="mt-4 border-top pt-3">
                <p><strong>Category ID:</strong> {{ $produit->category_id }}</p>
                <p><strong>Secondary name:</strong> {{ $produit->categorie->name }}</p>
            </div>

            <div class="mt-5 d-flex gap-2">
                <a href="{{ route('Produits.edit', $produit->id) }}" class="btn btn-outline-secondary px-4">
                    Edit Product
                </a>
                <button class="btn btn-primary px-4" {{ $produit->stock <= 0 ? 'disabled' : '' }}>
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>