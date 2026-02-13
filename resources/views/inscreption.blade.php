<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/css.css')}}">
        {{-- @vite(['resources/js/']) --}}

</head>
<body>
  <div class="auth-container">
    <div class="auth-box">
        <h2>Inscription</h2>
        <p class="subtitle">Créez votre compte GreenTech</p>

        <form method="POST" action="/inscription">
            @csrf
            
            <div class="input-group">
                <label for="name">Nom complet</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Votre nom complet">
            </div>

            <div class="input-group">
                <label for="email">Adresse E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="exemple@mail.com">
            </div>

            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required placeholder="••••••••">
            </div>

            <button name="submit" type="submit" class="btn-success">Créer le compte</button>
            <p class="footer-text">Vous avez déjà un compte ? <a href="{{route('LoginCreate')}}">Se connecter</a></p>
        </form>
    </div>
</div>
</body>
</html>