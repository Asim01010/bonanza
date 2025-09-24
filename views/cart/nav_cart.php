    <?php 



    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
        $grandTotal = 0;
    ?>
    <div id="nav_cart">
        <!-- all your cart HTML -->


        <!-- CART WRAPPER -->
        <div class="flex flex-col gap-5 max-h-[65vh] overflow-y-auto scroll-hidden " style="scrollbar-width: none;">
            <?php
        foreach($_SESSION['cart'] as $product){
            $name = $product['name'] ?? 'UNKNOWN';
            $bprice = $product['Bprice'] ?? 0;
            $dprice = $product['Dprice'] ?? 0;
            $qty = $product['qty'] ?? 1;
            $image = $product['image'] ?? 'placeholder.png';

            $total = $dprice * $qty;
            $grandTotal += $total;
        ?>
            <!-- product item -->
            <div class="flex items-center gap-4 w-full pb-3 border-b border-gray-300">
                <!-- product image -->
                <div class="shrink-0">
                    <img src="./images/<?= $image?>" class="w-20 h-28 object-cover rounded" alt="">
                </div>

                <!-- product details -->
                <div class="flex flex-col justify-between h-full w-full">
                    <!-- name + price row -->
                    <div class="flex flex-col gap-2 justify-between">
                        <p class="text-sm font-medium text-gray-800 truncate"><?= $name?></p>
                        <div class="flex gap-2 items-center">
                            <span class="text-gray-400 line-through text-xs">$<?= $bprice?></span>
                            <span class="text-red-500 font-semibold">$<?= $total?></span>
                        </div>
                    </div>

                    <div class="mt-2 flex justify-between items-center">
                        <div class="border rounded flex items-center gap-3 px-2 py-1">
                            <button class="minus-btn cursor-pointer text-gray-600 hover:text-red-500"
                                data-id="<?= $product['id'] ?>">
                                <i class="fa-solid fa-minus text-sm"></i>
                            </button>
                            <span class="text-sm font-medium"><?= $qty ?></span>
                            <button class="plus-btn cursor-pointer text-gray-600 hover:text-black"
                                data-id="<?= $product['id'] ?>">
                                <i class="fa-solid fa-plus text-sm"></i>
                            </button>
                        </div>
                        <button class="remove-btn text-gray-500 hover:text-red-600" data-id="<?= $product['id'] ?>">
                            <i class="fa-solid fa-trash text-lg"></i>
                        </button>
                    </div>

                </div>
            </div>
            <?php } // end foreach ?>

            <!-- Slider Wrapper -->
            <!-- Product Suggestion Card -->
            <div class="rounded-xl shadow-md mt-5 bg-white border border-gray-200 ">
                <!-- Header -->
                <div class="bg-gray-100 text-center py-2 ">
                    <h2 class="text-gray-700 font-medium">You may also like</h2>
                </div>

                <!-- Slider Wrapper -->
                <div class="">
                    <div class="relative w-full overflow-hidden " id="cart-slider">
                        <!-- Slides -->
                        <div class="flex my-2 transition-transform duration-500 ease-in-out" id="slider-track">
                            <!-- Slide 1 -->
                            <div class="flex-shrink-0 w-full flex items-center gap-3">
                                <div class="w-24 h-28  flex items-center justify-center rounded-xl">
                                    <img src="./images/men-1.png" alt="product"
                                        class="max-w-full max-h-full object-contain rounded">
                                </div>

                                <div class="flex flex-col">
                                    <p class="font-medium text-sm truncate">MENS KURTA PAJAMA 367</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span class="line-through text-gray-400 text-sm">$59.99</span>
                                        <span class="text-red-600 font-bold">$44.99</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="flex-shrink-0 w-full flex items-center gap-3">
                                <div class="w-24 h-28  flex items-center justify-center rounded">
                                    <img src="./images/men-2.png" alt="product"
                                        class="max-w-full max-h-full object-contain">
                                </div>


                                <div class="flex flex-col">
                                    <p class="font-medium text-sm truncate">SUMMER SHIRT 202</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span class="line-through text-gray-400 text-sm">$39.99</span>
                                        <span class="text-red-600 font-bold">$29.99</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="flex-shrink-0 w-full flex items-center gap-3">
                                <div class="w-24 h-28  flex items-center justify-center rounded">
                                    <img src="./images/men-3.png" alt="product"
                                        class="max-w-full max-h-full object-contain">
                                </div>

                                <div class="flex flex-col">
                                    <p class="font-medium text-sm truncate">CASUAL PANTS 145</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span class="line-through text-gray-400 text-sm">$49.99</span>
                                        <span class="text-red-600 font-bold">$34.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="flex items-center justify-between mt-4 border border-gray-200">
                            <!-- Prev -->
                            <button id="prevBtn"
                                class="bg-white border border-gray-200 rounded-md px-4 py-2 shadow hover:bg-black hover:text-white transition">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>

                            <!-- Dots -->
                            <div class="flex gap-2" id="dots"></div>

                            <!-- Next -->
                            <button id="nextBtn"
                                class="bg-white border border-gray-200 rounded-md px-4 py-2 shadow hover:bg-black hover:text-white transition">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>








        </div> <!-- END CART WRAPPER -->

        <!-- subtotal block -->
        <div class="sticky bottom-0 left-0 right-0 flex flex-col gap-2  shadow  w-full mt-3">
            <div class="w-full flex items-center justify-between">
                <span class="font-semibold text-lg">Subtotal:</span>
                <span class="font-bold text-xl text-red-600">$<?= $grandTotal?></span>
            </div>
            <p class="text-sm text-gray-500">Taxes and shipping calculated at checkout</p>
            <div class="flex flex-col gap-3 mt-3">
                <a href="./cart.php"
                    class="bg-red-700 text-white text-center text-base px-4 py-2 w-full rounded hover:bg-red-800">View
                    Cart</a>
                <a
                    class="bg-black text-white text-center text-base px-4 py-2 w-full rounded hover:bg-gray-800">Checkout</a>
            </div>
        </div>
    </div>
    <?php 
    } else {
        echo "<p class='text-center w-full text-lg font-medium py-5'>Cart is empty!</p>";
    }
    ?>