<?php
    include('../admindashheader.php');
?>
<body style="background-color: wheat;">
<div class="center display-1">
    Search Student Data to Update:
</div>
<div style="float: left;font-size:2vw;">
    <a href="admindash.php" title="Back to dashbord">Back To Dashboard</a>
    </div>
    <div style="float: right;font-size:2vw;">
    <a href="../logout.php" title="logout">Log Out</a>
    </div>
<div class="container">
    <form action="update.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="name">Student Name:</label>
            </div>
            <div class="col-75">
                <input type="text" name="name" placeholder="Student Name">
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
        <div class="row">
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
            </div>
            <div class="col-25">
                <input type="submit" name="submit" value="Search">
            </div>
        </div>
    </form>
</div>
    <table align="center" border="1" style="width:80%;text-align:left;margin-top:3rem;border-color:crimson;font-size:2.1vw;margin-bottom:4vw;">
        <?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $class = $_POST['class'];
        $part = $_POST['part'];
        include('../dbcon.php');
        $query = "SELECT * FROM `student` WHERE `class` = '$class' AND `part` = '$part' AND `name` Like '$name%'";
        $run = mysqli_query($con,$query);
        if(mysqli_num_rows($run) < 1)
        {
            echo "<div style='color:red;text-align:center;font-size:3rem;'>No Record Found!</div>";
        }
        else
        {
            echo "<thead>
            <tr>
                <th>No.</th>
                <th>Roll No.</th>
                <th>Image</th>
                <th>Name</th>
                <th>Class</th>
                <th>Part</th>
                <th>Edit</th>
            </tr>
        </thead>";
        echo "<tbody>";
        $count = 0;
        while($data = mysqli_fetch_assoc($run))
        {
            $count++;
            ?>
        <tbody>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $data['roll_no'];?></td>
                <td><img src="../dataimg/<?php echo $data['image']; ?>" style="width:12vw;height:12vw;" /></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['class']; ?></td>
                <td><?php echo $data['part']; ?></td>
                <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
            </tr>
        </tbody>
        <?php
        }
        }
    }
?>
    </table>
</body>
</html>