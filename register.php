<?php include("database.php");
ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
<script type="text/javascript" src="validation.js" defer ></script>
</head>
<body>
<div class="wrapper">
    <h1>Register</h1>
    <p id="error-message"></p>
    <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <!-- Slide 1: Basic Info -->
        <div class="slide active"> 
            <div class="input-group">
                <label for="username-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z"/></svg>
                </label>
                <input type="text" name="username" id="username-input" placeholder="username">
            </div>
            <div class="input-group">
                <label for="email-input">
                    <span>@</span>
                </label>
                <input type="email" name="email" id="email-input" placeholder="email">
            </div>
            <div class="input-group">
                <label for="phone-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12Z"/></svg>
                </label>
                <input type="tel" name="phonenumber" id="phone-input" placeholder="phonenumber">
            </div>
            <button type="button" class="next-btn">Next</button>
        </div>
        
        <!-- Slide 2: Additional Info -->
        <div class="slide">
            <div class="input-group">
                <label for="address-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Z"/></svg>
                </label>
                <input type="text" name="address" id="address-input" placeholder="address">
            </div>
            <div class="input-group">
                <label for="gender-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M440-120v-80h80v80h-80Zm0-640v-80h80v80h-80Zm320 320v-80h80v80h-80ZM120-440v-80h80v80h-80Zm648-160-56-56 64-64-62-62 56-56 62 62 64-64 56 56-64 64 62 62-56 56-62-62-64 64ZM440-760v-80h80v80h-80Zm-80 520q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T440-440q0-33-23.5-56.5T360-520q-33 0-56.5 23.5T280-440q0 33 23.5 56.5T360-360Zm280-280q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm40 560v-160h-80v-80h80v-80h80v80h80v80h-80v160h-80ZM200-760v-80h80v80h-80Zm480 480v-80h80v80h-80Z"/></svg>
                </label>
                <select name="gender" id="gender-input">
                    <option value="" disabled selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="input-group">
                <label for="age-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm-40-300h240v-60H440v60Zm80-120h160v-60H520v60ZM360-320h240v-60H360v60Z"/></svg>
                </label>
                <input type="number" name="age" id="age-input" placeholder="age">
            </div>
            <div class="input-group">
                <label for="password-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
                </label>
                <input type="password" name="password" id="password-input" placeholder="password">
            </div>
            <div class="form-navigation">
                <button type="button" class="prev-btn">Back</button>
                <button type="submit" name="register" value="Register">Register
            </div>
        </div>
    </form>
    <p>Already have an Account? <a href="login.php">login</a></p>
</div>
<?php

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $shippingaddress = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->prepare("SELECT * FROM users WHERE username = ? OR phonenumber = ? OR EmailID = ?");
    $check->bind_param("sis", $username, $phonenumber, $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        $existing = $result->fetch_assoc();
        if ($existing['username'] === $username) {
            echo "Username already taken.";
        } elseif ($existing['phonenumber'] == $phonenumber) {
            echo "Phone number already registered.";
        } elseif ($existing['EmailID'] === $email) {
            echo "Email already registered.";
        }
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, phonenumber, EmailID, Gender, Age, Shippingaddress, password) VALUES 
        (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sississ", $username, $phonenumber, $email, $gender, $age, $shippingaddress, $password);
        if ($stmt->execute()) {
            echo "Registered successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>
</body>
</html>