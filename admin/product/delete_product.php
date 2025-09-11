<?php
include '../config.php';
$id = $_POST['id'];
$delete = "DELETE FROM product WHERE p_id = '$id'";
$result = mysqli_query($conn, $delete);
if ($result) {
    echo json_encode(['success' => true]);
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    echo json_encode(['success' => false]);
}
?>