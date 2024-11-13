<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user']['name']; ?>!</h2>
    <nav>
        <a href="performance.php">Performance</a> | <a href="profile.php">Profile</a>
    </nav>
    <a href="logout.php">Logout</a>
</body>
</html>
