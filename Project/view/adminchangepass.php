<?php
include("../control/adminchangepassprocess.php")
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/admincss.css">
        <title>Change Password
</title>
</head>
<body>
    <div class="box">
    <h1>Change Password</h1>
    <form action="" method="POST">
        <br>
        <p>  Username : </p>  
        <input type="text" value="<?php echo $username;?>" readonly> 

        <p>  Previous Password : </p>
        <input type="password" name="pass"> </td>

        <p>  New Password : </p> 
        <input type="password" name="newpass"> </td>

        <input type="submit" name="submit" class="button submit" value="Submit">
        <br>
        <center>
            <div class="link">
            <a href="../control/adminlogout.php">Click Here to Logout</a> 
            </div>
        </center>
    </form>
    </div>
</body>
</html>