<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

checkLoggedIn();

$userId = $_SESSION['user_id'];
$credits = getUserCredits($userId);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    // Ici, vous pouvez ajouter la logique pour le paiement réel
    // Pour l'instant, nous allons simplement ajouter les crédits
    if (updateCredits($userId, $amount)) {
        $success = "Achat réussi ! $amount crédits ont été ajoutés à votre compte.";
        $credits += $amount;
    } else {
        $error = "Erreur lors de l'achat des crédits.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter des crédits - 1MinAI Clone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Acheter des crédits</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Tableau de bord</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Acheter des crédits</h2>
        <p>Crédits actuels : <?php echo $credits; ?></p>
        <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form action="buy_credits.php" method="post">
            <label for="amount">Nombre de crédits à acheter :</label>
            <input type="number" id="amount" name="amount" min="1" required>
            <button type="submit">Acheter</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 1MinAI Clone. Tous droits réservés.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
