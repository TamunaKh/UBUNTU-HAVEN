<?php
session_start();
require_once '../db_config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $delete_id = (int)$_POST['delete_id'];

    if ($delete_id === $_SESSION['user_id']) {
        header("Location: dashboard.php?error=self_delete");
        exit();
    }

    try {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$delete_id]);
        
        header("Location: dashboard.php");
        exit();
    } catch (PDOException $e) {
        echo "Error deleting user: " . $e->getMessage();
    }
} else {
    header("Location: dashboard.php");
    exit();
}
?>