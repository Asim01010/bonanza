<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    ?>
    <title>Document</title>
</head>

<body>
    <?php include './navbar.php'?>
    <section id="hero_section" class="w-full  h-[608px]">
        <img src="./images/hero_section.webp" alt="" class="w-full h-full object-cover">
    </section>

    <section class="sections_2">
        <ul class="flex justify-center gap-10 text-2xl font-semibold mb-10">
            <li id="men" class="cursor-pointer">men</li>
            <li id="women" class="cursor-pointer">women</li>
            <li id="kids" class="cursor-pointer">kids</li>
            <li id="accessories" class="cursor-pointer">accessories</li>
        </ul>
        <div class="men"><img src="./images/arriva_2.png" alt=""></div>
        <div class="women"><img src="./images/arrival_3.png" alt=""></div>
        <div class="accessories"><img src="./images/arrival_4.png" alt=""></div>
        <div class="kids"><img src="./images/frag-2.png" alt=""></div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#men').click(function() {
            console.log('hy');
        });
    });
    </script>








</body>

</html>