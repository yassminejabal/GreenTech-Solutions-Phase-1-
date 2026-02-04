<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/css.css')}}">
</head>
<body>
    <div class="auth-container">
    <div class="auth-box">
        <h2>Connexion</h2>
        <p class="subtitle">Heureux de vous revoir !</p>

        <form method="POST" action="/Login">
            @csrf
            <div class="input-group">
                <label>Adresse E-mail</label>
                <input type="email" name="email" required placeholder="nom@exemple.com">
            </div>

            <div class="input-group">
                <label>Mot de passe</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>

            <div class="options-row">
                <label class="checkbox-container">
                    <input type="checkbox" name="remember">
                    <span class="checkmark"></span>
                    Se souvenir de moi
                </label>
                <a href="#" class="forgot-link">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="btn-primary">Se connecter</button>
            <p class="footer-text">Vous n'avez pas de compte ? <a href="/inscription/create">S'inscrire</a></p>
        </form>
    </div>
</div>
</body>
</html>