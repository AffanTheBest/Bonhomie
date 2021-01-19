<?php

$server ="remotemysql.com";
$user ="IipECoeakJ";
$password ="i9a7MM89Ma";
$db ="IipECoeakJ";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
        <script>
         alert("Connection Successful");

        </script>
    <?php

} else{
    ?>
        <script>
            alert("NO Connection")
    
        </script>
    <?php
}

   



?>
