<?php
include("../control/employeeprofileprocess.php");
include("../control/empcookies.php");
?>
<html>
<head>
    <link rel="stylesheet" href="../css/employeecss.css">
    <title>Employee Profile
</title>
<body>
    
    <center>
<form class="box">
<h2>Employee Profile</h2> <hr>
<div class=profile>Hi <?php echo $uname;?>,</div><br>
<div class=link><a href="../control/employeelogout.php">Logout</a><br><br></div>
<div class=link><a href="../view/empchangepass.php">Change Password</a><br><br></div>
<div class=link><a href="../view/empprofileupdate.php">Employee profile view-edit</a><br><br></div>
<div class=link><a href="../view/empcusregistration.php">Add new Customer</a><br><br></div>
<div class=link><a href="../view/empcusupdateprofile.php">Customer’s profile edit</a><br><br></div>
<div class=link><a href="../view/empcusviewdelete.php">Customer’s profile view-delete</a><br><br></div>
<div class=link><a href="../view/empshowcuscom.php">View Customer’s complain</a><br><br></div>
<div class=link><a href="../view/empprductupdate.php">Update product</a><br><br></div>
<div class=link><a href="addproduct.php">Add Product item</a><br><br></div>
<div class=link><a href="../view/empproductviewdelete.php">Product items view-delete</a><br><br></div>
<div class=link><a href="../view/emporderproduct.php">Order Product</a><br><br></div>
<div class=link><a href="emptarget.php">Update dailty target</a><br><br></div>
</form>
</body>
</html>
