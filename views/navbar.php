<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <?php include '/xampp/htdocs/BonanzaSatrangi/bootstrap.php'?>
    <title>Multi Dropdown Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body class="bg-gray-50">

    <!-- Navbar -->
    <div class="w-full flex items-center justify-between px-6 py-6 bg-gray-100 shadow">
        <div id="menu_toggle" class="flex-1 xl:hidden lg:hidden block"><i class="fa-solid fa-bars text-xl"></i></div>

        <div id="menu_sidebar" class="fixed inset-0 bg-black/50 h-full w-full z-20  hidden">
            <div
                class="menu_coming absolute left-0 flex flex-col bg-white h-full w-[80%] sm:w-[60%] md:w-[40%] lg:w-[300px] px-2 shadow-lg overflow-y-auto">
                <ul class="flex flex-col gap-4 text-md text-gray-500 mt-6 uppercase w-full">

                    <!-- Home -->
                    <li
                        class="w-full hover:bg-gray-100  rounded border-b border-gray-300 p-2 transition duration-300 ease-in-out">
                        <div
                            class="flex items-center justify-between cursor-pointer hover:text-[#ff4e00] dropdown-toggle">
                            <span>Home</span>
                            <i class="fa-solid fa-plus transition-transform duration-300"></i>
                        </div>
                        <ul class="hidden flex-col gap-2 mt-2 ml-4 text-base text-gray-600 transition dropdown-menu">
                            <li class="hover:text-black cursor-pointer">Homepage v1</li>
                            <li class="hover:text-black cursor-pointer">Homepage v2</li>
                        </ul>
                    </li>

                    <!-- Sale -->
                    <li
                        class="w-full hover:bg-gray-100  rounded bo rder-b border-gray-300 p-2 transition duration-300 ease-in-out">
                        <div
                            class="flex items-center justify-between cursor-pointer hover:text-[#ff4e00] dropdown-toggle">
                            <span>Sale</span>
                            <i class="fa-solid fa-plus transition-transform"></i>
                        </div>
                        <ul class="hidden flex-col gap-2 mt-2 ml-4 text-base text-gray-600 dropdown-menu">
                            <li class="hover:text-black cursor-pointer">Flat 50%</li>
                            <li class="hover:text-black cursor-pointer">Clearance</li>
                        </ul>
                    </li>

                    <!-- Women -->
                    <li
                        class="w-full hover:bg-gray-100  rounded border-b border-gray-300 p-2 transition duration-300 ease-in-out">
                        <div
                            class="flex items-center justify-between cursor-pointer hover:text-[#ff4e00] dropdown-toggle">
                            <span>Women</span>
                            <i class="fa-solid fa-plus transition-transform"></i>
                        </div>
                        <ul class="hidden flex-col gap-2 mt-2 ml-4 text-base text-gray-600 dropdown-menu">
                            <li class="hover:text-black cursor-pointer">Ready to Wear</li>
                            <li class="hover:text-black cursor-pointer">Unstitched</li>
                            <li class="hover:text-black cursor-pointer">Formals</li>
                        </ul>
                    </li>

                    <!-- Rest (no dropdowns) -->
                    <li class="hover:text-[#ff4e00] cursor-pointer border-b border-gray-300 p-2">Unstitched</li>
                    <li
                        class="w-full hover:bg-gray-100  rounded border-b border-gray-300 p-2 transition duration-300 ease-in-out">
                        <div
                            class="flex items-center justify-between cursor-pointer hover:text-[#ff4e00] dropdown-toggle">
                            <span>Kids</span>
                            <i class="fa-solid fa-plus transition-transform "></i>
                        </div>
                        <ul class="hidden flex-col gap-2 mt-2 ml-4 text-base text-gray-600 dropdown-menu">
                            <li class="hover:text-black cursor-pointer">Ready to Wear</li>
                            <li class="hover:text-black cursor-pointer">Unstitched</li>
                            <li class="hover:text-black cursor-pointer">Formals</li>
                        </ul>
                    </li>
                    <li
                        class="w-full hover:bg-gray-100  rounded border-b border-gray-300 p-2 transition duration-300 ease-in-out">
                        <div
                            class="flex items-center justify-between cursor-pointer hover:text-[#ff4e00] dropdown-toggle">
                            <span>Men</span>
                            <i class="fa-solid fa-plus transition-transform"></i>
                        </div>
                        <ul class="hidden flex-col gap-2 mt-2 ml-4 text-base text-gray-600 dropdown-menu">
                            <li class="hover:text-black cursor-pointer">Ready to Wear</li>
                            <li class="hover:text-black cursor-pointer ">Unstitched</li>
                            <li class="hover:text-black cursor-pointer">Formals</li>
                        </ul>
                    </li>
                    <li class="hover:text-[#ff4e00] cursor-pointer border-b border-gray-300 p-2">Fragrances</li>
                    <li class="hover:text-[#ff4e00] cursor-pointer border-b border-gray-300 p-2">Sweaters</li>
                    <li class="hover:text-[#ff4e00] cursor-pointer border-b border-gray-300 p-2">Eid Formals</li>
                    <li class="hover:text-[#ff4e00] cursor-pointer border-b border-gray-300 p-2"><i
                            class="fa-solid fa-magnifying-glass pe-2"></i>Search</li>
                    <li class="hover:text-[#ff4e00] cursor-pointer border-b border-gray-300 p-2"><i
                            class="fa-regular fa-user pe-2"></i>Login/Register</li>
                </ul>
            </div>

        </div>




        <div class="flex-1 flex items-center xl:block lg:block justify-center">
            <img src="./images/Bonanza_Logo.avif" alt="Logo" class="h-10">
        </div>


        <!-- user name -->
        <?php
 // always start session at the top
