<?php
include("../control/emptargetprocess.php")
?>
<html>
<head>
<link rel="stylesheet" href="../css/employeecss.css">
    <title>Employee Target
</title>
<body>
    

<form action="" method="POST" class="box" >
<h2>Employee Target</h2> <hr>

<input type="text" name="pass" value="<?php echo $username;?>" readonly> 
<input type="date" name="date" > 
<input type="number" name="number" placeholder="Amount"> 
<input type="submit" name="Submisson" value="update">
<div class=link><a href="empolyeeprofile.php">Go back to Profile</a> </div>
</form>
</body>
</html>
