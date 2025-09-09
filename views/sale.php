<?php include "./navbar.php"; ?>

<div id="filter-section"
    class="flex py-5 justify-between items-center cursor-pointer px-10 border-b border-gray-300 relative">

    <!-- filter icon -->
    <!-- Filter Button -->
    <div id="filterBtn" class="flex items-center gap-2 cursor-pointer">
        <i class="fa-solid fa-filter"></i>
        <span>Filter</span>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden"></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed left-0 top-0 w-100 h-full bg-white z-50 transform -translate-x-full transition-transform duration-300">
        <div class="flex flex-col justify-between gap-3 p-4 border-b">
            <h2 class="text-lg font-bold">Filters</h2>
            <form action="">
                <div><input type="checkbox">in Stock <span>(232)</span></div>
                <div><input type="checkbox">Out of Stock <span>(45)</span></div>
            </form>

        </div>
        <div class="flex flex-col justify-between gap-3 p-4 border-b">
            <h2 class="text-lg font-bold">Price</h2>
            <p class="text-md text-gray-500">Price:<span class="text-lg text-black ">$0.00</span><span
                    class="text-lg text-black">$149.99</span></p>

            <button
                class="bg-white hover:bg-red-800 transition hover:text-white py-2 px-4 rounded border uppercase ">filter</button>
        </div>



    </div>
    <!-- date filter -->
    <div
        class="date_check border border-gray-300 rounded-full px-3 py-2 text-sm w-40 flex justify-between items-center text-gray-500 cursor-pointer hover:shadow-md hover:border-gray-400 whitespace-nowrap relative">
        <span>Date, New to Old</span>
        <i class="fa-solid fa-chevron-up transition-transform duration-300" aria-hidden="true"></i>
    </div>

    <!-- dropdown -->
    <div class="date_check_drop absolute right-0 top-12 hidden mt-2 z-[9999]">
        <ul class="bg-white border w-50 border-gray-300 rounded-md shadow-md text-sm space-y-2">
            <li class="p-2 rounded hover:bg-red-100 cursor-pointer hover:text-red-500 transition">Featured Best selling
            </li>
            <li class="p-2 rounded hover:bg-red-100 cursor-pointer hover:text-red-500 transition">Alphabetically, A-Z
            </li>
            <li class="p-2 rounded hover:bg-red-100 cursor-pointer hover:text-red-500 transition">Alphabetically, Z-A
            </li>
            <li class="p-2 rounded hover:bg-red-100 cursor-pointer hover:text-red-500 transition">Price, low to high
            </li>
            <li class="p-2 rounded hover:bg-red-100 cursor-pointer hover:text-red-500 transition">Price, high to low
            </li>
            <li class="p-2 rounded hover:bg-red-100 cursor-pointer hover:text-red-500 transition">Date, old to new</li>
            <li class="p-2 rounded hover:bg-red-100 cursor-pointer hover:text-red-500 transition">Date, new to old</li>
        </ul>
    </div>
</div>

<script>
$(document).ready(function() {
    // toggle dropdown
    $('.date_check').click(function(e) {
        e.stopPropagation();
        $('.date_check_drop').toggle("fast");

        // rotate chevron
        $(this).find("i").toggleClass("rotate-180");
    });

    // when selecting option
    $('.date_check_drop li').click(function() {
        var selectedText = $(this).text();
        $('.date_check span').text(selectedText);
        $('.date_check_drop').hide("fast");

        // reset chevron
        $('.date_check i').removeClass("rotate-180");
    });

    // stop clicks inside dropdown
    $('.date_check_drop').click(function(e) {
        e.stopPropagation();
    });

    // click outside closes dropdown
    $(document).click(function() {
        $('.date_check_drop').hide("fast");
        $('.date_check i').removeClass("rotate-180");
    });
    $(document).ready(function() {
        // Open sidebar
        $("#filterBtn").on("click", function() {
            $("#overlay").removeClass("hidden");
            $("#sidebar").removeClass("-translate-x-full");
        });

        // Close sidebar (overlay click or X button)
        $("#overlay, #closeSidebar").on("click", function() {
            $("#overlay").addClass("hidden");
            $("#sidebar").addClass("-translate-x-full");
        });
    });

});
</script>

<?php include './footer.php'; ?>