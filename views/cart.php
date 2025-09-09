<?php include '/xampp/htdocs/BonanzaSatrangi/views/navbar.php'?>

<section>

    <div class="text-center bg-stone-500 my-5 py-5">
        <h1 class="text-3xl text-white font-semibold">Shopping Cart</h1>
    </div>
    <div class="p-10">
        <table class="w-full border-collapse ">
            <thead>
                <tr class="border-b border-gray-300 text-left">
                    <th class="p-3 text-sm font-semibold uppercase tracking-wider">Product</th>
                    <th class="p-3 text-sm font-semibold uppercase tracking-wider">Price</th>
                    <th class="p-3 text-sm font-semibold uppercase tracking-wider">Quantity</th>
                    <th class="p-3 text-sm font-semibold uppercase tracking-wider">Total</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                <tr class="align-top">
                    <!-- Product -->
                    <td class="p-4">
                        <div class="flex items-start">
                            <img src="./images/men-3.png" alt="Product 1" class="w-30 h-40 object-contain  rounded">
                            <div class="flex flex-col ml-4 gap-2">
                                <p class="text-sm font-semibold leading-tight">
                                    MAROON-CAMBRIC-3 PIECE (WS7243P14) BIN 53-60 R15
                                </p>
                                <p class="text-gray-500 text-sm">Product Name</p>
                                <p class="text-gray-500 text-xs">Product Description</p>
                                <div class="flex gap-3 mt-2">
                                    <button class="hover:text-red-500 text-lg cursor-pointer">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="hover:text-red-500 text-lg cursor-pointer">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </td>

                    <!-- Price -->
                    <td class="p-4">
                        <div class="flex flex-col">
                            <p class="text-sm line-through">$100.00</p>
                            <p class="text-base font-semibold">$38.24</p>
                        </div>
                    </td>

                    <!-- Quantity -->
                    <td class="p-4">
                        <div class="border rounded flex items-center justify-between w-28 px-2 py-1">
                            <button class="text-lg font-semibold">-</button>
                            <p class="text-sm font-medium">1</p>
                            <button class="text-lg font-semibold">+</button>
                        </div>
                    </td>

                    <!-- Total -->
                    <td class="p-4 text-base font-semibold">
                        $78.76
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</section>

<?php include '/xampp/htdocs/BonanzaSatrangi/views/footer.php'?>