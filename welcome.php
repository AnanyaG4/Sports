<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Welcome</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<div class="wrapper">
    <h2>Welcome to Get It, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <h2>Be it any sports accessory—if you want it, you'll get it!!!</h2>
    <a href="logout.php">Logout?</a>
</div>
</body>
</html>
