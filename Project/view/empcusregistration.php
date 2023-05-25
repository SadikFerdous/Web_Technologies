<?php
include ("../control/employeecusregistrationprocess .php");
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/employeecss.css">
        <title>
            Customer Registration
        </title>
    </head>
    <body>

    <div class="cus"><h2>Customer Registration</h2></div>
<form
    action="" method="POST" class="box" enctype="multipart/form-data" onsubmit="return serachCus()">    
<input type="text" name="fname" placeholder="Name" id="inputtext" onkeyup="getFname()">
<div class="jss"><p id="fname"></div>
<p>Gender : </p>
<p><input type="radio" name="gender" id="Male" value="Male" onclick=" checkGender()">Male
<input type="radio" name="gender" id="Female" value="Female" onclick=" checkGender()">Female
<input type="radio" name="gender" id="Other" value="Other" onclick=" checkGender()">Others</p>
<div class="jss"><p id="gender"></div>

<input type="mail" name="mail" placeholder="Email" id="inputtext5" onkeyup="serachCus()"> 
<div class="jss"><p id="email"></div> 

<input type="text" name="adres" placeholder="Address" id="inputtext6" onkeyup="getPre()"> 
<div class="jss"><p id="pre"></div>

<input type="password"  name="pass" placeholder="Password" id="inputtext4" onkeyup="getpassword()"> 
<div class="jss"><p id="passwordError"></div>

<input type="submit" name="Submisson" value="Submit">
<input type="reset" name="Submission" value="Reset">

<div class=link><a href="../view/empolyeeprofile.php">Click Here for Profile Page!</a></div>
</form>
<script src="../js/empajax.js"></script>
<script src="../js/empcusregistration.js"></script>

</body>
</html>