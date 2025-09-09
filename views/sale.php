<?php include "./navbar.php"; ?>

<div id="filter-section"
    class="flex py-5 justify-between items-center cursor-pointer px-10 border-b border-gray-300 relative overflow-y-auto">
    <!-- filter icon -->
    <!-- Filter Button -->
    <div id="filterBtn" class="flex items-center gap-2 cursor-pointer">
        <i class="fa-solid fa-filter"></i>
        <span>Filter</span>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden"></div>

    <!-- Sidebar -->
    <div id="sidebar" style="scrollbar-width: none;"
        class="fixed left-0 top-0 w-100 h-full bg-white z-50 transform -translate-x-full transition-transform duration-300 overflow-y-auto">
        <div class="flex flex-col justify-between gap-3 p-4 border-b">
            <h2 class="text-lg font-bold">Filters</h2>
            <form action="">
                <div><input type="checkbox">in Stock <span>(232)</span></div>
                <div><input type="checkbox">Out of Stock <span>(45)</span></div>
            </form>

        </div>
        <div class="flex flex-col justify-between gap-3 p-4 border-b">
            <h2 class="text-lg font-bold">Price</h2>




            <div class="p-6 max-w-md">
                <label for="priceRange" class="block text-gray-700 font-medium mb-2">
                    Price Range
                </label>

                <!-- Range Input -->
                <input id="priceRange" type="range" min="0" max="1000" step="10" value="500"
                    class="w-full accent-red-800 cursor-pointer" />


                <!-- Value Display -->
                <div class="mt-2 text-gray-600">
                    Selected: $<span id="rangeValue">500</span>
                </div>
            </div>


            <p class="text-md text-gray-500">Price:<span class="text-lg text-black ">$0.00</span><span
                    class="text-lg text-black">$149.99</span></p>

            <button
                class="bg-white hover:bg-red-800 transition hover:text-white py-2 px-4 rounded border uppercase ">filter</button>
        </div>

        <h2 class="text-lg font-bold mb-2 px-4">Size</h2>
        <div style="scrollbar-width: none;"
            class="flex flex-col space-y-2 p-4 border rounded-md h-[300px] overflow-y-auto m-4 hide-scrollbar scrollbar-none">
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="XS">
                <span>XS (16)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="S">
                <span>S (58)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="M">
                <span>M (58)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="L">
                <span>L (58)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="XL">
                <span>XL (58)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="XXL">
                <span>XXL (1)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="8">
                <span>8 (78)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="10">
                <span>10 (78)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="12">
                <span>12 (78)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="14">
                <span>14 (78)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="16">
                <span>16 (68)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="14(L)">
                <span>14(L) (86)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="14 (L)">
                <span>14 (L) (1)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="12(M)">
                <span>12(M) (87)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="10(S)">
                <span>10(S) (87)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="16(XL)">
                <span>16(XL) (86)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="8(XS)">
                <span>8(XS) (69)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="3-4y">
                <span>3-4y (9)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="4-5y">
                <span>4-5y (9)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="5-6y">
                <span>5-6y (9)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="7-8y">
                <span>7-8y (9)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="9-10y">
                <span>9-10y (9)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox text-blue-600" value="11-12y">
                <span>11-12y (9)</span>
            </label>
        </div>
        <h2 class="text-lg font-bold mb-2 px-4">Colors</h2>
        <div style="scrollbar-width: thin; scrollbar-color: #cbd5e1 transparent;"
            class="flex flex-col gap-3 p-4 border rounded-md h-[300px] overflow-y-auto m-4 scrollbar-none">

            <!-- Beige -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Beige">
                <span
                    class="w-5 h-5 rounded-full bg-[beige] border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Beige (7)</span>
            </label>

            <!-- Black -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Black">
                <span
                    class="w-5 h-5 rounded-full bg-black border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Black (17)</span>
            </label>

            <!-- Blue -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Blue">
                <span
                    class="w-5 h-5 rounded-full bg-blue-500 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Blue (24)</span>
            </label>

            <!-- Brown -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Brown">
                <span
                    class="w-5 h-5 rounded-full bg-amber-800 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Brown (8)</span>
            </label>

            <!-- Cream -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Cream">
                <span
                    class="w-5 h-5 rounded-full bg-amber-100 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Cream (5)</span>
            </label>

            <!-- Green -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Green">
                <span
                    class="w-5 h-5 rounded-full bg-green-600 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Green (25)</span>
            </label>

            <!-- Grey -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Grey">
                <span
                    class="w-5 h-5 rounded-full bg-gray-400 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Grey (2)</span>
            </label>

            <!-- Maroon -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Maroon">
                <span
                    class="w-5 h-5 rounded-full bg-red-900 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Maroon (4)</span>
            </label>

            <!-- Multi -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Multi">
                <span
                    class="w-5 h-5 rounded-full bg-gradient-to-r from-pink-500 via-yellow-400 to-blue-500 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Multi (7)</span>
            </label>

            <!-- Orange -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Orange">
                <span
                    class="w-5 h-5 rounded-full bg-orange-500 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Orange (17)</span>
            </label>

            <!-- Pink -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Pink">
                <span
                    class="w-5 h-5 rounded-full bg-pink-400 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Pink (23)</span>
            </label>

            <!-- Purple -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Purple">
                <span
                    class="w-5 h-5 rounded-full bg-purple-600 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Purple (24)</span>
            </label>

            <!-- Red -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Red">
                <span
                    class="w-5 h-5 rounded-full bg-red-600 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Red (10)</span>
            </label>

            <!-- White -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="White">
                <span
                    class="w-5 h-5 rounded-full bg-white border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>White (9)</span>
            </label>

            <!-- Yellow -->
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="hidden peer" value="Yellow">
                <span
                    class="w-5 h-5 rounded-full bg-yellow-400 border border-gray-400 peer-checked:ring-2 peer-checked:ring-blue-600"></span>
                <span>Yellow (11)</span>
            </label>

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
    $(document).ready(function() {
        $("#priceRange").on("input change", function() {
            $("#rangeValue").text($(this).val());
        });
    });
});
</script>

<?php include './footer.php'; ?>