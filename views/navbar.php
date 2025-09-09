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
        <div class="flex-1"></div>
        <div class="flex-1 flex justify-center">
            <img src="./images/Bonanza_Logo.avif" alt="Logo" class="h-10">
        </div>
        <div class="flex-1 flex justify-end space-x-4 text-2xl">
            <button class="search_bar"><i class="fa-solid fa-magnifying-glass font-light cursor-pointer"></i></button>

            <div id="search_sidebar" class="fixed hidden bg-black/50 h-full w-full z-20  left-0 top-0">
                <div class="absolute right-0 flex flex-col items-center bg-white h-full w-90 py-5 ">

                    <div class="relatives  py-3 ">
                        <input type="text" class="border">
                        <button class="absolute top-8  right-12"><i class="fa-solid fa-magnifying-glass "></i></button>
                    </div>
                    <div class="p-[.3px] bg-gray-300 w-full"></div>
                </div>
            </div>
            <button class="user_bar"><i class="fa-regular fa-user cursor-pointer"></i></button>
            <button class=" "><i class="fa-regular fa-heart cursor-pointer"></i></button>
            <button class=" "><i class="fa-solid fa-cart-shopping cursor-pointer"></i></button>
        </div>
    </div>
    </div>

    <hr class="border-none bg-gray-300 h-[1px]">

    <!-- Nav -->
    <nav>
        <div class="flex items-center justify-center capitalize uppercase gap-6 p-2 font-normal relative">

            <div class="cursor-pointer hover:text-[#56CFE1]">home</div>

            <!-- SALE -->
            <div id="sale-container" class="relative dropdown">
                <div id="sale" class="cursor-pointer hover:text-[#56CFE1] px-1">sale</div>
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
        const HIDE_DELAY = 150;

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
            $('.search_bar').click(function() {
                $('#search_sidebar').toggleClass('hidden');
            })
            $('#search_sidebar').click(function(e) {
                e.stopPropagation();
                $('#search_sidebar').toggleClass('hidden');
            })

            $('.user_bar').click(function() {
                console.log('hy')
            })


        })


    });
    </script>

</body>

</html>