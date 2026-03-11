<?php
require_once '../db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO users (username, email, password_hash, role) VALUES (?, ?, ?, 'user')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user, $email, $hashed_password]);

        echo "Registration successful! <a href='login.php'>Login here</a>";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "Username or Email already exists.";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>