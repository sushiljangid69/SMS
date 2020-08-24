<?php
    include('../admindashheader.php');
    include('../dbcon.php');
    $sid = $_REQUEST['sid'];
    $query = "SELECT * FROM `student` WHERE `id` = '$sid'";
    $run = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($run);
?>

<body style="background-color: wheat;">
    <div class="center display-1">
        Update Student Details
    </div>
    <div style="float: left;font-size:2vw;">
    <a href="admindash.php" title="Back to dashbord">Back To Dashboard</a>
    </div>
    <div style="float: right;font-size:2vw;">
    <a href="../logout.php" title="logout">Log Out</a>
    </div>
    <div class="container" style="margin-bottom:10%;">
        <form action="updateformquery.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="number">Roll Number:</label>
                </div>
                <div class="col-75">
                    <input type="number" name="rollno" value="<?php echo $data['roll_no']; ?>"
                        style="width: 30vw;height: auto;padding: 1vw;border: 0.01vw solid #ccc;border-radius: 0.5vw;resize: vertical;font-size: 2.2vw;"
                        required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="name">Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="name" value="<?php echo $data['name'];?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fathername">Father's Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="fathername" value="<?php echo $data['father_name'];?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="mothername">Mother's Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="mothername" value="<?php echo $data['mother_name'];?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="class">Class:</label>
                </div>
                <div class="col-75">
                    <select name="class" id="classid" required>
                        <option value="BA" <?php if($data['class'] == 'BA') echo ' selected="selected"'; ?>>BA</option>
                        <option value="BCOM" <?php if($data['class'] == 'BCOM') echo ' selected="selected"'; ?>>BCOM
                        </option>
                        <option value="BSC" <?php if($data['class'] == 'BSC') echo ' selected="selected"'; ?>>BSC
                        </option>
                        <option value="BBA" <?php if($data['class'] == 'BBA') echo ' selected="selected"'; ?>>BBA
                        </option>
                        <option value="BCA" <?php if($data['class'] == 'BCA') echo ' selected="selected"'; ?>>BCA
                        </option>
                        <option value="BVA" <?php if($data['class'] == 'BVA') echo ' selected="selected"'; ?>>BVA
                        </option>
                    </select>
                </div>
            </div>
            <div>
                <div class="col-25">
                    <label for="part">Part:</label>
                </div>
                <div class="col-75">
                    <select name="part" id="partid" required>
                        <option value="1" <?php if($data['part'] == '1') echo ' selected="selected"'; ?>>Part 1</option>
                        <option value="2" <?php if($data['part'] == '2') echo ' selected="selected"'; ?>>Part 2</option>
                        <option value="3" <?php if($data['part'] == '3') echo ' selected="selected"'; ?>>Part 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="address">Address:</label>
                </div>
                <div class="col-75">
                    <textarea name="address" style="resize: none;font-size:2.2vw;width:30vw;height:10vw;"
                        required><?php echo $data['address'];?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="scontact">Student Contact Number:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="contactno" value="<?php echo $data['contact_no'];?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="pcontact">Parent's Contact Number:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="parentscontact" value="<?php echo $data['parents_contact_no'];?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="pincode">Pincode:</label>
                </div>
                <div class="col-75">
                    <input type="number" name="pincode" value="<?php echo $data['pincode'];?>" maxlength="6"
                        style="width: 30vw;height: auto;padding: 1vw;border: 0.01vw solid #ccc;border-radius: 0.5vw;resize: vertical;font-size: 2.2vw;"
                        required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="image">Student Image:</label>
                </div>
                <div class="col-75">
                    <input type="file" name="simg" type="image/jpg"
                        style="width: 30vw;height: auto;padding: 1vw;border: 0.01vw solid #ccc;border-radius: 0.5vw;resize: vertical;font-size: 2.2vw;"
                         value="<?php echo $data['image'];?>" >
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <input type="hidden" name="sid" value="<?php echo $data['id'];?>"></td>
                </div>
                <div class="col-25">
                    <input type="submit" name="submit" value="Update">
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
