
<?php

$connection =mysqli_connect("localhost","root","","Bonhomie");
if(isset($_POST['submit01'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $inquery=$_POST['query'];
   
   if($name!=NULL && $email!=NULL){
       $query="insert into query (name,email,query) values('$name','$email','$inquery')";
       $query_run=mysqli_query($connection,$query);
       if($query_run)
       {
          ?>
           <script>
           alert("Your Query is submitted successfully");
           
           </script>
           <?php
       }
       else
       {    
           ?>
           <script>
           alert("Something is not right");
           </script>
           <?php
       }

       
   }
   else
   {
        ?>
        <script>
       alert("please fill all the textboxes");
       </script>
       <?php
   }
  
}



?>