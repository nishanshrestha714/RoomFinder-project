<?php
session_start();

// Database connection
$Host = 'localhost';
$Username = 'root';
$Password = '';
$Dbname = 'login';

$conn = new mysqli($Host, $Username, $Password, $Dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $user = $_POST['username'] ?? '';
    $Email = $_POST['email'] ?? '';
    $PlainPassword = $_POST['password'] ?? '';

    if (!empty($user) && !empty($Email) && !empty($PlainPassword)) {
        // Check if email exists
        $check = "SELECT * FROM store WHERE email = ?";
        $stmt = $conn->prepare($check);
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Email already exists!');</script>";
        } else {
            // Insert into database (Storing plain text password)
            $insert = "INSERT INTO store (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($insert);
            $stmt->bind_param("sss", $user, $Email, $PlainPassword);

            if ($stmt->execute()) {
                echo "<script>alert('Registration successful!');</script>";
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }
        }
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}

// Handle Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $Email = $_POST['email'] ?? '';
    $Password_input = $_POST['password'] ?? '';

    if (!empty($Email) && !empty($Password_input)) {
        // Fetch user details
        $query = "SELECT * FROM store WHERE email = ?";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
         

            // Ensure password column exists before using it
            if (isset($user['Password'])) {
                // Compare plain text passwords
                if ($Password_input === $user['Password']) {
                    
                    $_SESSION['username'] = $user['username'];
                    echo "<script>
                    alert('Login successful!');
                    window.location.href = 'index.php'; // Redirect after the alert
                </script>";
                } else {
                    echo "<script>alert('Invalid password.');</script>";
                }
            } else {
                echo "<script>alert('Password field is missing in the database record.');</script>";
            }
        } else {
            echo "<script>alert('No user found with that email.');</script>";
        }
    } else {
        echo "<script>alert('Please enter both email and password.');</script>";
    }
}
?>



 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login & Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/stylee.css">
</head>
<body>

<div id="welcome">
    <h1 class="welcoming_text">Welcome to the login page!</h1>
    <h2 class="welcoming_text">Let's Get started!</h2>
    <button class="btnlogin-popup">Login</button>
</div>

<header>
    <h2 class="logo"></h2>
    <nav class="navigation">
        <a href="index.php" class="one">Home</a>
        <a href="about-us.php" class="one">About</a>
        <a href="services.php" class="one">Services</a>
        <a href="contact.php" class="one">Contact</a>
        <a href="login.php" class="one">Login</a>
    </nav>
    <div class="menu-toggle"><i class="fa-solid fa-bars"></i></div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.querySelector(".menu-toggle");
            const menu = document.querySelector(".navigation");

            menuToggle.addEventListener("click", () => {
                menu.classList.toggle("active");
            });
        });
    </script>
</header>

<div class="warper">
    <span class="ion"><i class="fa-solid fa-xmark"></i></span>
    
    <!-- Login Form -->
    <div class="from-box login">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" required name="email">
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" required name="password">
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="bot" name="login">Login</button>
            <div class="login-register">
                <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
            </div>
        </form>
    </div>

    <!-- Registration Form -->
    <div class="from-box register">
        <h2>Registration</h2>
        <form action="login.php" method="POST">
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <input type="text" required name="username">
                <label>Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" required name="email">
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" required name="password">
                <label>Password</label>
            </div> 
            <div class="remember-forgot">
                <label><input type="checkbox">I agree to the terms and conditions</label>
            </div>
            <button type="submit" class="bot" name="register">Register</button>
            <div class="login-register">
                <p>Already have an account? <a href="#" class="login-link">Login</a></p>
            </div>
        </form>
    </div>
</div>

<script src="../js/script.js"></script>
</body>
</html>
