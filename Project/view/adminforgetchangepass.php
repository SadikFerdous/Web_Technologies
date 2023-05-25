<?php
include("../control/adminforgetchangepassprocess.php")
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/admincss.css">
        <title>New Password
</title>
</head>
<body>
    <div class="box">
    <h2>New Password</h2> <hr>
    <form action="" method="POST">
        <br>
        <p>  Username : </p>
        <input type="text" value="<?php echo $username;?>" readonly> </td>

        <p>  New Password : </p> 
        <input type="password" name="newpass"> </td>

        <input type="submit" name="submit" class="button submit" value="Submit"> 
        <br>
        <center>
            <div class="link">
            <a href="../control/adminlogout.php">Click Here to go Login Page</a>
            </div>
        </center>
    </form>
    </div>
</body>
</html>