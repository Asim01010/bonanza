<?php 

?>

<div id="user_sidebar" class="fixed hidden bg-black/50 h-full w-full z-20 left-0 top-0">

    <!-- Login form -->
    <div id="user_login"
        class="absolute right-0 flex flex-col items-center bg-white h-full w-90 p-5 transition-all duration-300 ease-in-out <?php echo isset($_SESSION['user']) ? 'opacity-0 scale-95 pointer-events-none' : 'opacity-100 scale-100'; ?>">

        <form class="login" action="" method="POST" style="width: 100%;">
            <div class="relatives flex flex-col items-center gap-4 w-full py-3">
                <input id="userName" type="text" class="border text-base px-3 py-2 w-full" placeholder="Username">
                <input id="userPassword" type="password" class="border text-base px-3 py-2 w-full mt-3"
                    placeholder="Password">

                <button type="submit" class="bg-red-700 text-white text-base px-4 py-2 w-full rounded hover:bg-red-800">
                    Signin
                </button>

                <p id="create_account"
                    class="text-sm text-gray-500 underline transition hover:text-[#66CFE1] cursor-pointer">
                    New customer? Create your account
                </p>
            </div>
        </form>
    </div>

    <!-- Register form -->
    <div id="Register_login"
        class="absolute right-0 flex flex-col items-center bg-white h-full w-90 p-5 transition-all duration-300 ease-in-out opacity-0 scale-95 pointer-events-none">

        <form class="register" action="" method="POST" style="width: 100%;">
            <div class="relatives flex flex-col items-center gap-4 w-full py-3">
                <input type="text" name="firstName" class="border text-base px-3 py-2 w-full" placeholder="First Name">
                <input type="text" name="lastName" class="border text-base px-3 py-2 w-full mt-3"
                    placeholder="Last Name">
                <input name="email" type="text" class="border text-base px-3 py-2 w-full" placeholder="Email">
                <input name="password" type="password" class="border text-base px-3 py-2 w-full mt-3"
                    placeholder="Password">

                <button type="submit"
                    class="bg-red-700 text-white cursor-pointer text-base px-4 py-2 w-full rounded hover:bg-red-800">
                    Register
                </button>

                <p id="login_here"
                    class="text-sm text-gray-500 underline transition hover:text-[#66CFE1] cursor-pointer">
                    Already have an account? Login here
                </p>
                <p id="successMsg"
                    class="opacity-0 scale-95 hidden text-green-700 bg-green-100 rounded-2 w-full text-sm transition-all duration-500 ease-in-out p-3 text-center">
                    You are successfully registered
                </p>
            </div>
        </form>
    </div>

    <!-- Logout form -->
    <div id="user_logout"
        class="absolute right-0 flex flex-col items-center bg-white h-full w-90 p-5 transition-all duration-300 ease-in-out <?php echo isset($_SESSION['user']) ? 'opacity-100 scale-100' : 'opacity-0 scale-95 pointer-events-none'; ?>">

        <form class="logout" action="logout.php" method="POST" style="width: 100%;">
            <button type="submit"
                class="bg-red-700 text-white cursor-pointer text-base px-4 py-2 w-full rounded hover:bg-red-800">
                Logout
            </button>

            <p class="text-sm text-center py-4 text-gray-500 underline transition hover:text-[#66CFE1] cursor-pointer">
                You are already logged in, Dear Customer!
            </p>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    // Switch to Register form
    $('#create_account').on('click', function() {
        $('#user_login').removeClass('opacity-100 scale-100').addClass(
            'opacity-0 scale-95 pointer-events-none');
        $('#Register_login').removeClass('opacity-0 scale-95 pointer-events-none').addClass(
            'opacity-100 scale-100');
    });

    // Switch back to Login form
    $('#login_here').on('click', function() {
        $('#Register_login').removeClass('opacity-100 scale-100').addClass(
            'opacity-0 scale-95 pointer-events-none');
        $('#user_login').removeClass('opacity-0 scale-95 pointer-events-none').addClass(
            'opacity-100 scale-100');
    });

    // Register form AJAX
    $('.register').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: './register.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(resp) {
                if (resp === 'ok') {
                    $(".register")[0].reset();

                    const msg = $("#successMsg");
                    msg.removeClass("hidden");

                    setTimeout(() => {
                        msg.removeClass("opacity-0 scale-95").addClass(
                            "opacity-100 scale-100");
                    }, 50);

                    setTimeout(() => {
                        msg.removeClass("opacity-100 scale-100").addClass(
                            "opacity-0 scale-95");
                    }, 2500);

                    setTimeout(() => {
                        msg.addClass("hidden");
                    }, 3000);
                }
            }
        })
    })

    //  logoput user
    $('.logout').on('submit', function(e) {
        e.preventDefault();



        $.ajax({
            url: 'logout.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(resp) {
                console.log(resp)
            },

        })

    })




});
</script>