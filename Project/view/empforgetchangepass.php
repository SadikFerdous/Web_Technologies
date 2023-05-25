<?php
include("../control/empforgetchangepassprocess.php")
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/employeecss.css">
        <title>New Password
</title>
</head>
<body>
    
    <form action="" method="POST" class="box">
                <h2>New Password</h2> <hr>
                <input type="text" value="<?php echo $username;?>" readonly> 
                <input type="text" name="newpass"> 
                <input type="submit" name="submit" value="Submit"> </td>
                <div class=link><a href="../control/employeelogout.php">Click Here to go Login Page!</a> </div>

    </form>

</body>
</html>