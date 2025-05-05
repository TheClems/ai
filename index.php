<?php
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MG - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul class="nav">
        <li><a href="index.php"><span class="icon entypo-home"></span>Home</a></li>
        <li><a href="#"><span class="icon entypo-user"></span>about</a></li>
        <li><a href="#"><span class="icon entypo-book"></span>blog</a></li>
        <li>
          <a href="#"><span class="icon entypo-star"></span>features</a>
          <ul>
            <li><a href="#">feature 1</a></li>
            <li><a href="#">feature 2</a></li>
            <li><a href="#">feature 3</a></li>
            <li><a href="#">feature 4</a></li>
            <li><a href="#">feature 5</a></li>
            <li><a href="#">feature 6</a></li>
          </ul>
        </li>
        <li><a href="login.php"><span class="icon entypo-mail"></span>Login</a></li>
        <li><a href="register.php"><span class="icon entypo-key"></span>Register</a></li>
        </ul>
        <ul class="soc">
        <li><a href="#"><span class="entypo-facebook-circled"></span></a></li>
        <li><a href="#"><span class="entypo-twitter-circled"></span></a></li>
        <li><a href="#"><span class="entypo-gplus-circled"></span></a></li>
        <li><a href="#"><span class="entypo-linkedin-circled"></span></a></li>
        </ul>
    </nav>
    <header>
        <h1>Bienvenue sur Mini Génie</h1>
    </header>
    <main>
        <h2>Découvrez notre plateforme de chat IA</h2>
        <p>Inscrivez-vous dès maintenant pour commencer à discuter avec nos IA !</p>
    </main>
    <footer>
        <p>&copy; 2025 Mini Génie. Tous droits réservés.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
