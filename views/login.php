<?php
session_start();
include './config.php';

$email = $_POST['u_email'] ?? '';
$password = $_POST['u_password'] ?? '';

if (empty($email) || empty($password)) {
    echo "invalid";
    exit;
}

$findUser = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
$result = mysqli_query($conn, $findUser);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'id'        => $user['id'],
            'firstName' => $user['firstName'],
            'lastName'  => $user['lastName'],
            'email'     => $user['email']
        ];
        echo "ok";
        exit;
    } else {
        echo "invalid";
        exit;
    }
} else {
    echo "invalid";
    exit;
}