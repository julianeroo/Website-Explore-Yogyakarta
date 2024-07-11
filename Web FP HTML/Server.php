<?php
session_start();
include 'db_config.php';

// Memproses form sign-up
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Gunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("INSERT INTO users (Name, Email, Password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        $_SESSION['signup_success'] = true;
        $stmt->close();
        $conn->close();
        header("Location: Account.php?signup=success"); // Redirect to Account.php after successful sign-up with success parameter
        exit(); // Pastikan untuk keluar setelah redirection
    } else {
        echo "Error: " . $conn->error;
    }
}

// Untuk login
if (isset($_POST['login'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Gunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("SELECT Id, Email FROM users WHERE Email=? AND Password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Set session variables
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Id'] = $row['Id'];

        // Redirect to homepage
        header("Location: Homepage.php");
        exit();
    } else {
        // Redirect back to login with error
        header("Location: Account.php?error=1");
        exit();
    }
}

// Jika ada perintah logout
if (isset($_POST['logout'])) {
    // Destroy the session
    session_destroy();

    // Redirect to homepage
    header("Location: Homepage.php");
    exit();
}

$conn->close();