<?php
require 'db.php';
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$name = $_POST['name'];

$stmt = $db->prepare("INSERT INTO users (email, password, name) VALUES (?, ?, ?)");
if ($stmt->execute([$email, $password, $name])) {
    header("Location: login.html");
} else {
    echo "Error: User could not be created.";
}
?>
