<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('Produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $produit->name) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $produit->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="prix">Price</label>
        <input type="number" step="0.01" name="prix" id="prix" value="{{ old('prix', $produit->prix) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="image_url">Image URL</label>
        <input type="text" name="image_url" id="image_url" value="{{ old('image_url', $produit->image_url) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $produit->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="stock">Stock Quantity</label>
        <input type="number" name="stock" id="stock" value="{{ old('stock', $produit->stock) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="categorie_id">Secondary Category ID</label>
        <input type="number" name="categorie_id" id="categorie_id" value="{{ old('categorie_id', $produit->categorie_id) }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
</body>
</html>