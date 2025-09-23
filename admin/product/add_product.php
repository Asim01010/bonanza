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

    /* From Uiverse.io by andrew-demchenk0 */
    .info {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        width: 320px;
        padding: 12px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: start;
        background: #509AF8;
        border-radius: 8px;
        box-shadow: 0px 0px 5px -3px #111;
    }

    .info__icon {
        width: 20px;
        height: 20px;
        transform: translateY(-2px);
        margin-right: 8px;
    }

    .info__icon path {
        fill: #fff;
    }

    .info__title {
        font-weight: 500;
        font-size: 14px;
        color: #fff;
    }

    .info__close {
        width: 20px;
        height: 20px;
        cursor: pointer;
        margin-left: auto;
    }

    .info__close path {
        fill: #fff;
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
                    <label for="season" class="form-label">Category</label>
                    <select id="season" name="category_id" class="form-select">
                        <option value="">Select Category</option>
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
    <!-- section show POP_UP -->

    <!-- From Uiverse.io by andrew-demchenk0 -->

    <div class="info position-absolute bottom-0 end-0" style="transform: translateY(100%); transition: all .3s;">
        <div class="info__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
                <path fill="#393a37"
                    d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 .1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z">
                </path>
            </svg>
        </div>
        <div class="info__title">product Add Successfully.</div>
        <div class="info__close"><svg height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z"
                    fill="#393a37"></path>
            </svg></div>
    </div>

    <!-- end Card -->


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
                    $('#product_form')[0].reset();
                    // Reset the form
                    $('.info').css('transform', 'translateY(0)')
                    // 🔥 Hide popup automatically after 3 seconds
                    setTimeout(() => {
                        $('.info').css('transform', 'translateY(100%)');
                    }, 3000);

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