include './config.php';

// Show the logged-in user's email or name from session
// if (isset($_SESSION['user'])) {
//     echo "<div id='logout_div' class='text-gray-800'> Welcome,    " . htmlspecialchars($_SESSION['user']['firstName']. " " . htmlspecialchars($_SESSION['user']['lastName'])) . "</div>";
// }
?>



        <div class="flex-1 flex justify-end space-x-4 text-xl">
            <button class="search_bar"><i
                    class="fa-solid fa-magnifying-glass font-light text- cursor-pointer"></i></button>

            <div id="search_sidebar" class="fixed inset-0 bg-black/50 h-full w-full z-20 left-0 top-0 hidden">
                <div
                    class="search_coming absolute w-90 right-0 flex flex-col items-center bg-white h-full w-80 p-5 transform translate-x-full transition-transform duration-300 ease-in-out">

                    <div class="relative w-full py-3">
                        <input type="text" class="border text-base px-3 py-2 w-full" placeholder="Search for products">
                        <button class="absolute top-4 right-3"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="p-[.3px] bg-gray-300 w-full"></div>
                </div>
            </div>
            <button class="user_bar"><i class="fa-regular fa-user cursor-pointer"></i></button>




            <!-- Login/user page -->
            <?= include('./loginUser/login-register.php')?>






            <button class="wishlist_bar"><i class="fa-regular fa-heart cursor-pointer text-xl"></i></button>

            <div id="wishlist_sidebar" class="fixed hidden bg-black/50 h-full w-full z-20  left-0 top-0">
                <div
                    class="absolute right-0 flex flex-col items-center bg-white  h-full w-90 p-5 transform translate-x-full transition-transform duration-300 ease-in-out ">

                    <div class="relatives flex flex-col items-center gap-4 w-full py-3 ">
                        <p class="text-sm text-gray-500 underline transition hover:text-[#66CFE1] cursor-pointer">
                            Your
                            Wishlist is empty</p>
                    </div>
                    <div class="p-[.3px] bg-gray-300 w-full"></div>
                </div>
            </div>

            <!-- the cart is here -->

            <button class="cart_bar "><i class="fa-solid fa-cart-shopping cursor-pointer text-xl"></i></button>
            <div id="cart_sidebar" class="fixed hidden bg-black/50 h-full w-full z-20  left-0 top-0">
                <div
                    class="absolute right-0 flex flex-col items-center bg-white  h-full w-90 p-5 transform translate-x-full transition-transform duration-300 ease-in-out ">
                    <?php include './cart/nav_cart.php'?>
                </div>
            </div>
        </div>
    </div>

    <hr class="border-none bg-gray-300 h-[1px]">

    <!-- Nav -->
    <nav class="xl:block lg:block hidden">
        <div class="flex items-center justify-center capitalize uppercase gap-6 p-2 font-normal relative">

            <a href="./home.php" class="cursor-pointer hover:text-[#56CFE1]">home</a>

            <!-- SALE -->
            <div id="sale-container" class="relative dropdown">
                <a href="sale.php" id="sale" class="cursor-pointer hover:text-[#56CFE1] px-1">sale</a>
                <div id="sale-dropdown"
                    class="absolute hidden  top-full mt-1 left-[-440px]  bg-white shadow-md  rounded-lg p-4 w-[1200px] gap-6 z-50">
                    <div class="w-[50%] relatives">
                        <img src="./images/Dropdown_Unstitched-min.jpg"
                            class="rounded-md shadow-md object-cover w-[100%] h-full">
                        <span class="absolute  top-[45%] text-white left-[10%] font-semibold ">New
                            Arrival</span>
                    </div>
                    <div class="flex flex-col gap-3 w-[70%] text-sm cursor-pointer">
                        <p class="text-black font-bold">New Arrivals</p>
                        <hr class="border-none p-[.1px] bg-gray-400">
                        <div class="hover:text-[#56CFE1] cursor-pointer">Women</div>
                        <div class="hover:text-[#56CFE1] cursor-pointer">Men</div>
                        <div class="hover:text-[#56CFE1] cursor-pointer">Kids</div>
                    </div>
                </div>
            </div>

            <!-- WOMEN -->
            <div id="women-container" class="relative dropdown">
                <div id="women_id" class="cursor-pointer hover:text-[#56CFE1] px-1">women</div>
                <div id="women-dropdown"
                    class="absolute hidden  top-full mt-1 left-[-510px]  bg-white shadow-md  rounded-lg p-4 w-[1200px] gap-6 z-50">
                    <div class="w-1/2">
                        <img src="./images/women-dropdown.webp" class="rounded-md shadow-md object-cover w-full">
                        <span class="absolute  top-[45%] text-white left-[10%] font-semibold ">New
                            Arrival</span>
                    </div>
                    <div class="flex flex-col gap-3 w-[70%] text-sm cursor-pointer">
                        <p class="text-black font-bold">New Arrivals</p>
                        <hr class="border-none p-[.1px] bg-gray-400">
                        <div class="hover:text-[#56CFE1] cursor-pointer">New Arrivals</div>
                        <div class="hover:text-[#56CFE1] cursor-pointer">Clothing</div>
                        <div class="hover:text-[#56CFE1] cursor-pointer">Accessories</div>
                    </div>
                </div>
            </div>

            <!-- MEN -->
            <div id="men-container" class="relative dropdown">
                <div id="men_id" class="cursor-pointer hover:text-[#56CFE1] px-1">men</div>
                <div id="men-dropdown"
                    class="absolute hidden  top-full mt-1 left-[-600px]  bg-white shadow-md  rounded-lg p-4 w-[1200px] gap-6 z-50">
                    <div class="w-1/2">
                        <img src="./images/men-fropdown.webp" class="rounded-md shadow-md object-cover w-full">
                        <span class="absolute  top-[45%] text-white left-[10%] font-semibold ">New
                            Arrival</span>
                    </div>
                    <div class="flex flex-col gap-3 w-[70%] text-sm cursor-pointer">
                        <p class="text-black font-bold">New Arrivals</p>
                        <hr class="border-none p-[.1px] bg-gray-400">
                        <div class="hover:text-[#56CFE1] cursor-pointer">Shirts</div>
                        <div class="hover:text-[#56CFE1] cursor-pointer">Trousers</div>
                        <div class="hover:text-[#56CFE1] cursor-pointer">Shoes</div>
                    </div>
                </div>
            </div>

            <!-- KIDS -->
            <div id="kids-container" class="relative dropdown">
                <div id="kids" class="cursor-pointer hover:text-[#56CFE1] px-1">kids</div>
                <div id="kids-dropdown"
                    class="absolute hidden  top-full mt-1 left-[-670px]  bg-white shadow-md rounded-lg p-4 w-[1200px] gap-6 z-50">
                    <div class="w-[87%] relatives">
                        <img src="./images/kidboy-dropdown.webp" class="rounded-md shadow-md object-cover w-full">
                        <span class="absolute  top-[45%] text-white left-[10%] font-semibold ">New
                            Arrival</span>
                    </div>
                    <div class="w-[87%] relatives">
                        <img src="./images/kidgirl-dropdown.webp" class="rounded-md shadow-md object-cover w-full">
                        <span class="absolute  top-[45%] text-white left-[10%] font-semibold ">New
                            Arrival</span>
                    </div>
                    <div class="flex flex-col gap-3 w-[30%] text-sm cursor-pointer">
                        <p class="text-black font-bold">New Arrivals</p>
                        <hr class="border-none p-[.1px] bg-gray-400">
                        <div class="hover:text-[#56CFE1] cursor-pointer">Boys</div>
                        <div class="hover:text-[#56CFE1] cursor-pointer">Girls</div>
                        <div class="hover:text-[#56CFE1] cursor-pointer">Toys</div>
                    </div>
                </div>
            </div>

            <div class="cursor-pointer hover:text-[#56CFE1]">fragrances</div>
            <div class="cursor-pointer hover:text-[#56CFE1]">unstitched</div>
            <div class="cursor-pointer hover:text-[#56CFE1]">sweaters</div>
            <div class="cursor-pointer hover:text-[#56CFE1]">eid formals</div>
        </div>
    </nav>

    <script>
    $(function() {
        const HIDE_DELAY = 50;

        function setupDropdown(baseId) {
            let hideTimeout = null;
            const $container = $(`#${baseId}-container`);
            const $trigger = $(`#${baseId}`);
            const $dropdown = $(`#${baseId}-dropdown`);

            function showDropdown() {
                clearTimeout(hideTimeout);
                $dropdown.removeClass('hidden').addClass('flex');
            }

            function hideDropdown() {
                $dropdown.removeClass('flex').addClass('hidden');
            }

            $container.on('mouseenter', showDropdown);
            $container.on('mouseleave', () => {
                hideTimeout = setTimeout(hideDropdown, HIDE_DELAY);
            });

            $dropdown.on('mouseenter', () => clearTimeout(hideTimeout));
            $dropdown.on('mouseleave', () => {
                hideTimeout = setTimeout(hideDropdown, HIDE_DELAY);
            });

            $trigger.on('click', function(e) {
                e.stopPropagation();
                showDropdown();
            });

            $(document).on('click', hideDropdown);
        }

        // Apply to all nav items
        setupDropdown("sale");
        setupDropdown("women");
        setupDropdown("men");
        setupDropdown("kids");


        $(document).ready(function() {
            // Search sidebar
            $('.search_bar').click(function() {
                $('#search_sidebar').removeClass('hidden'); // show overlay
                $('#search_sidebar .search_coming')
                    .removeClass('translate-x-full')
                    .addClass('translate-x-0'); // slide in
            });

            $('#search_sidebar').click(function(e) {
                if (e.target.id === 'search_sidebar') {
                    $('#search_sidebar .search_coming')
                        .removeClass('translate-x-0')
                        .addClass('translate-x-full'); // slide out
                    setTimeout(() => {
                        $('#search_sidebar').addClass(
                            'hidden'); // hide after animation
                    }, 300);
                }
            });

            // User sidebar
            $('.user_bar').click(function() {
                $('#user_sidebar').removeClass('hidden');
                $('#user_sidebar > div')
                    .removeClass('translate-x-full')
                    .addClass('translate-x-0');
            });

            $('#user_sidebar').click(function(e) {
                if (e.target.id === 'user_sidebar') {
                    $('#user_sidebar > div')
                        .removeClass('translate-x-0')
                        .addClass('translate-x-full');
                    setTimeout(() => {
                        $('#user_sidebar').addClass('hidden');
                    }, 300);
                }
            });
        });


        $('.wishlist_bar').click(function() {
            $('#wishlist_sidebar').removeClass('hidden');
            $('#wishlist_sidebar > div')
                .removeClass('translate-x-full')
                .addClass('translate-x-0');
        });
        $('#wishlist_sidebar').click(function(e) {
            if (e.target.id === 'wishlist_sidebar') {
                $('#wishlist_sidebar > div')
                    .removeClass('translate-x-0')
                    .addClass('translate-x-full');
                setTimeout(() => {
                    $('#wishlist_sidebar').addClass('hidden');
                }, 300);
            }
        });

        $(".cart_bar").click(function() {
            $('#cart_sidebar').removeClass('hidden');
            $('#cart_sidebar > div')
                .removeClass('translate-x-full')
                .addClass('translate-x-0');
        });
        $(document).on('click', '#cart_sidebar', function(e) {
            if (e.target.id === 'cart_sidebar') {
                $('#cart_sidebar > div')
                    .removeClass('translate-x-0')
                    .addClass('translate-x-full');
                setTimeout(() => {
                    $('#cart_sidebar').addClass('hidden');
                }, 300);
            }
        });

        $('#menu_toggle').click(function() {
            $('#menu_sidebar').removeClass('hidden');
        });

        $('#menu_sidebar').click(function(e) {
            if (e.target.id === 'menu_sidebar') {
                $('#menu_sidebar').addClass('hidden');
            }
        });
        $(".dropdown-toggle").click(function() {
            const $menu = $(this).next(".dropdown-menu");
            const $icon = $(this).find("i");

            // Close other dropdowns (optional: remove if you want multiple open at once)
            $(".dropdown-menu").not($menu).slideUp();
            $(".dropdown-toggle i").not($icon).removeClass("rotate-45");

            // Toggle current dropdown
            $menu.stop(true, true).slideToggle(300);
            $icon.toggleClass("rotate-45");
        });


    });
    </script>

</body>

</html>