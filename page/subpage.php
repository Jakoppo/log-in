<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subpage</title>
</head>
<body>
    <h2>Subpage</h2>
    <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
    <p>This is a protected subpage.</p>
    <p><a href="index.php">Back to Main Page</a></p>
</body>
</html>
