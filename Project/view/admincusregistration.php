<?php
include ("../control/admincusregistrationprocess.php")
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/admincuscss.css">
        <title>
            Customer Registration
        </title>
    </head>
    <body>
        <div class="boxUpdateCus">
        <h2>Customer Registration </h2>
        <hr></hr>
<form
    action="" method="POST" enctype="multipart/form-data" onsubmit="return formResult()"> 

    <br>
    <p> First Name : </p> 
    <input type="text" name="fname" id="inputtext" onkeyup="getFname()">
    <br>
    <center>
    <p id="fname"> </p>
    </center>
    <br>

    <p> Gender : </p>
    <br>
    <br>
    <input type="radio" name="gender" id="Male" value="Male" onclick=" checkGender()">Male 
    <input type="radio" name="gender" id="Female" value="Female" onclick=" checkGender()">Female 
    <input type="radio" name="gender" id="Other" value="Other" onclick=" checkGender()">Others
    <br>

    <br>
    <center>
    <p id="gender"> </p> 
    </center>
    
    <br>
    <p> E-mail : </p>  
    <input type="mail" name="mail" id="inputtext5" onkeyup="getEmail()"> 
    <br>
    <center>
    <p id="email"> </p>
    </center>
    <br>
    
    <p> Present Address : </p>  
    <input type="text" name="adres" id="inputtext6" onkeyup="getPre()"> 
    <br>
    <center>
    <p id="pre"> </p>
    </center>
    <br>

    <p> Password : </p>   
    <input type="password" name="pass" id="inputtext4" onkeyup="getpassword()"> 
    <br>
    <center>
    <p id="passwordError"> </p>
    </center>
    <br>
    <br>

    <input type="submit" name="Submisson" class="button submit" value="Submit">
    <input type="reset" name="Submission" class="button reset" value="Reset">
    
    <center>
    <div class="linkprofile">
    <a href="../view/adminprofile.php">Click Here for Profile Page!</a>
    <div>
    </center>
</form>
<script src="../js/admincusregistration.js"></script>
</body>
</div>
</html>

