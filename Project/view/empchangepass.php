<?php
include("../control/empchangepassprocess.php")
?>

<html>
    <head>
    <link rel="stylesheet" href="../css/employeecss.css">
        <title>Change Password
</title>
</head>
<body>
    
    <form action="" method="POST" class="box">
    <h2>Change Password</h2> <hr>
             <input type="text" value="<?php echo $username;?>" readonly> 
             <input type="text" name="pass" placeholder="Previous Passoword"> 
             <input type="text" name="newpass" placeholder="New Passoword">
             <input type="submit" name="submit" value="Submit"> </td>

             <div class=link><a href="../view/empolyeeprofile.php">Click Here to Profile Page</a></div>

    </form>

</body>
</html>