<?php include '/xampp/htdocs/BonanzaSatrangi/admin/admin_sidebar.php'; ?>
<div class="container mt-4">
    <h2 class="text-center">Manage Categories</h2>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form id="categoryForm" method="POST" enctype="multipart/form-data" action="post_category.php">
                <div class="mb-3">
                    <label for="categoryName" class="form-label">Category Name</label>
                    <input type="text" name="category_name" class="form-control" id="categoryName"
                        placeholder="Enter category name" required>
                </div>
                <div class="mb-3">
                    <label for="categoryImage" class="form-label">Category Image</label>
                    <input type="file" name="category_image" class="form-control" id="categoryImage" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>

            <!-- Loader (hidden by default) -->
            <div id="loader" class="text-center mt-3" style="display: none;">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-2">Please wait, processing...</p>
            </div>

            <!-- Success message -->
            <div id="successMsg" class="alert alert-success mt-3" style="display: none;">
                ✅ Category added successfully!
            </div>
        </div>
    </div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function() {
    $("#categoryForm").on("submit", function(e) {
        e.preventDefault(); // stop normal form submission

        let formData = new FormData(this);

        $.ajax({
            url: "post_category.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,

            beforeSend: function() {
                $("#loader").show(); // show loader
                $("#successMsg").hide(); // hide old success message
            },

            success: function(response) {
                console.log(response);
                $("#categoryForm")[0].reset();
                $("#successMsg").fadeIn(); // show success msg
            },

            error: function(xhr, status, error) {
                console.error("Error:", error);
                alert("Something went wrong!");
            },

            complete: function() {
                $("#loader").fadeOut();

                // hide success message after 3 seconds
                setTimeout(function() {
                    $("#successMsg").fadeOut();
                }, 2000);
            }

        });
    });
});
</script>