<?php
session_start();
include './config.php';

$firstName = trim($_POST['firstName'] ?? '');
$lastName  = trim($_POST['lastName'] ?? '');
$email     = trim($_POST['email'] ?? '');
$password  = $_POST['password'] ?? '';

// Basic Validation 
if ($firstName === '' || $lastName === '' || $email === '' || $password === '') {
    echo "required";
    exit;
}

// Hash password
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Check if email exists first
$check = mysqli_query($conn, "SELECT u_id FROM user WHERE email = '".mysqli_real_escape_string($conn,$email)."' ");
if (mysqli_num_rows($check) > 0) {
    echo 'duplicate';
    exit;
}

// Insert new user
$insert = "INSERT INTO user (firstName,lastName,email,password) 
           VALUES (
              '".mysqli_real_escape_string($conn,$firstName)."',
              '".mysqli_real_escape_string($conn,$lastName)."',
              '".mysqli_real_escape_string($conn,$email)."',
              '$hashedPassword'
           )";

$result = mysqli_query($conn, $insert);

if ($result) {
    $user_id = mysqli_insert_id($conn);
    $_SESSION['user'] = [
        'id'        => $user_id,
        'firstName' => $firstName,
        'lastName'  => $lastName,
        'email'     => $email
    ];
    echo 'ok';
} else {
    echo 'fail';
}
?>