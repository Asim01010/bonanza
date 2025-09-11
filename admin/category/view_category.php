<?php
include '/xampp/htdocs/BonanzaSatrangi/admin/admin_sidebar.php';
?>

<div class="container mt-4">
    <h2 class="text-center">View Categories</h2>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch categories from the database
                    include '/xampp/htdocs/BonanzaSatrangi/admin/config.php';
                    $query = "SELECT * FROM categories";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['c_id'] . "</td>";
                        echo "<td>" . $row['c_name'] . "</td>";
                        echo "<td><img src='" . './category_images/' . $row['c_image'] . "' alt='" . $row['c_name'] . "' width='100'></td>";
                        echo "<td>
                                <a href='edit_category.php?id=" . $row['c_id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete_category.php?id=" . $row['c_id'] . "' class='btn btn-danger btn-sm'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>