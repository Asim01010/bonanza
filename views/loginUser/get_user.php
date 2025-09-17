<?php
include '../config.php';

$fetch = "SELECT * FROM user";

$result = mysqli_query($conn,$fetch);

foreach ($result as $item){
    ?>
<span class="text-xl font-semibold">Welcome!</span>
<span class="text-gray-600"><?php echo $item['firstName']?></span>
<span class="text-gray-600"><?php echo $item['lastName']?></span>
<?php
}

?>