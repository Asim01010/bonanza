<?php
session_start();
include '../config.php';

$fname = trim($_POST['u_email'] ?? ''); 
$password = trim($_POST['u_password'] ?? ''); 


if($fname === '' || $password === ''){
    echo 'required all fields';
    exit;
}

$e = mysqli_real_escape_string($conn, $fname);

$q = "SELECT * FROM user WHERE email = '$e' LIMIT 1";

$res = mysqli_query($conn,$q);

if ($res && mysqli_num_rows($res) === 1) {
    $user = mysqli_fetch_assoc($res);
    // Compare plain password
    if (password_verify($password,$user['password'])) {
        // correct -> store session and send 'ok'
        $_SESSION['user'] = [
            'id' => $user['u_id'],
            'firstName' => $user['firstName'],
            'lastName' => $user['lastName'],
            'email' => $user['email']
        ];
        echo "ok";
        exit;
    } else {
        // wrong password
        echo "invalid password";
        exit;
    }
} else {
    // no such email
    echo "invalid email";
    exit;
}


?>