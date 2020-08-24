<?php
#connecting to database
$con = mysqli_connect('localhost','root','','sms');
if($con == false)
{
    ?>
    <script>
        window.alert('Database Connection Failed');
    </script>
    <?php
}

?>