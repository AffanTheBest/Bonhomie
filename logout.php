<?php
    session_start();
    /**  LOGOUT CODE  */
    if(isset($_POST['logout_btn'])){
          //  session_destroy();
           // unset($_SESSION['email']);
            header('location:login/');

    }

?>