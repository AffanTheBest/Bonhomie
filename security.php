<?php
 session_start();
 include('database/dbconfig.php');

 if($connection){
     //echo "database connected !!";
 }
 else
 {
     header("location:database/dbconfig.php");
 }


 if(!$_SESSION['email'])
 {
    header('location: login');
 }

?>