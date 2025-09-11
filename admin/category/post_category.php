<?php
session_start();

include '../config.php';   

$cate_name = mysqli_real_escape_string($conn , $_POST['category_name']);   
$cate_image = $_FILES['category_image']['name'];
$image_tmp = $_FILES['category_image']['tmp_name'];

$insert = "INSERT INTO categories (c_name, c_image) VALUES ('$cate_name', '$cate_image')";

$result = mysqli_query($conn, $insert);

if(move_uploaded_file($image_tmp, "./category_images/".$cate_image) && $result){
   $_SESSION['success_category'] = "Category added successfully!";
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error adding category: " . mysqli_error($conn);
}

?>