<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'u804247293_ai_admin');
define('DB_PASS', '1minAIclone');
define('DB_NAME', 'u804247293_ai');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}

session_start();
?>
