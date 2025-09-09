<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <?php 
    ?>
    <title>Document</title>
</head>

<body>
    <?php include './navbar.php'?>
    <section id="hero_section" class="w-full  h-[608px]">
        <img src="./images/hero_section.webp" alt="" class="w-full h-full object-cover">
    </section>




    <section class="py-5">
        <h1 class="text-3xl text-center font-semibold">latest arrivals</h1>
        <div class="head_btn">
            <ul class="flex items-center justify-center pt-10 pb-5 gap-5 text-lg ">
                <li id="k_btn" class="cursor-pointer hover:text-[#fd43f3] transition-all">KIDS PRET</li>
                <li id="w_btn" class="cursor-pointer hover:text-[#fd43f3] transition-all">READY TO WEAR</li>
                <li id="m_btn" class="cursor-pointer hover:text-[#fd43f3] transition-all">MENSWEAR</li>
                <li id="f_btn" class="cursor-pointer hover:text-[#fd43f3] transition-all">FRAGRANCES</li>
            </ul>
        </div>
        <!-- here is the kids  section -->
        <div id="kid" class="flex items-center justify-center px-12 h-[450px] gap-5">

            <div class="w-[25%] bg-blue-500  h-full ">
                <img src="./images/new_arrival.webp" alt="" class="h-full w-full bg-black">
            </div>
            <div class="w-[75%] p-2 h-full flex overflow-hidden">

                <div class="flex flex-col items-center justify-center  text-center ">
                    <img src="./images/arriva_2.png" class="object-contain w-65 rounded-md" alt="">
                    <p class="text-black">BOYS COMBO DJVS-3210</p>
                    <div class="flex gap-3">
                        <span class="text-gray-500 line-through">$59.99</span>
                        <span class="text-red-500 font-semibold">$49.99</span>
                    </div>
                </div>

            </div>

        </div>

        <div id="women" class="flex items-center justify-center px-12 h-[450px] gap-5">
            <div class="w-[25%] bg-blue-500  h-full ">
                <img src="./images/tab-image01_large.webp" alt="" class="h-full w-full bg-black">
            </div>
            <div class="w-[75%] p-2 h-full flex overflow-hidden">

                <div class="flex flex-col items-center justify-center  text-center ">
                    <img src="./images/women-1.png" class="object-contain w-65 rounded-md" alt="">
                    <p class="text-black">BOYS COMBO DJVS-3210</p>
                    <div class="flex gap-3">
                        <span class="text-gray-500 line-through">$59.99</span>
                        <span class="text-red-500 font-semibold">$49.99</span>
                    </div>
                </div>

            </div>

        </div>

        <div id="men" class="flex items-center justify-center px-12 h-[450px] gap-5">
            <div class="w-[25%] bg-blue-500  h-full ">
                <img src="./images/Mens_New_Arrival_Section_Tile_726_x_902_large.webp" alt=""
                    class="h-full w-full bg-black">
            </div>
            <div class="w-[75%] p-2 h-full flex overflow-hidden">

                <div class="flex flex-col items-center justify-center  text-center ">
                    <img src="./images/men-1.png" class="object-contain rounded-md" alt="">
                    <p class="text-black">BOYS COMBO DJVS-3210</p>
                    <div class="flex gap-3">
                        <span class="text-gray-500 line-through">$59.99</span>
                        <span class="text-red-500 font-semibold">$49.99</span>
                    </div>
                </div>

            </div>

        </div>
        <div id="fragrance" class="flex items-center justify-center px-12 h-[450px] gap-5">

            <div class="w-[25%] bg-blue-500  h-full ">
                <img src="./images/Fragrances_Tile_large.webp" alt="" class="h-full w-full bg-black">
            </div>
            <div class="w-[75%] p-2 h-full flex overflow-hidden gap-5">

                <div class="flex flex-col items-center justify-center  text-center ">
                    <img src="./images/frag-2.png" class="object-contain w-65 rounded-md" alt="">
                    <p class="text-black">BOYS COMBO DJVS-3210</p>
                    <div class="flex gap-3">
                        <span class="text-gray-500 line-through">$59.99</span>
                        <span class="text-red-500 font-semibold">$49.99</span>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center  text-center ">
                    <img src="./images/frag-2.png" class="object-contain w-65 rounded-md" alt="">
                    <p class="text-black">BOYS COMBO DJVS-3210</p>
                    <div class="flex gap-3">
                        <span class="text-gray-500 line-through">$59.99</span>
                        <span class="text-red-500 font-semibold">$49.99</span>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center  text-center ">
                    <img src="./images/frag-2.png" class="object-contain w-65 rounded-md" alt="">
                    <p class="text-black">BOYS COMBO DJVS-3210</p>
                    <div class="flex gap-3">
                        <span class="text-gray-500 line-through">$59.99</span>
                        <span class="text-red-500 font-semibold">$49.99</span>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center  text-center ">
                    <img src="./images/frag-2.png" class="object-contain w-65 rounded-md" alt="">
                    <p class="text-black">BOYS COMBO DJVS-3210</p>
                    <div class="flex gap-3">
                        <span class="text-gray-500 line-through">$59.99</span>
                        <span class="text-red-500 font-semibold">$49.99</span>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center  text-center ">
                    <img src="./images/frag-2.png" class="object-contain w-65 rounded-md" alt="">
                    <p class="text-black">BOYS COMBO DJVS-3210</p>
                    <div class="flex gap-3">
                        <span class="text-gray-500 line-through">$59.99</span>
                        <span class="text-red-500 font-semibold">$49.99</span>
                    </div>
                </div>

            </div>
            <div class="text-center self-end"><button
                    class="bg-black text-white my-4 p-3 px-8 rounded-sm cursor-pointer whitespace-nowrap">View
                    all</button></div>
        </div>



    </section>



    <section class="p-5">

        <div class="flex items-center justify-center gap-5">
            <div class="bg-teal-500  overflow-hidden rounded-lg shadow-md ">
                <img src="./images/social_1.png"
                    class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-110"
                    alt="">
            </div>
            <div class="bg-yellow-500 overflow-hidden rounded-lg shadow-md ">
                <img src="./images/social_2.png"
                    class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-110"
                    alt="">
            </div>
            <div class="bg-stone-500 overflow-hidden rounded-lg shadow-md ">
                <img src="./images/social_3.png"
                    class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-110"
                    alt="">
            </div>
        </div>
    </section>

    <section class="py-5">

        <img src="./images/mens_booton.png" alt="">
    </section>

    <section class="footer px-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
            <div class=" p-4">
                <h1 class="font-semibold text-md">Information</h1>

                <div class="flex flex-col py-5 text-gray-400 text-sm gap-2">
                    <a href="" class="hover:underline">About Us</a><a href="" class="hover:underline">Refund Policy</a>

                </div>
            </div>
            <div class=" p-4">
                <h1 class="font-semibold text-md">Customer Services</h1>

                <div class="flex flex-col py-5 text-gray-400 text-sm gap-2">
                    <a href="" class="hover:underline">Search</a><a href="" class="hover:underline">Size Chart</a>

                </div>

            </div>
            <div class="p-4">

                <h1 class="font-semibold text-md">Customer Services</h1>

                <div class="flex flex-col py-5 text-gray-400 text-sm gap-2">
                    <a href="" class="hover:underline">Subscribe to our newsletter and get latest updates.</a>
                    <form action="" class="w-full relative">
                        <!-- Input -->
                        <input type="text" class="bg-black p-3 w-full pr-12 text-white rounded-md"
                            placeholder="Enter your email">

                        <!-- Icon Button -->
                        <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-red-400 text-2xl">
                            <i class="fa-brands fa-telegram"></i>
                        </button>
                    </form>

                    <div class="flex text-lg gap-2 py-3">



                        <i class="fa-brands fa-facebook-f text-gray-400"></i>
                        <i class="fa-brands fa-instagram text-gray-400"></i>
                    </div>
                </div>
            </div>


    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        function showSection(sectionId) {
            // Hide all
            $('#kid, #women, #men, #fragrance')
                .addClass('hidden')
                .removeClass('flex');

            // Show only selected
            $(sectionId)
                .removeClass('hidden')
                .addClass('flex');
        }

        // Default: only show kids
        showSection('#kid');

        // Buttons
        $('#k_btn').click(() => showSection('#kid'));
        $('#w_btn').click(() => showSection('#women'));
        $('#m_btn').click(() => showSection('#men'));
        $('#f_btn').click(() => showSection('#fragrance'));
    });
    </script>

</body>

</html>