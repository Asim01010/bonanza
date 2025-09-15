<?php 
session_start();
include './config.php';

$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Basic Validation 
if(empty($firstName) || empty($lastName) || empty($email) || empty($password)){
    echo "<h2 class='text-red-500 text-sm bg-red-100 rounded-2'>All Fields are requireds</h2>";
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);


$insert = "INSERT INTO user (firstName,lastName,email,password) VALUES ('$firstName', '$lastName','$email','$password')";

$result = mysqli_query($conn,$insert);
if($result){
      // Store user info in session
    $_SESSION['user'] = [
        'firstName' => $firstName,
        'lastName'  => $lastName,
        'email'     => $email
    ];
    echo 'ok';
exit;

}else{
    echo 'fail';
}

?>