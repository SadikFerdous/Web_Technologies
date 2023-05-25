<?php
include("../control/adminloginprocess.php")
?>

<html>
<head>
    <link rel="stylesheet" href="../css/admincss.css">
    <title>Admin Login
</title>
</head>
<body>
    <div class="box">
        <h2>Admin Login</h2>   
    <form action="" method="POST">
        <br>
        <p>  Username : </p>  
        <input type="text" name="username" placeholder="Enter your username" > 

        <p>  Password : </p> 
        <input type="password" name="pass" placeholder="Enter your password"> 

        <input type="submit" name="login" class="button submit" value="Login"> 
        <br>
        <center>
            <div class="link">
                <a href="adminforgetpass.php">Can’t access your account?</a> 
            </div>
            <br>

            <div class="link">
                <a href="homepage.php">Click Here To Go Home Page!</a> 
            </div>
        </center>
    </form>
    </div>

</body>
</html>