<?php
 session_start();
 $connection =mysqli_connect("remotemysql.com","IipECoeakJ","i9a7MM89Ma","IipECoeakJ");
 /**CODE FOR ADMIN PROFILE ADDING */
 if(isset($_POST['registerbtn']))
 {
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $email=$_POST['email'];
     $dpt=$_POST['dpt'];
     $password=$_POST['password'];
     $cpassword=$_POST['cpassword'];
     
     if($password === $cpassword)
     {
        $query ="insert into adminregister (fname,lname,email,department,password,cpassword) VALUES('$fname','$lname','$email','$dpt','$password','$cpassword')";
        $query_run= mysqli_query($connection,$query);
        if($query_run)
        {
          $_SESSION['success']="Admin Profile Added";
          header('location:register.php');
        }
        else
        {
            $_SESSION['status']="Admin profile Not Added";
            header("location:register.php");
        } 
    }
    else
    {
        $_SESSION['status']="Password and Confirm Password Does Not Match";
            header("location:register.php");


    }

 }






 /** CODE FOR DATA UPDATE */

 if(isset($_POST['updatebtn'])){
   $id=$_POST['edit_id'];
   $fname=$_POST['edit_fname'];
   $lname=$_POST['edit_lname'];
   $email=$_POST['edit_email'];
   $dpt=$_POST['edit_dpt'];


   $query ="update adminregister set fname='$fname', lname='$lname', email='$email', department='$dpt' where id='$id' ";
   $query_run= mysqli_query($connection,$query);

   if($query_run){
     $_SESSION['success']="your data is updated";
     header('location:register.php'); 
   }
   else{
     $_SESSION['status']="your data is not updated";
     header('location:register.php');

   }

 }



/**code for deleting admin */

 if(isset($_POST['deletebtn'])){

  $id=$_POST['delete_id'];
  $query="delete  from adminregister where id='$id'";
  $query_run=mysqli_query($connection,$query);

  if($query_run){

    $_SESSION['success']="your data is Deleted successfully";
    header('location:register.php');
  }
  else{
    $_SESSION['status']="No Data Deleted";
    header('location:register.php');

  }
 }




/**code for deleting query */
 if(isset($_POST['deletebtn1'])){

  $id=$_POST['delete_id1'];
  $query="delete  from query where id='$id'";
  $query_run=mysqli_query($connection,$query);

  if($query_run){

    $_SESSION['success']="your data is Deleted successfully";
    header('location:query.php');
  }
  else{
    $_SESSION['status']="No Data Deleted";
    header('location:query.php');

  }
 }




/**code for  admin login  */
include('security.php');
if(isset($_POST['login_btn'])){

  $email_login=$_POST['email'];
  $password_login=$_POST['password'];

  $query="select * from adminregister where email='$email_login' and password ='$password_login'";
  $query_run=mysqli_query($connection,$query);

  if(mysqli_fetch_array($query_run)){
    $_SESSION['email']=$email_login;
    header('location: index.php');
  }
  else{
    $_SESSION['status']="Email id/password is invalid";
    header('location:login.php');
  }
}

?>