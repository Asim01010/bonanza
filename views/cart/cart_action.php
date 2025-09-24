<?php
session_start();

// Ensure cart exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['action'], $_POST['id'])) {
    // --- UPDATE CART (plus/minus/remove) ---
    $id = $_POST['id'];
    $action = $_POST['action'];

    if (isset($_SESSION['cart'][$id])) {
        if ($action === "increase") {
            $_SESSION['cart'][$id]['qty']++;
        } elseif ($action === "decrease" && $_SESSION['cart'][$id]['qty'] > 1) {
            $_SESSION['cart'][$id]['qty']--;
        } elseif ($action === "remove") {
            unset($_SESSION['cart'][$id]);
        }
    }
} elseif ((isset($_POST['name']) && !isset($_POST['action'])) || (isset($_POST['action']) && $_POST['action'] === "add")) {
    $id     = $_POST['id'];
    $name   = $_POST['name'];
    $bprice = $_POST['Bprice'];
    $dprice = $_POST['Dprice'];
    $image  = $_POST['image'];

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty']++;
    } else {
        $_SESSION['cart'][$id] = [
            'id'    => $id,
            'name'  => $name,
            'Bprice'=> $bprice,
            'Dprice'=> $dprice,
            'image' => $image,
            'qty'   => 1,
        ];
    }
}


// --- finally reload cart view ---
include "nav_cart.php";
exit; 