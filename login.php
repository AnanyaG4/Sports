<?php
include("database.php");
session_start();

$message = ""; // Initialize the message variable

if (isset($_POST['login'])) {
    $username = $_POST['username']; // Match input field name
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $res = $stmt->get_result();
    $user = $res->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header("Location: welcome.php");
        exit;
    } else {
        $message = "Invalid credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="validation.js" defer></script>
</head>
<body>
<div class="wrapper">
    <h1>Login</h1>
    <p id="error-message"><?php echo $message; ?></p> <!-- Show error message -->

    <form id="form" method="POST">
        <div class="input-group">
            <label for="username-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z"/></svg>
                </label>
            <input type="text" name="username" id="username-input" placeholder="username" required>
        </div>

        <div class="input-group">
            <label for="password-input">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
            </label>
            <input type="password" name="password" id="password-input" placeholder="password" required>
        </div>

        <button type="submit" name="login" value="Login">Login</button>
    </form>

    <p>New here? <a href="register.php">Create an Account</a></p>
</div>
</body>
</html>
