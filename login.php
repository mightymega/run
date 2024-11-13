<?php
session_start();
require 'db.php';
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user;
    header("Location: dashboard.php");
} else {
    echo "Invalid login credentials.";
}
?>
