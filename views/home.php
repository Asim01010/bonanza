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
            <div class="w-[75%] p-2 h-full flex gap-5 overflow-hidden">
                <?php 
include './config.php';
$sql = "SELECT * FROM product 
        WHERE category_id = (SELECT c_id FROM categories WHERE c_name='kids')";
        
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){ 
?>
                <div class="flex flex-col items-center justify-center  text-center " style="cursor: pointer;">
                    <img src="./images/<?= $row['p_image']?>" class="object-contain w-65 rounded-md" alt="">
                    <p class="text-black"><?= $row['p_name']?></p>
                    <div class="flex gap-3">
                        <span class="text-gray-500 line-through">$<?= number_format($row['P_basePrice'],2)?></span>
                        <span
                            class="text-red-500 font-semibold">$<?= number_format($row['p_discounted_proce'],2)?></span>
                    </div>
                </div>

                <?php }?>




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




        </div>
        <div class="text-center self-end"><button
                class="bg-black text-white my-4 p-3 px-8 rounded-sm cursor-pointer whitespace-nowrap">View
                all</button></div>
        </div>



    </section>

    <section id="fragrance_section" class="py-5 min-h-[300px]">
        <div class="grid grid-cols gap-3 md:grid-cols-2 lg:grid-cols-2">
            <div class="bg-gray-100 relative  flex items-center gap-3 overflow-hidden">
                <img src="./images/fragrance_section.png" alt="fragrance-section"
                    class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 ease-in-out">
                <div class="absolute left-50 text-white text-center text-xl flex flex-col gap-5">
                    <span class=" uppercase  text-5xl">fragrance</span>
                    <button
                        class="self-center uppercase text-base  bg-transparent border-1 border-white text-white py-2 px-5 hover:bg-black/50 ">shop
                        now</button>
                </div>
            </div>
            <?php
                  include './config.php';
                  $fetch = "SELECT * FROM product WHERE  category_id = (SELECT c_id FROM categories WHERE c_name='Fragrance')";
                  $products =[];
                  $result = mysqli_query($conn,$fetch);
                  while($row = mysqli_fetch_assoc($result)){
                  $products[] = $row;
                  }

// Split into groups of 2 (for slider)
                   $chunks = array_chunk($products, 2);
                   ?>
            <div class="bg-gray-100 p-5 flex items-center gap-3">
                <div class="container h-full mx-auto py-10">
                    <div class="relative w-full h-full max-w-4xl mx-auto group">
                        <!-- Slider Container -->
                        <div class="slider overflow-hidden">
                            <div class="slides flex transition-transform duration-500 ease-in-out">

                                <?php foreach ($chunks as $chunk) : ?>
                                <!-- One Slide -->
                                <div class="slide flex-none w-full px-2">
                                    <div class="flex space-x-4">

                                        <?php foreach ($chunk as $product) : ?>
                                        <!-- One Product -->
                                        <div class="w-1/2">
                                            <div class="overflow-hidden relative">
                                                <img src="./images/<?php echo $product['p_image']; ?>"
                                                    alt="<?php echo $product['p_name']; ?>" class="w-full h-100 object-cover hover:scale-110 transition-transform
                                                duration-500 ease-in-out rounded-lg shadow-md">
                                            </div>

                                            <div class="mt-2">
                                                <h3 class="text-lg font-semibold">
                                                    <?php echo $product['p_name']; ?>
                                                </h3>
                                                <p class="text-sm text-gray-600">
                                                    <?php echo $product['p_description']; ?>
                                                </p>

                                                <div class="flex">
                                                    <?php if (!empty($product['P_basePrice'])) : ?>
                                                    <p class="text-md font-bold line-through text-gray-500">
                                                        $<?php echo number_format($product['P_basePrice'], 2); ?>
                                                    </p>
                                                    <?php endif; ?>
                                                    <p class="text-md font-bold text-red-500 ml-2">
                                                        $<?php echo number_format($product['p_discounted_proce'], 2); ?>
                                                    </p>
                                                </div>

                                                <button
                                                    class="frag_btn bg-black text-white my-4 p-3 px-8 rounded-sm cursor-pointer whitespace-nowrap"
                                                    data-id="<?= $product['p_id']?>"
                                                    data-name="<?= $product['p_name']?>"
                                                    data-image="<?= $product['p_image']?>"
                                                    data-discounted="<?= $product['p_discounted_proce']?>"
                                                    data-baseprice="<?= $product['P_basePrice']?>">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Product -->
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                                <!-- End Slide -->
                                <?php endforeach; ?>

                            </div>
                        </div>

                        <!-- Navigation Buttons -->
                        <button
                            class="prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-gray-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button
                            class="next absolute top-1/2 right-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-gray-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


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

    <?php include '/xampp/htdocs/BonanzaSatrangi/views/footer.php'?>

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

        $(document).ready(function() {
            let currentIndex = 0;
            const slideCount = $('.slide').length;
            let slideWidth = $('.slide').outerWidth();

            function updateSlider() {
                $('.slides').css('transform', `translateX(-${currentIndex * slideWidth}px)`);
            }

            $('.prev').click(function() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSlider();
                }
            });

            $('.next').click(function() {
                if (currentIndex < slideCount - 1) {
                    currentIndex++;
                    updateSlider();
                }
            });

            // Adjust slide width on window resize
            $(window).resize(function() {
                slideWidth = $('.slide').outerWidth();
                updateSlider();
            });
        });

        $('.frag_btn').on('click', function(e) {
            e.preventDefault();

            let product_id = $(this).data("id"); // ✅ matches data-id
            let product_name = $(this).data("name"); // ✅ matches data-name
            let product_Bprice = $(this).data("baseprice"); // ✅ matches data-baseprice
            let product_Dprice = $(this).data("discounted"); // ✅ matches data-discounted
            let product_image = $(this).data("image"); // ✅ matches data-image

            $.ajax({
                url: "./cart/cart_action.php",
                type: "POST",
                data: {
                    id: product_id,
                    name: product_name,
                    Bprice: product_Bprice,
                    Dprice: product_Dprice,
                    image: product_image,
                },
                success: function(resp) {
                    console.log("Cart updated:", resp);
                    // loadcart(); // refresh cart if you made this function
                },
            });
        });

    });
    </script>

</body>

</html>