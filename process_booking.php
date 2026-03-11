<?php
session_start();
require_once 'db_config.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>
        alert('Please log in or register an account to book a stay.');
        window.location.href = 'auth/login.php';
    </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $room_type = $_POST['room_type'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guests = $_POST['guests'];

    try {
        $sql = "INSERT INTO bookings (user_id, room_type, check_in, check_out, guests, status) 
                VALUES (?, ?, ?, ?, ?, 'pending')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $room_type, $checkin, $checkout, $guests]);

        header("Location: user_portal.php");
        exit();
        
    } catch (PDOException $e) {
        echo "Error saving booking: " . $e->getMessage();
    }
}
?>