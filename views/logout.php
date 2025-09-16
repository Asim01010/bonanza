<?php
session_start();

// clear all session variables
$_SESSION = [];

// destroy session
session_destroy();

// return response for AJAX
echo 'logout';
exit;
?>