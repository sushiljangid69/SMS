<?php
    include('../header.php');
?> 
<body style="background-color: wheat;">
    <div class="center display-1">
        Add Student Details
    </div>
    <div style="float: left;font-size:2vw;">
    <a href="admindash.php" title="Back to dashbord">Back To Dashboard</a>
    </div>
    <div style="float: right;font-size:2vw;">
    <a href="../logout.php" title="logout">Log Out</a>
    </div>
    <div class="container" style="margin-bottom:10%;">
        <form action="new.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="number">Roll Number:</label>
                </div>
                <div class="col-75">
                    <input type="number" name="rollno" style="width: 30vw;height: auto;padding: 1vw;border: 0.01vw solid #ccc;border-radius: 0.5vw;resize: vertical;font-size: 2.2vw;" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="name">Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fathername">Father's Name:</label>
                </div>
                <div class="col-75">
                <input type="text" name="fathername" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="mothername">Mother's Name:</label>
            </div>
            <div class="col-75">
                <input type="text" name="mothername" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="class">Class:</label>
            </div>
            <div class="col-75">
                <select name="class" required>
                    <option value="BA">BA</option>
                    <option value="BCOM">BCOM</option>
                    <option value="BSC">BSC</option>
                    <option value="BBA">BBA</option>
                    <option value="BCA">BCA</option>
                    <option value="BVA">BVA</option>
                </select>
            </div>
        </div>
        <div>
            <div class="col-25">
                <label for="part">Part:</label>
            </div>
            <div class="col-75">
                <select name="part" required>
                    <option value="1">Part 1</option>
                    <option value="2">Part 2</option>
                    <option value="3">Part 3</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="address">Address:</label>
            </div>
            <div class="col-75">
                <textarea name="address" style="resize: none;width:30vw;height:10vw;font-size:2.1vw;" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="scontact">Student Contact Number:</label>
            </div>
            <div class="col-75">
                <input type="text" name="contactno" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="pcontact">Parent's Contact Number:</label>
            </div>
            <div class="col-75">
                <input type="text" name="parentscontact" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="pincode">Pincode:</label>
            </div>
            <div class="col-75">
                <input type="number" name="pincode" maxlength="6" style="width: 30vw;height: auto;padding: 1vw;border: 0.01vw solid #ccc;border-radius: 0.5vw;resize: vertical;font-size: 2.2vw;" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="image">Student Image:</label>
            </div>
            <div class="col-75">
                <input type="file" name="simg" type="image/jpg" style="width: 30vw;height: auto;padding: 1vw;border: 0.01vw solid #ccc;border-radius: 0.5vw;resize: vertical;font-size: 2.2vw;" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">

            </div>
            <div class="col-25">
                <input type="submit" name="submit" value="Add Information">
            </div>
            <div class="col-25">

            </div>
            <div class="col-25">
                <input type="reset" value="Reset">
            </div>
        </div>

    </form>
</div>
</body>

</html>
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
        $contactno = $_POST['contactno'];
        $parentscontact = $_POST['parentscontact'];
        $pincode = $_POST['pincode'];
        $imagename = $_FILES['simg']['name']; #storing file name into $imagename
        $tempname = $_FILES['simg']['tmp_name']; #storing temporary file name
        move_uploaded_file($tempname,"../dataimg/$imagename");
        include('../dbcon.php');
        if($con == true)
        {
            $query = "INSERT INTO `student`(`roll_no`,`image`, `name`, `father_name`, `mother_name`, `class`, `part`, `address`, `contact_no`, `parents_contact_no`, `pincode`) 
            VALUES ('$rollno','$imagename','$name','$fathername','$mothername','$class','$part','$address','$contactno','$parentscontact','$pincode')";
            $run = mysqli_query($con,$query);
            echo $run;
            if($run == true)
            {
                ?>
<script>
    window.alert("Data Added Successfully");
</script>
<?php
            }
            else
            {
                if(mysqli_errno($con) == 1062)
                {
                    ?>
<script>
    window.alert('Roll Number can not be duplicate\n Data not Added');
</script>
<?php
                }
                else
                {
                    ?>
<script>
    window.alert('Database Error!');
</script>
<?php
                }
            }
        }
    }
?>