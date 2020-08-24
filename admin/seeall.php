<?php
    include('../admindashheader.php');
?>

<body style="background-color: wheat;">
    <div class="center display-1">
        All Student Details
    </div>
    <div style="float: left;font-size:2vw;">
        <a href="admindash.php" title="Back to dashbord">Back To Dashboard</a>
    </div>
    <div style="float: right;font-size:2vw;">
        <a href="../logout.php" title="logout">Log Out</a>
    </div>
    <table align="center" border="1"
        style="width:80%;text-align:left;margin-top:5vw;border-color:crimson;font-size:2.1vw;">
        <?php
                include('../dbcon.php');
                $query = "SELECT * FROM `student`";
                $run = mysqli_query($con,$query);
                if(mysqli_num_rows($run) < 1)
                {
                    ?>
        <script>
            window.alert('No Record Found');
            window.open('admindash.php', '_self');
        </script>
        <?php
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
                            <th>Update</th>
                            <th>Delete</th>
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
                <td><img src="../dataimg/<?php echo $data['image']; ?>" style="width:12vw;height:12vw;"/></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['class']; ?></td>
                <td><?php echo $data['part']; ?></td>
                <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
                <td><a  href="deleteentry.php?sid=<?php echo $data['id']; ?>" onclick="return confirm('Are You Sure to delete this record?');">Delete</a></td>
            </tr>
        </tbody>
        <?php
                    }                   
                }
            ?>
    </table>
</body>

</html>