<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

checkLoggedIn();

$userId = $_SESSION['user_id'];
$credits = getUserCredits($userId);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];
    // Ici, vous pouvez ajouter la logique pour traiter le message et générer une réponse
    // Pour l'instant, nous allons simplement simuler une réponse
    $response = "Ceci est une réponse simulée à votre message : " . $message;
    
    // Déduire un crédit pour chaque message
    if ($credits > 0) {
        updateCredits($userId, -1);
        $credits--;
    } else {
        $error = "Vous n'avez plus de crédits. Veuillez en acheter pour continuer.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Chat - 1MinAI Clone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Nouveau Chat</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Tableau de bord</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Chat avec l'IA</h2>
        <p>Crédits restants : <?php echo $credits; ?></p>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <?php if (isset($response)) echo "<p class='response'>$response</p>"; ?>
        <form action="new_chat.php" method="post">
            <label for="message">Votre message :</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit" <?php if ($credits <= 0) echo "disabled"; ?>>Envoyer</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 1MinAI Clone. Tous droits réservés.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
