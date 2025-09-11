<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
        overflow: hidden;
        /* ✅ removes scroll */
    }

    .card {
        border-radius: 0;
        /* full page card, no rounded edges */
        box-shadow: none;
        height: 100%;
        margin: 0;
        padding: 20px;
        /* small padding inside card */
        overflow: hidden;
        /* ✅ no scroll */
    }

    .form-label {
        font-weight: 600;
    }
    </style>
</head>
<?php include '../admin_sidebar.php'?>

<body class="d-flex justify-content-center align-items-center">
    <div class="card w-50">
        <h2 class="text-center mb-4">Add New Product</h2>

        <form class="h-100" id="product_form" action="post_product.php" method="POST" enctype="multipart/form-data">
            <div class="row g-3">
                <!-- Name -->
                <div class="col-md-6">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" id="name" name="p_name" class="form-control" placeholder="Enter product name"
                        required>
                </div>

                <!-- Color -->
                <div class="col-md-6">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" id="color" name="p_color" class="form-control" placeholder="Enter color">
                </div>

                <!-- Barcode -->
                <div class="col-md-6">
                    <label for="barcode" class="form-label">Barcode</label>
                    <input type="text" id="barcode" name="p_barcode" class="form-control" placeholder="Enter barcode">
                </div>

                <!-- Image -->
                <div class="col-md-6">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" id="image" name="p_image" class="form-control">
                </div>

                <!-- Base Price -->
                <div class="col-md-6">
                    <label for="base_price" class="form-label">Base Price</label>
                    <input type="number" id="base_price" name="p_basePrice" class="form-control" placeholder="0.00">
                </div>

                <!-- Discounted Price -->
                <div class="col-md-6">
                    <label for="discounted_price" class="form-label">Discounted Price</label>
                    <input type="number" id="discounted_price" name="p_discounted_price" class="form-control"
                        placeholder="0.00">
                </div>

                <!-- Tax -->
                <div class="col-md-6">
                    <label class="form-label d-block">Tax</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="tax" name="p_tax" value="1" checked>
                        <label class="form-check-label" for="tax">Apply Tax</label>
                    </div>
                </div>

                <!-- Status -->
                <div class="col-md-6">
                    <label class="form-label d-block">Status</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="status" name="status" value="1" checked>
                        <label class="form-check-label" for="status">Active</label>
                    </div>
                </div>

                <!-- Season -->
                <div class="col-md-6">
                    <label for="season" class="form-label">Season</label>
                    <select id="season" name="category_id" class="form-select">
                        <option value="">Select Season</option>
                        <?php
    include '../config.php';
    $result = mysqli_query($conn, "SELECT c_id, c_name FROM categories");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['c_id']}'>{$row['c_name']}</option>";
    }
    ?>
                    </select>
                </div>

                <!-- Tag -->
                <div class="col-md-6">
                    <label for="tag" class="form-label">Tag</label>
                    <input type="text" id="tag" name="tag" class="form-control" placeholder="Enter tag">
                </div>

                <!-- Description -->
                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="p_description" class="form-control" rows="3"
                        placeholder="Enter product description"></textarea>
                </div>
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary px-5">Save Product</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#product_form').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            var formData = new FormData(this); // Create FormData object

            $.ajax({
                url: 'post_product.php', // Server script to process data
                type: 'POST',
                data: formData,
                contentType: false, // Important for file upload
                processData: false, // Important for file upload
                success: function(response) {
                    // Assuming the server returns a JSON response with a 'success' field

                    console.log(response);
                    $('#product_form')[0].reset(); // Reset the form

                },
                error: function(xhr, status, error) {
                    console.error("Error: " + error);
                }


            });

        });
    });
    </script>

</body>

</html>