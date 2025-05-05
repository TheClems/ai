<?php
function checkLoggedIn() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
}

function getUserCredits($userId) {
    global $conn;
    $query = "SELECT credits FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    return $row['credits'];
}

function updateCredits($userId, $amount) {
    global $conn;
    $query = "UPDATE users SET credits = credits + ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ii", $amount, $userId);
    return mysqli_stmt_execute($stmt);
}
?>
