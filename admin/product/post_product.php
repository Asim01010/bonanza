<?php
include '../config.php';

$prod_name = mysqli_real_escape_string($conn , $_POST['p_name']);   
$prod_color = mysqli_real_escape_string($conn , $_POST['p_color']);   
$prod_barcode = mysqli_real_escape_string($conn , $_POST['p_barcode']);   
$prod_description = mysqli_real_escape_string($conn , $_POST['p_description']);
$prod_image = $_FILES['p_image']['name'];
$image_tmp = $_FILES['p_image']['tmp_name'];
$prod_basePrice = mysqli_real_escape_string($conn , $_POST['p_basePrice']);
$prod_discounted_price = mysqli_real_escape_string($conn , $_POST['p_discounted_price']);
$tax = isset($_POST['p_tax']) ? 1 : 0;
$category_id = mysqli_real_escape_string($conn , $_POST['category_id']);
$status = isset($_POST['status']) ? 1 : 0;
$season_tag = mysqli_real_escape_string($conn , $_POST['tag']);

$insert = "INSERT INTO product (p_name, p_color, p_barcode, p_description, p_image, p_basePrice, p_discounted_proce, tax, status, season_tag , category_id
) VALUES ('$prod_name', '$prod_color', '$prod_barcode', '$prod_description', '$prod_image', '$prod_basePrice', '$prod_discounted_price', '$tax', '$status', '$season_tag', '$category_id')";

$result = mysqli_query($conn, $insert);

if(move_uploaded_file($image_tmp, "./product_images/".$prod_image) && $result){
   $_SESSION['success_product'] = "Product added successfully!";
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error adding product: " . mysqli_error($conn);
}

?>