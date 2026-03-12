<?php
session_start();
require_once '../db_config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['booking_id']) && isset($_POST['new_status'])) {
    $booking_id = $_POST['booking_id'];
    $new_status = $_POST['new_status'];

    $allowed_statuses = ['confirmed', 'cancelled'];
    
    if (in_array($new_status, $allowed_statuses)) {
        try {
            $sql = "UPDATE bookings SET status = ? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$new_status, $booking_id]);
            
            header("Location: dashboard.php#reservations-table");
            exit();
        } catch (PDOException $e) {
            echo "Error updating status: " . $e->getMessage();
        }
    } else {
        header("Location: dashboard.php?error=invalid");
        exit();
    }
} else {
    header("Location: dashboard.php");
    exit();
}
?>