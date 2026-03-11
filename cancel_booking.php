<?php
session_start();
require_once 'db_config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['booking_id'])) {
    $booking_id = $_POST['booking_id'];
    $user_id = $_SESSION['user_id'];

    try {
        $sql = "UPDATE bookings SET status = 'cancelled' WHERE id = ? AND user_id = ? AND status = 'pending'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$booking_id, $user_id]);

        header("Location: user_portal.php");
        exit();
    } catch (PDOException $e) {
        echo "Error cancelling booking: " . $e->getMessage();
    }
} else {
    header("Location: user_portal.php");
    exit();
}
?>