<?php
session_start();
require_once 'db_config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $service_type = $_POST['service_type']; 
    $specific_service = $_POST['specific_service'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $guests = $_POST['guests'];

    try {
        $sql = "INSERT INTO service_bookings (user_id, service_type, specific_service, booking_date, booking_time, guests) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $service_type, $specific_service, $booking_date, $booking_time, $guests]);
        
        header("Location: user_portal.php?service=success");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>