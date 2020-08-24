<?php
    include('../dbcon.php');
    $sid = $_GET['sid'];
    if($con == true)
    {
        $query = "DELETE FROM `student` WHERE `student`.`id` = '$sid'";
        $run = mysqli_query($con,$query);
        echo $run;
        if($run == true)
        {
            ?>
            <script>
                window.alert("Data Deleted Successfully");
                window.open('admindash.php','_self');
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                window.alert("!! Error Data not Deleted");
            </script>
            <?php
        }
    }
?>