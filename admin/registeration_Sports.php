<?php

include('security.php');

include('includes/header.php'); 
include('includes/navbar.php');
?>


<div class="container-fluid">

<!--DataTable Examole -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        
    </div>
    <div class="card-body">

        <?php
        if(isset($_SESSION['success'])&&$_SESSION['success'] !='')
        {
            echo'<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['status'])&&$_SESSION['status'] !='')
        {
            echo'<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }


        ?>

      <div class="table-responsive">

        <?php
            $connection =mysqli_connect("localhost","root","","Bonhomie");

            $query="select * from sportsRegistration";
            $query_run= mysqli_query($connection,$query);
        ?>

            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Player</th>
                        <th>Contact</th>
                        <th>DEPARTMENT</th>
                        <th>Event</th>
                        <th>Year</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($query_run)>0)
                {
                    while($row =mysqli_fetch_assoc($query_run))
                    {
                        ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                     <td><?php echo $row['PlayerName']; ?></td>
                     <td><?php echo $row['contactNumber']; ?></td>
                     <td><?php echo $row['Department']; ?></td>
                     <td><?php echo $row['EventName']; ?></td>
                     <td><?php echo $row['year']; ?></td>
                     <td>
                        <form action="register_edit.php" method="post">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="edit_btn"class="btn btn-success">EDIT</button>
                        </form>
                     </td>
                     <td>
                         <form action="code.php" method="POST">
                             <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                        <button type="submit" name="deletebtn" class="btn btn-danger">DELETE</button>
                        </form>
                     </td>
                    </tr>
                    <?php
                    }

                }
                else{
                    echo "No Record Found";
                }
                ?>      
                </tbody>
            </table>
      </div> 
    </div>
</div>

<?php

   
include('includes/scripts.php');
include('includes/footer.php');

?>