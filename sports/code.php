<?php

/**code for sports registration */
include  'dbconfig.php';

if(isset($_POST['event_regbtn'])){
    $fname=mysqli_real_escape_string($con,$_POST['fullname']);
    $w_number=mysqli_real_escape_string($con,$_POST['wnumber']);
    $dpt=mysqli_real_escape_string($con,$_POST['department']);
    $year=mysqli_real_escape_string($con,$_POST['year']);
    $event_name=mysqli_real_escape_string($con,$_POST['sports']);
    $team_p=mysqli_real_escape_string($con,$_POST['players_name']);


    $checkquery ="select * from sportsRegistration where PlayerName='$team_p' and EventName='$event_name'";
    $query=mysqli_query($con,$checkquery);

    $chckcount =mysqli_num_rows($query);

    if($chckcount>0){
        ?>
                <script>
                    alert("You Have Already Registered For This Event");

                </script>
                <?php
    }else{
        if(1){
            $insertquery ="insert into sportsRegistration (Name ,contactNumber,Department,year,EventName,PlayerName) values('$fname','$w_number','$dpt','$year','$event_name','$team_p')";

             $iquery=mysqli_query($con,$insertquery);

             if($iquery){
                ?>
                    <script>
                        alert("Registration Successful");
                     </script>
                     <?php
                     header("location: ../");

             }else{
                 ?>
                 <script>
                     alert("ooopppsss connection error");
                </script>
                <?php
             }
        }else{
            ?>
            <script>
                alert("you are missing something")
                </script>
                <?php
        }
    }
  } 

?>