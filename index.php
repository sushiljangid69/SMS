<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
       body {
            background-image: url(images/index.jpg);
            background-position: center;
            background-size: auto auto;
            background-repeat: no-repeat;
        }
        </style>
    <title>Student Management System</title>
</head>

<body>
    <div class="center display-1" style="color:cornsilk;">
        Welcome to Student Management System
    </div>
    <div class="center display-2" style="margin-top:3%;background: linear-gradient(360deg,transparent,#b39647);color:azure" title="Here Student is able to see his details">
        Student Panel
    </div>
    <div style="float:right;margin-right:2%;" class="display-3">
        <a href="login.php" title="Go to Admin Login Panel">Admin Login</a>
    </div>
    <div class="container">
        <form action="showinfo.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="course" style="color: azure;">Course</label>
                </div>
                <div class="col-75">
                    <select name="class">
                        <option value="BCA">BCA</option>
                        <option value="BBA">BBA</option>
                        <option value="BCOM">BCOM</option>
                        <option value="BA">BA</option>
                        <option value="BSC">BSC</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="part" style="color:azure;">Part</label>
                </div>
                <div class="col-75">
                    <select name="part" id="">
                <option value="1">Part 1</option>
                <option value="2">Part 2</option>
                <option value="3">Part 3</option>
            </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="name" style="color:azure;">Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="name" placeholder="Enter your Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    
                </div>
                <div class="col-25">
             <input type="submit" value="View Info" name="submit">
                </div>
                <div class="col-25">

                </div>
                <div class="col-25">
                    <input type="reset" value="Reset" name="reset">
                </div>
            </div>
            
            
        </form>
    </div>
</body>

</html>