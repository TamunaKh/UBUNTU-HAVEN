<?php
session_start();
require_once 'db_config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $rating = (int)$_POST['rating'];
    $comment = trim($_POST['comment']);

    try {
        $sql = "INSERT INTO reviews (user_id, rating, comment) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $rating, $comment]);
        
        header("Location: user_portal.php?review=success");
        exit();
    } catch (PDOException $e) {
        echo "Error saving review: " . $e->getMessage();
    }
} else {
    header("Location: user_portal.php");
    exit();
}
?>