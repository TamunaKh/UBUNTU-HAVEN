<?php
session_start();
require_once '../db_config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['room_id']) && isset($_POST['new_price'])) {
    $room_id = (int)$_POST['room_id'];
    $new_price = (float)$_POST['new_price'];

    try {
        $sql = "UPDATE room_types SET price_per_night = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$new_price, $room_id]);
        
        header("Location: dashboard.php");
        exit();
    } catch (PDOException $e) {
        echo "Error updating price: " . $e->getMessage();
    }
} else {
    header("Location: dashboard.php");
    exit();
}
?>