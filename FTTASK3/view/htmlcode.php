<?php
include("../control/phpcode.php")

?>

<html>
    <!-- <link rel="stylesheet" type="text/css" href="../css/mystyle.css"; -->
    <body>
    <h1>ABC Managment System</h1>
    <h3>We Create Future</h3>
    <h5>Home        About US       Shop </h5>
    <h2>Registration Form</h2>
    
        <hr></hr>
<form
    action="" method="POST" enctype="multipart/form-data" onsubmit="return formResult()"> 
<table>
    <tr>  
        <td> <p> First Name : </p></td> 
        <td> <p><input type="text" name="firstname" id="inputtext" onkeyup="getFname()"> </p> <p id="unameError"></p>
        </td>
    </tr>
    
    <tr>        
        <td> <p> Last Name : </p></td> 
        <td> <p><input type="text" name="lastname" id="inputtext" onkeyup="getLname()"> </p> <p id="unameError2"></p></td>
    </tr>

    <tr>       
        <td> <p> Age : </p></td> 
        <td> <p><input type="text" name="age" id="inputtext" onkeyup="getAge()"> </p> <p id="unameError3"></p></td>
    </tr>

    <tr>
        <td><p> Designation : </p></td>
        <td><p>
            <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
            <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
            <input type="radio" name="designation" value="Project Lead">Project Lead
            </p></td>
    </tr>
    
    <tr>        
        <td><p> Preferred language :</p></td>
        <td> <p>
            <input type="checkbox" name="java" value="JAVA">JAVA
            <input type="checkbox" name="php" value="PHP">PHP
            <input type="checkbox" name="c++" value="C++">C++
            </p></td>
    </tr>

    <tr>        
        <td><p> E-mail :</p></td> 
        <td> <p>
            <input type="email" name="email" id="inputtext4" onkeyup="getEmail()"> </p> 
        <p id="unameError4"></p></td>
    </tr>

    <tr>    
        <td><p> Password : </p></td> <td> <p><input type="password" name="pass" id="password" onkeyup="getpassword()"><p id="passwordError"></p></td>
    </tr>

    <tr>   
    <td><p> Please choose a file :</p></td> <td> <p><input type="file" name="fileToUpload"></p></td>
    </tr>
    
    <tr>    
        <td>
            <input type="submit" name="Submisson" class="button submit" value="Submit">
            <input type="reset" name="Reset" class="button reset" value="Reset">
        </td>
    </tr>
</table>


</form>

<script src="../js/myscript.js"></script> 

</body>
</html>