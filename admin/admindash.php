<?php
    include('../header.php');
?>
<body style="background-color: wheat;">
    <div class="center display-1" style="background-color:lightcoral;border-radius:2vw;padding:1vw;">
        Welcome to Admin Dashboard
    </div>
    <div class="display-3" style="float:right;margin-right:2vw;">
        <a href="../logout.php" title="logout">Log Out</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-50 border" style="background-color:lightsalmon;font-size:2.1vw;">
                <a href="new.php">Insert Student Details</a>
            </div>
            <div class="col-50 border" style="background-color:lightseagreen;font-size:2.1vw;">
                <a href="update.php">Update Student Details</a>
            </div>
        </div>
        <div class="row">
            <div class="col-50 border" style="background-color:lightskyblue;font-size:2.1vw;">
                <a href="delete.php">Delete Student Details</a>
            </div>
            <div class="col-50 border" style="background-color:lightyellow;font-size:2.1vw;">
                <a href="seeall.php">See All Student Details</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php

?>