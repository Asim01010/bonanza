<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Sidebar</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .sidebar {
        height: 100vh;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #343a40;
        padding-top: 20px;
    }

    .sidebar a {
        color: #ddd;
        text-decoration: none;
    }

    .sidebar a:hover {
        background: #495057;
        color: #fff;
    }
    </style>
</head>

<body>

    <div class="d-flex flex-column gap-1 menu_sidebar  d-md-none text-center m-5 " style="cursor: pointer;">
        <div style="width: 25px; padding: 1px; " class=" bg-dark"></div>
        <div style="width: 25px; padding: 1px;" class=" bg-dark"></div>
        <div style="width: 25px; padding: 1px;" class=" bg-dark"></div>
        <div style="width: 25px; padding: 1px;" class=" bg-dark"></div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar d-md-flex d-none  flex-column p-3 text-white ">
        <h4 class="text-center text-white mb-4">Admin Panel</h4>

        <div class="cross_menu d-md-none position-absolute top-0 end-0 p-3 text-white" style="cursor: pointer;">X</div>
        <ul class="nav nav-pills flex-column mb-auto">

            <!-- Dashboard -->
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>

            <!-- Products Dropdown -->
            <li>
                <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse" href="#productsMenu"
                    role="button" aria-expanded="false" aria-controls="productsMenu">
                    <i class="bi bi-box-seam"></i> Products
                </a>
                <div class="collapse ps-3" id="productsMenu">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/bonanzasatrangi/admin/product/view_product.php" class="nav-link text-white">All
                                Products</a></li>
                        <li><a href="/bonanzasatrangi/admin/product/add_product.php" class="nav-link text-white">Add New
                                Product</a></li>
                        <li><a href="/bonanzasatrangi/admin/category/view_category.php" class="nav-link text-white">View
                                Categories</a></li>
                        <li><a href="/bonanzasatrangi/admin/category/category.php" class="nav-link text-white">Add
                                Categories</a></li>
                    </ul>
                </div>
            </li>

            <!-- Orders Dropdown -->
            <li>
                <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse" href="#ordersMenu"
                    role="button" aria-expanded="false" aria-controls="ordersMenu">
                    <i class="bi bi-cart4"></i> Orders
                </a>
                <div class="collapse ps-3" id="ordersMenu">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="nav-link text-white">All Orders</a></li>
                        <li><a href="#" class="nav-link text-white">Pending Orders</a></li>
                        <li><a href="#" class="nav-link text-white">Completed Orders</a></li>
                    </ul>
                </div>
            </li>

            <!-- Users Dropdown -->
            <li>
                <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse" href="#usersMenu" role="button"
                    aria-expanded="false" aria-controls="usersMenu">
                    <i class="bi bi-people"></i> Users
                </a>
                <div class="collapse ps-3" id="usersMenu">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="nav-link text-white">All Users</a></li>
                        <li><a href="#" class="nav-link text-white">Admins</a></li>
                        <li><a href="#" class="nav-link text-white">Customers</a></li>
                    </ul>
                </div>
            </li>

            <!-- Settings -->
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-gear"></i> Settings
                </a>
            </li>

        </ul>
    </div>



    <!-- Bootstrap JS (for dropdowns & collapse) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <script>
    $(document).ready(function() {
        $('.menu_sidebar').click(function() {
            $('.sidebar').toggleClass('d-none d-md-flex');
        });
        $('.cross_menu').click(function() {
            $('.sidebar').toggleClass('d-none d-md-flex');
        });
    });
    </script>

</body>

</html>