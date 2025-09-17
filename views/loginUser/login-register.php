    <?php 

    ?>

    <div id="user_sidebar" class="fixed hidden bg-black/50 h-full w-full z-20 left-0 top-0">

        <!-- Login form -->
        <div id="user_login"
            class="absolute right-0 flex flex-col items-center bg-white h-full w-90 p-5 transition-all duration-300 ease-in-out <?php echo isset($_SESSION['user']) ? 'opacity-0 scale-95 pointer-events-none' : 'opacity-100 scale-100'; ?>">

            <form class="login" action="" method="POST" style="width: 100%;">
                <div class="relatives flex flex-col items-center gap-4 w-full py-3">
                    <input id="userName" name="u_email" type="text" class="border text-base px-3 py-2 w-full"
                        placeholder="Username">
                    <input id="userPassword" name="u_password" type="password"
                        class="border text-base px-3 py-2 w-full mt-3" placeholder="Password">

                    <button type="submit"
                        class="bg-red-700 cursor-pointer text-white text-base px-4 py-2 w-full rounded hover:bg-red-800">
                        Signin
                    </button>
                    <p id="successLogin"
                        class="opacity-0 scale-95 hidden text-green-700 bg-green-100 rounded w-full text-sm transition-all duration-500 ease-in-out p-3 text-center">
                        You are successfully Login
                    </p>

                    <p id="create_account"
                        class="text-sm text-gray-500 underline transition hover:text-[#66CFE1] cursor-pointer">
                        New customer? Create your account
                    </p>
                </div>
            </form>
        </div>
        <!-- <p id="loginSuccess"
            class="text-sm hidden text-center py-4 text-green-800  transition bg-green-100 border border-green-200 rounded-2 p-2 cursor-pointer w-full">
            Signin Successfully!
        </p> -->

        <!-- Register form -->
        <div id="Register_login"
            class="absolute right-0 flex flex-col items-center bg-white h-full w-90 p-5 transition-all duration-300 ease-in-out opacity-0 scale-95 pointer-events-none">

            <form class="register" action="" method="POST" style="width: 100%;">
                <div class="relatives flex flex-col items-center gap-4 w-full py-3">

                    <!-- All inputs have same padding/margin/width -->
                    <input type="text" name="firstName" class="border text-base px-3 py-3 w-full rounded"
                        placeholder="First Name">

                    <input type="text" name="lastName" class="border text-base px-3 py-3 w-full rounded"
                        placeholder="Last Name">

                    <input name="email" type="text" class="border text-base px-3 py-3 w-full rounded"
                        placeholder="Email">

                    <input name="password" type="password" class="border text-base px-3 py-3 w-full rounded"
                        placeholder="Password">

                    <button type="submit"
                        class="bg-red-700 text-white cursor-pointer text-base px-3 py-3 w-full rounded hover:bg-red-800 register_btn">
                        Register
                    </button>

                    <p id="login_here"
                        class="text-sm text-gray-500 underline transition hover:text-[#66CFE1] cursor-pointer">
                        Already have an account? Login here
                    </p>

                    <p id="successMsg"
                        class="opacity-0 scale-95 hidden text-green-700 bg-green-100 rounded w-full text-sm transition-all duration-500 ease-in-out p-3 text-center">
                        You are successfully registered
                    </p>
                    <p
                        class="opacity-0 scale-95 hidden text-red-700 bg-red-100 rounded w-full text-sm transition-all duration-500 ease-in-out p-3 text-center">
                        Duplicate Entry
                    </p>

                </div>
            </form>
        </div>


        <!-- Logout form -->
        <div id="user_logout"
            class="absolute right-0 flex flex-col items-center bg-white h-full w-90 p-5 transition-all duration-300 ease-in-out <?php echo isset($_SESSION['user']) ? 'opacity-100 scale-100' : 'opacity-0 scale-95 pointer-events-none'; ?>">



            <div id="user_data" class="flex flex-col items-center justify-center">

            </div>



            <form class="logout" action="logout.php" method="POST" style="width: 100%;">
                <button type="submit" data-id="<?php echo $_SESSION['user']['id'] ?? ''; ?>"
                    class="bg-red-700 text-white cursor-pointer text-base px-4 py-2 w-full rounded hover:bg-red-800">
                    Logout
                </button>

                <p
                    class="text-sm text-center py-4 text-gray-500 underline transition hover:text-[#66CFE1] cursor-pointer">
                    You are already logged in, Dear Customer!
                </p>
            </form>
            <p id="successLogout"
                class="opacity-0 scale-95 hidden text-red-700 bg-red-100 rounded w-full text-sm transition-all duration-500 ease-in-out p-3 text-center">
                You are successfully Logout
            </p>
        </div>
    </div>
    <script>
