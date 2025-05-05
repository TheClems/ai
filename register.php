<?php
require_once 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date_inscription = date('Y-m-d H:i:s');
    $credits = 5; // 5€ de crédits initiaux

    $query = "INSERT INTO users (email, password, date_inscription, credits) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssi", $email, $password, $date_inscription, $credits);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: login.php");
        exit();
    } else {
        $error = "Erreur lors de l'inscription.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - 1MinAI Clone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Inscription</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="login.php">Connexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="register.php" method="post">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">S'inscrire</button>
        </form>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    </main>
    <footer>
        <p>&copy; 2023 1MinAI Clone. Tous droits réservés.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
