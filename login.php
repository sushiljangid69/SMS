<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
        header('location:admin/admindash.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url(images/login.jpg);
            background-position: center;
            background-size: auto auto;
            background-repeat: repeat-y;
        }
    </style>
    <title>Admin Login</title>
</head>

<body>
    <div class="center display-1">
        Welcome to Student Management System
    </div>
    <div class="center display-2" style="margin-top:3%;background: linear-gradient(360deg,transparent,rgb(250, 255, 204));">
        Admin Login
    </div>
    <div class="display-3" style="float:right;margin-right:2%;">
        <a href="index.php">Student Panel</a>
    </div>
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="username">User Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="uname" placeholder="User Name here" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">Password:</label>
                </div>
                <div class="col-75">
                    <input type="password" name="pass" placeholder="Your Password here" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">

                </div>
                <div class="col-25">
                    <input type="submit" name="submit" value="LogIn">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row < 1)
    {
        ?>
<script>
    alert('user name or password does not found');
    window.open('login.php', '_self');
</script>
<?php
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        
        $userid = $data['id'];
        $_SESSION['uid']=$userid;
        header('location:admin/admindash.php');
    }
}
?>