<?php 



    // 'id' => $id,
    // 'name' => $name,
    // 'bprice' => $bprice,
    // 'dprice' => $dprice,
    // 'image' => $image,
    // 'qty' => 1,

if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    
    foreach($_SESSION['cart'] as $product){

$name = isset($product['name']) ? $product['name'] : 'UNKNOWN';
$bprice = isset($product['Bprice']) ? $product['Bprice'] : 0;
$dprice = isset($product['Dprice']) ? $product['Dprice'] : 0;
$qty = isset($product['qty']) ? $product['qty'] : 1;
$image = isset($product['image']) ? $product['image'] : 'placeholder.png';



    $total = $product['Dprice'] * $product['qty'];
    
    
    ?>



<div class="relatives flex items-center gap-4 w-full py-3 ">
    <div><img src="../images/<?= $product['image']; ?>" class="w-30 h-40" alt=""></div>
    <div>
        <p class="text-sm text-gray-500"><?= $product['name']?></p>
        <div class="flex"><span class="text-gray-500 line-through"><?= $product['Bprice']?></span><span
                class="text-red-500"><?= $product['Dprice']?></span>
        </div>
        <div class="border rounded flex justify-between items-center min-w-[90px] px-1">
            <button class="cursor-pointer text-gray-600 hover:text-red-500">
                <i class="fa-solid fa-trash text-sm"></i>
            </button>
            <span class="text-sm font-medium">1</span>
            <button class="cursor-pointer text-gray-600 hover:text-black text-lg">+</button>
        </div>
        <div class="flex py-3 gap-4 items-center"><i
                class="fa-regular fa-pen-to-square cursor-pointer text-gray-500 text-xl hover:text-[#66CFE1]"></i>
            <i class="fa-solid fa-trash cursor-pointer text-gray-500 text-xl hover:text-red-500"></i>
        </div>
    </div>

</div>
<div class="p-[.3px] bg-gray-300 w-full"></div>
<div class="fixed flex flex-col gap-2 bottom-0 left-0 right-0 bg-gray-100 shadow p-3">
    <div class=" w-full flex items-center justify-between">
        <span class="font-semibold text-lg">Subtotal:</span>
        <span class="font-bold text-xl "><?= $total?></span>

    </div>
    <p class="text-sm text-gray-500">Taxes and shipping calculated at checkout</p>
    <div class="flex flex-col gap-3 mt-3">
        <a href="./cart.php"
            class="bg-red-700 text-white text-center text-base px-4 py-2 w-full rounded hover:bg-red-800">View
            Cart</a>
        <a class="bg-black text-white text-center text-base px-4 py-2 w-full rounded hover:bg-gray-800">Checkout</a>
    </div>
</div>
</div>
</div>
<?php
} } else{
    echo "<p class='text-center w-100 fs-5'>Cart is empty!</p>";
}?>