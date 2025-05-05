<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

checkLoggedIn();

$userId = $_SESSION['user_id'];
$credits = getUserCredits($userId);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - 1MinAI Clone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Tableau de bord</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Tableau de bord</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['user_email']); ?></h2>
        <p>Crédits restants : <?php echo $credits; ?></p>
        <a href="buy_credits.php" class="button">Acheter des crédits</a>
        <a href="new_chat.php" class="button">Créer un nouveau chat</a>
    </main>
    <footer>
        <p>&copy; 2023 1MinAI Clone. Tous droits réservés.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
