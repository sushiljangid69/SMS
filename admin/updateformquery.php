<?php
    if(isset($_POST['submit']))
    {
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $fathername = $_POST['fathername'];
        $mothername = $_POST['mothername'];
        $class = $_POST['class'];
        $part = $_POST['part'];
        $address = $_POST['address'];
        $sid = $_POST['sid'];
        $contactno = $_POST['contactno'];
        $parentscontact = $_POST['parentscontact'];
        $pincode = $_POST['pincode'];
        $imagename = $_FILES['simg']['name']; #storing file name into $imagename
        $tempname = $_FILES['simg']['tmp_name']; #storing temporary file name
        move_uploaded_file($tempname,"../dataimg/$imagename");
        include('../dbcon.php');
        if($con == true)
        {
            $query = "UPDATE `student` SET `roll_no` = '$rollno', `name` = '$name', `father_name` = '$fathername', `mother_name` = '$mothername', `class` = '$class', `part` = '$part', `address` = '$address', `contact_no` = '$contactno', `parents_contact_no` = '$parentscontact', `pincode` = '$pincode' , `image` = '$imagename' WHERE `student`.`id` = $sid;";
            $run = mysqli_query($con,$query);
            echo $run;
            if($run == true)
            {
                ?>
                <script>
                    window.alert("Data Updated Successfully");
                    window.open('updateform.php?sid=<?php echo $sid; ?>','_self');
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    window.alert("!! Error Data not Updated");
                </script>
                <?php
            }
        }
    }
?>