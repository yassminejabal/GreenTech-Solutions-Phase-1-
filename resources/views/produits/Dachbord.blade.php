<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - GreenTech</title>
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    {{-- <link rel="stylesheet" href="../../../public/css/css.css"> --}}
</head>

<body>
    <div class="dashboard-wrapper">
        <header class="dashboard-header">
            <div class="logo">🍃 Green<span>Tech</span></div>
            <div class="actions">
                <a href="{{route('Produits.create')}}" class="btn-add">+ Ajouter Produit</a>
            </div>
        </header>

        <body class="dashboard-page">


            <section class="controls">
                <form class="search-box" action="asset{{route('Produits.search')}}" method="POST">
                     @csrf
                        <div class="search-box">
                    <input name="search" type="text" placeholder="Rechercher par nom...">
                    {{-- <a href="" class="btn-icon delete ">Submit</a> --}}
                    <button type="submit" name="submit" class="btn-icon delete" >Submit</button>
                </div>
                </form>
                <nav class="filters">
                    <button class="active">Tout</button>
                    <button>Plantes</button>
                    <button>Graines</button>
                    <button>Outils</button>
                </nav>
            </section>

            <main class="product-grid">
                
                @foreach($produits as $produit)
            <div class="product-card">
                    <div class="card-image">
                        <img src="{{$produit->image_url}}"
                            alt="Produit">
                        <span class="category-tag">{{$produit->name}}</span>
                    </div>
                    <div class="card-content">
                        <h3>{{$produit->name}}</h3>
                        <p class="price">{{$produit->prix}}</p>
                        <p class="price">{{$produit->stock}}</p>
                        <div class="card-footer">
                            <a href="{{route('Produits.edit',$produit->id)}}" class="btn-icon">✏️</a>
                            <a href="{{route('Produits.destroy',$produit->id)}}" class="btn-icon delete ">🗑️</a>
                        </div>
                    </div>
            </div>
            @endforeach
            </main>
    </div>

    <div id="nature-bg"></div>
    <script src="{{asset('js/js.js')}}"></script>

</body>

</html>