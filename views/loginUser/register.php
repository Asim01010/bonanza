<?php
session_start();
include '../config.php';

$fname = mysqli_real_escape_string($conn,$_POST['firstName']);
$lname = mysqli_real_escape_string($conn,$_POST['lastName']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);


if ($fname === '' || $lname === '' || $email === '' || $password === '') {
    echo "required";
    exit;
}

$hashpass = password_hash($password,PASSWORD_DEFAULT);


// return plain full name or empty string
// if (!empty($_SESSION['user']['firstName']) || !empty($_SESSION['user']['lastName'])) {
//     // trim to avoid accidental spaces
//     echo trim( ($_SESSION['user']['firstName'] ?? '') . ' ' . ($_SESSION['user']['lastName'] ?? '') );
// } else {
//     echo '';
// }

// check if there is any duplicate id?
$check_id = "SELECT u_id FROM user WHERE email = '$email' LIMIT 1";
$check_res =mysqli_query($conn,$check_id);
if ($check_res && mysqli_num_rows($check_res) > 0) {
    echo "duplicate";
    exit;
}



$insert = "INSERT INTO user (firstName,lastName,email,password) VALUES ('$fname','$lname','$email','$hashpass')";

$result = mysqli_query($conn,$insert);

if($result){
$id = mysqli_insert_id($conn);
$_SESSION['user']= [
'id' => $id,
'firstName' => $fname,
'lastName' => $lname,
'email' => $email,
];
echo 'ok';


}else{
    echo "fail";
}



?>