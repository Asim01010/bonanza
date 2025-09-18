<?php
session_start();

if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    $firstName = $_SESSION['user']['firstName'] ?? '';
    $lastName  = $_SESSION['user']['lastName'] ?? '';

    if ($firstName || $lastName) {
        echo "" . htmlspecialchars($firstName . " " . $lastName);
    } else {
        echo "Welcome to our shop, Customer";
    }
} else {
    echo "";
}