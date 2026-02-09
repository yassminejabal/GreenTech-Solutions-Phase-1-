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

                <form method="POST" action="{{route('Logout')}}">
                    @csrf
                <button name="submit" class="logout-btn" type="submit">
                Logout
                </button>
</form>
            <section class="controls">
                <form class="search-box" action="{{route('Produits.search')}}" method="POST">
                     @csrf
                      {{-- @method('DELETE') --}}
                        <div class="search-box">
                    <input name="search" type="text" placeholder="Rechercher par nom...">
                    {{-- <a href="" class="btn-icon delete ">Submit</a> --}}
                    <button type="submit" name="submit" class="btn-icon delete" >Submit</button>
                </div>
                </form>
             <form action="/Produits/filter" method="POST">
    @csrf

    <nav class="filters">
        <button type="submit" name="category" value="">Tout</button>
        <button type="submit" name="category" value="1">Plantes</button>
        <button type="submit" name="category" value="2">Graines</button>
        <button type="submit" name="category" value="3">Outils</button>
    </nav>
</form>
            </section>

            <main class="product-grid">
                
                @foreach($produits as $produit)
<div class="product-card">
    <div class="card-image">
        <img src="{{$produit->image_url}}" alt="Produit">
        <span class="category-tag">{{$produit->name}}</span>
    </div>

     
        <form action="{{ route('Favoris', $produit->id) }}" method="POST">
    @csrf
    <button class="favorite-icon">
         @if($produit->is_favoris == true)
            ❤️
        @else
            🤍
        @endif
    </button>
</form>

    <div class="card-content">
        <h3>{{$produit->name}}</h3>
        <p class="price">{{$produit->prix}}</p>
        <p class="stock">Stock: {{$produit->stock}}</p>
        <div class="card-footer">
            <a href="{{route('Produits.edit',$produit->id)}}" class="btn-icon">✏️</a>
            <a href="{{route('Produits.destroy',$produit->id)}}" class="btn-icon delete">🗑️</a>
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


{{--
Ghdiri hna lbuttona li ka7yd mn favoris
@else 
Ghdiri hna lbuttona li katajiuti 
@endig
@endif --}}