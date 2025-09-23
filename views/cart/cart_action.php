<?php
session_start();
// Agar $_SESSION['cart'] pehle se bana hua nahi hai (matlab cart empty hai ya pehli baar user add kar raha hai) → ek empty array bana do.

// Ye step zaroori hai taki baad me $_SESSION['cart'] par data push karte waqt error na aaye.
//

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}


$id = $_POST['id'];
$name = $_POST['name'];
$bprice = $_POST['Bprice'];
$dprice = $_POST['Dprice'];
$image = $_POST['image'];

$_SESSION['cart'][$id] = [
    'id' => $id,
    'name' => $name,
    'Bprice' => $bprice,
    'Dprice' => $dprice,
    'image' => $image,
    'qty' => 1,
];

?>