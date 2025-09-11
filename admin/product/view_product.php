<?php
include '../config.php';

$query = "SELECT * FROM product";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: #f4f6f9;
    }

    .card {
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    table img {
        border-radius: 6px;
        object-fit: cover;
    }

    .table thead {
        background: #0053e2;
        color: white;
    }

    .btn-action {
        padding: 4px 10px;
        font-size: 0.85rem;
    }
    </style>
</head>
<?php include '../admin_sidebar.php'?>

<body class=" d-flex justify-content-end align-items-center">
    <div class=" " style="width: 83.6%; ">
        <div class="card p-2">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">📦 Products List</h3>
                <input type="text" id="searchBox" class="form-control w-25" placeholder="🔍 Search...">
            </div>

            <?php if (mysqli_num_rows($result) > 0) { ?>
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Color</th>
                            <th>Barcode</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Base Price</th>
                            <th>Discounted Price</th>
                            <th>Tax</th>
                            <th>Status</th>
                            <th>Season</th>
                            <th>Category ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="productTable">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row['p_id'] ?></td>
                            <td><?= $row['p_name'] ?></td>
                            <td><?= $row['p_color'] ?></td>
                            <td><?= $row['p_barcode'] ?></td>
                            <td class="text-truncate" style="max-width: 150px;"><?= $row['p_description'] ?></td>
                            <td><img src="./product_images/<?= $row['p_image'] ?>" alt="<?= $row['p_name'] ?>"
                                    width="70"></td>
                            <td class="text-end">₨ <?= number_format($row['P_basePrice'], 2) ?></td>
                            <td class="text-end">₨ <?= number_format($row['p_discounted_proce'], 2) ?></td>
                            <td><?= ($row['tax'] ? '✅ Yes' : '❌ No') ?></td>
                            <td><?= ($row['status'] ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-secondary">Inactive</span>') ?>
                            </td>
                            <td><?= $row['season_tag'] ?></td>
                            <td><?= $row['category_id'] ?></td>
                            <td>
                                <button value="<?= $row['p_id'] ?>" class="btn btn-sm btn-primary btn-action">✏️
                                    Edit</button>
                                <button value="<?= $row['p_id'] ?>" class="btn btn-sm btn-danger delete-btn">🗑️
                                    Delete</button>


                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php } else { ?>
            <div class="alert alert-warning text-center">⚠️ No products found.</div>
            <?php } ?>
        </div>
    </div>

    <script>
    $(document).ready(function() {

        // Search functionality
        $('#searchBox').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#productTable tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        // Delete functionality
        $('.delete-btn').on('click', function() {
            if (confirm('Are you sure you want to delete this product?')) {
                var id = $(this).val();
                $.ajax({
                    url: 'delete_product.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        var res = JSON.parse(response);
                        if (res.success) {
                            alert('Product deleted successfully.');
                            location.reload();
                        } else {
                            alert('Error deleting product.');
                        }
                    }
                });
            }
        });
    });
    </script>
</body>

</html>