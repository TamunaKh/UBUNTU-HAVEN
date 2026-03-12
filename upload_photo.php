<?php
session_start();
require_once 'db_config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_FILES) || !isset($_FILES["resort_photo"])) {
        header("Location: user_portal.php?upload=error");
        exit();
    }

    $user_id = $_SESSION['user_id'];
    $file = $_FILES["resort_photo"];
    
    if ($file['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/'; 
        
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true); 
        }
        
        $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed_exts = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        
        if (!in_array($file_ext, $allowed_exts)) {
             header("Location: user_portal.php?upload=invalid_format");
             exit();
        }
        
        $new_filename = uniqid('photo_') . '.' . $file_ext;
        $target_path = $upload_dir . $new_filename;
        
        if (move_uploaded_file($file['tmp_name'], $target_path)) {
            $sql = "INSERT INTO gallery (user_id, image_path) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user_id, $target_path]);
            
            header("Location: user_portal.php?upload=success#gallery-section");
            exit();
        } else {
             header("Location: user_portal.php?upload=move_failed");
             exit();
        }
    } else {
        header("Location: user_portal.php?upload=error");
        exit();
    }
}

header("Location: user_portal.php");
exit();
?>