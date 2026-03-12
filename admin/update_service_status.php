<?php
session_start();
require_once '../db_config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['service_id']) && isset($_POST['new_status'])) {
    $service_id = (int)$_POST['service_id'];
    $new_status = $_POST['new_status'];

    if (in_array($new_status, ['confirmed', 'cancelled'])) {
        try {
            $sql = "UPDATE service_bookings SET status = ? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$new_status, $service_id]);
            
            header("Location: dashboard.php");
            exit();
        } catch (PDOException $e) {
            echo "Error updating status: " . $e->getMessage();
        }
    }
} else {
    header("Location: dashboard.php");
    exit();
}
?>