$(document).ready(function() {
    // Switch to Register form
    $('#create_account').on('click', function() {
        $('#user_login').addClass('opacity-0 scale-95 pointer-events-none')
            .removeClass('opacity-100 scale-100');
        $('#Register_login').addClass('opacity-100 scale-100')
            .removeClass('opacity-0 scale-95 pointer-events-none');
    });

    // Switch back to Login form
    $('#login_here').on('click', function() {
        $('#Register_login').addClass('opacity-0 scale-95 pointer-events-none')
            .removeClass('opacity-100 scale-100');
        $('#user_login').addClass('opacity-100 scale-100')
            .removeClass('opacity-0 scale-95 pointer-events-none');
    });

    // Helper → show a message instantly then hide after 1s
    function showMessage(selector) {
        const msg = $(selector);
        msg.removeClass('hidden opacity-0 scale-95')
            .addClass('opacity-100 scale-100');

        setTimeout(() => {
            msg.addClass('opacity-0 scale-95')
                .removeClass('opacity-100 scale-100');

            setTimeout(() => {
                msg.addClass('hidden');
            }, 300); // give transition time
        }, 1000);
    }

    // REGISTER
    $('.register').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'loginUser/register.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(res) {
                res = res.trim();
                if (res === 'ok') {
                    $(".register")[0].reset();

                    // ✅ Show success message
                    showMessage('#successMsg');

                    setTimeout(() => {
                        $('#Register_login').addClass(
                                'opacity-0 scale-95 pointer-events-none')
                            .removeClass('opacity-100 scale-100');
                        $('#user_logout').addClass('opacity-100 scale-100')
                            .removeClass('opacity-0 scale-95 pointer-events-none');
                    }, 1000);
                }
            }
        });
    });

    // LOGIN
    $('.login').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'loginUser/login.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(res) {
                res = res.trim();
                if (res === 'ok') {
                    $(".login")[0].reset();

                    // ✅ Show login message
                    showMessage('#successLogin');

                    setTimeout(() => {
                        $('#user_login').addClass(
                                'opacity-0 scale-95 pointer-events-none')
                            .removeClass('opacity-100 scale-100');
                        $('#user_logout').addClass('opacity-100 scale-100')
                            .removeClass('opacity-0 scale-95 pointer-events-none');
                    }, 1000);
                } else {
                    alert("Invalid Email or Password");
                }
            }
        });
    });

    // LOGOUT
    $('.logout').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'loginUser/logout.php',
            type: 'POST',
            success: function(res) {
                res = res.trim();
                if (res === 'ok') {
                    // ✅ Show logout message
                    showMessage('#successLogout');

                    setTimeout(() => {
                        $('#user_logout').addClass(
                                'opacity-0 scale-95 pointer-events-none')
                            .removeClass('opacity-100 scale-100');
                        $('#user_login').addClass('opacity-100 scale-100')
                            .removeClass('opacity-0 scale-95 pointer-events-none');
                    }, 1000);
                }
            }
        });
    });
});
    </script>