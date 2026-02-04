<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
</head>

 <body class="form-page"> <div id="nature-bg"></div>

    <div class="form-container">
        <header>
            <a href="{{route('Produits.index')}}" class="btn-back">← Retour</a>
            <h2>Nouveau Produit</h2>
        </header>

        <form action="{{route('Produits.store')}}" method="POST" class="styled-form">
            @csrf
            <div class="input-group">
                <label>Nom du Produit</label>
                <input type="text" name="name" required placeholder="Ex: Monstera Deliciosa">
            </div>

            <div class="input-group">
                <label>Catégorie</label>
                <select name="categorie_id">
                    <option value="1">Plantes</option>
                    <option value="2">Graines</option>
                    <option value="3">Outils</option>
                </select>
            </div>

            <div class="input-group">
                <label>Prix (DH)</label>
                <input type="number" name="prix" step="0.01" required placeholder="0.00">
            </div>

            <div class="input-group">
                <label>stock</label>
                <input type="number" name="stock" step="0.01" required placeholder="0.00">
            </div>

            <div class="input-group">
                <label>Lien de l'image (URL)</label>
                <input type="text" name="image_url" placeholder="https://image-url.com/photo.jpg">
            </div>

            <div class="input-group">
                <label>Description</label>
                <textarea name="description" rows="4" placeholder="Description complète..."></textarea>
            </div>

            <button type="submit" class="btn-primary">Enregistrer le Produit</button>
        </form>
    </div>
</body>
</html>
<script src="{{asset('js/js.js')}}"></script>
</body>
</html>