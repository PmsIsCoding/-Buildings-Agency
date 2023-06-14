<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="medias-site/logoDeukSil.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Deuk Sil : Agence Immobilière</title>
</head>
<body>
    <header>
        <a href="index.php"><img src="medias-site/logoDeukSil.png" alt="logo"></a>
        <form action="" method="POST" class="search-bar">
            <input type="text" name="search" id="search" placeholder="Un Lieu ?">
            <button type="submit">Rechercher</button>
        </form>
        <button type="button">Se connecter?</button>
    </header>
    <div class="main">
        <div class="degrade">
        </div>
        <section>
            <h1>Dalal ak Jaam !!</h1>
            <p>Notre Agence vous permet de rendre disponible <br>votre propriété à la location. Ou de, vous même, trouver <br> une location</p>
            <button type="button">Ajouter ma propriété</button>
            <a href="locations.php"><button>Trouver une location</button></a>
        </section>
    </div>
    <div class="fond-sombre">
        
    </div>
    <div class="authentification">
        <form action="" method="post">
            <h2>Connectez vous : </h2>
            <label for="username">Nom d'utilisateur : </label><input type="text" name="usernam" id="username"><br>
            <label for="password">Mot de passe</label><input type="password" name="password" id="password"><br>
            <input type="submit">
        </form>
        <p>ou</p>
        <a href="inscription.php"><button type="button">S'inscrire</button></a>
    </div>
</body>
</html>