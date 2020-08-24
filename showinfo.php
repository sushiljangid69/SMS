<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Student Managemet System</title>
</head>

<body style="background-color:burlywood;">
    <div style="text-align:center;font-size:4vw;">
        Your Details:
    </div>
    <div style="float:left;margin-left:2%;background-color:ivory;border-radius:1vw;padding:0.5vw;margin-top:-3%;font-size:2vw;">
        <a href="index.php">Back to Student Panel</a>
    </div>
    <div class="center">
    <table align="center" border="1px" style="width:95%;text-align:left;margin-top:3rem;border-color:crimson;">
        <?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $class = $_POST['class'];
        $part = $_POST['part'];
        include('dbcon.php');
        $query = "SELECT * FROM `student` WHERE `class` = '$class' AND `part` = '$part' AND `name` Like '$name%'";
        $run = mysqli_query($con,$query);
        if(mysqli_num_rows($run) < 1)
        {
           ?>
           <script>
               window.alert('No Student Record Found !!');
               window.open('index.php','_self');
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
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Self Contact No.</th>
                <th>Parent's Contact No.</th>
                <th>Address</th>
                <th>Pincode</th>
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
                <td><img src="dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" readonly /></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['class']; ?></td>
                <td><?php echo $data['part']; ?></td>
                <td><?php echo $data['father_name']; ?></td>
                <td><?php echo $data['mother_name']; ?></td>
                <td><?php echo $data['contact_no']; ?></td>
                <td><?php echo $data['parents_contact_no']; ?></td>
                <td><?php echo $data['address']; ?></td>
                <td><?php echo $data['pincode']; ?></td>
            </tr>
        </tbody>
        <?php
            
        }
        }
    }
?>
    </table>
    </div>
</body>

</html>