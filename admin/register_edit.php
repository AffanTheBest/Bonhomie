<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container-fluid">
<!--DataTable Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Edit Admin Profile </h6>
    </div>
    <div class="card-body">
<?php
$connection =mysqli_connect("localhost","root","","Bonhomie");
    if(isset($_POST['edit_btn']))
 {
   $id=$_POST['edit_id'];
   
   $query ="select * from adminregister where id='$id'";
   $query_run=mysqli_query($connection,$query);

   foreach($query_run as $row)
   {
       ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
       <div class="form-group">
                    <label>first Name </lable>
                    <input type="text" name=" edit_fname" value="<?php echo $row['fname'] ?>" class="form-control" placeholder="Enter  First Name">
                </div>
            <div class="form-group">
                <label>Last Name </lable>
                <input type="text" name="edit_lname" value="<?php echo $row['lname'] ?>" class="form-control" placeholder=" Enter Last Name">
            </div>
                <div class="form-group">
                    <label>Email</lable>
                    <input type="email" name="edit_email" value="<?php echo $row['email'] ?>"  class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label>Department</lable>
                    <input type="text" name="edit_dpt" value="<?php echo $row['department'] ?>" class="form-control" placeholder="Enter Department">
                </div>
                <a href="register.php" class="btn btn-danger">Cancel</a>
                <button  type="submit"  name="updatebtn" class="btn btn-primary">Update</button>
   </form>

            <?php
   }


 }
 ?>


    </div> 
    </div>
</div>

</div>
<!--/.container-fluid -->



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>