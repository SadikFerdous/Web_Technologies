<?php
include ("../control/employeeregistrationprocess.php")
?>

<html>
    <head>
    <link rel="stylesheet" href="../css/employeeprofileupdatecss.css">
        <title>
            Employee Registration
        </title>
    </head>
    <body>
    <div class="cus"><h2>Registration</h2></div>
<form
    action="" method="POST"  class="box"  enctype="multipart/form-data" onsubmit="return formResult()"> 

    <p>First Name :  <input type="text" name="firstname" id="inputtext" onkeyup="getFname()">
    <p id="fname"> </p>
          
    <p>Last Name :  <input type="text" name="lastname" id="inputtext2" onkeyup="getLname()"> 
    <p id="lname"> </p>
      
    <p>Username : <input type="text" name="username" id="inputtext3" onkeyup="getUname()"> 
    <p id="uname"> </p>
    

     
    <p>Password :  <input type="password" name="pass" id="inputtext4" onkeyup="getpassword()"> 
    <p id="passwordError"> </p>
       
    <p>E-mail : <input type="email" name="email" id="inputtext5" onkeyup="getEmail()"> 
    <p id="email"> </p><p>
    

    <p>Gender : 
    
            <input type="radio" name="gender" id="Male" value="Male" onclick=" checkGender()">Male
            <input type="radio" name="gender" id="Female" value="Female" onclick=" checkGender()">Female
            <input type="radio" name="gender" id="Other" value="Other" onclick=" checkGender()">Others
    <p id="gender"> </p> </p>
     

   
    <p>Present Address: </td> <td> <input type="text" name="preaddress" id="inputtext6" onkeyup="getPre()"> 
    <p id="pre"> </p>
    

      
    <p>Permanent Address: </td> <td> <input type="text" name="peraddress" id="inputtext7" onkeyup="getPer()"> 
    <p id="per"> </p>
    
    <p>Enter your date of birth :</td> <td><input type="date" name="date"></p>
    

    <p>Religion : 
            <input type="radio" name="religion" id="Islam" value="Islam" onclick=" checkReligion()">Islam
            <input type="radio" name="religion" id="Hinduism" value="Hinduism" onclick=" checkReligion()">Hinduism
            <input type="radio" name="religion" id="Christianity" value="Christianity" onclick=" checkReligion()">Christianity
            <input type="radio" name="religion" id="Buddhism" value="Buddhism" onclick=" checkReligion()">Buddhism
    <p id="religion"> </p> </p>
    

    <p>Select your blood group : 
            <input type="radio" name="bloodgroup" id="AB+" value="AB+" onclick=" checkBlood()">AB+
            <input type="radio" name="bloodgroup" id="AB-" value="AB-" onclick=" checkBlood()">AB-
            <input type="radio" name="bloodgroup" id="A+" value="A+" onclick=" checkBlood()">A+
            <input type="radio" name="bloodgroup" id="A-" value="A-" onclick=" checkBlood()">A-
            <input type="radio" name="bloodgroup" id="B+" value="B+" onclick=" checkBlood()">B+
            <input type="radio" name="bloodgroup" id="B-" value="B-" onclick=" checkBlood()">B-
            <input type="radio" name="bloodgroup" id="O+" value="O+" onclick=" checkBlood()">O+
            <input type="radio" name="bloodgroup" id="O-" value="O-" onclick=" checkBlood()">O-
    <p id="blood"> </p> </p>
    

     
    <p>Nationality:  <input type="text" name="nationality" id="inputtext8" onkeyup="getNationality()"> 
    <p id="nationality"> </p></p>
    
 
    <p>NID Number :  <input type="number" name="nidnumber" id="inputtext9" onkeyup="getNid()"> 
    <p id="nid"> </p>
    
    
    <p>Maritial status : 
    <input type="radio" name="maritialstatus" id="Married" value="Married" onclick=" checkMaritial()">Married
    <input type="radio" name="maritialstatus" id="Unmarried" value="Unmarried" onclick=" checkMaritial()">Unmarried
    <p id="maritial"> </p> </p>

    <p>Phone Number :  <input type="number" name="number" id="inputtext10" onkeyup="getNumber()"> 
    <p id="number"> </p>
 
    <p>Designation : 
            <input type="radio" name="designation" id="Junior Employee" value="Junior Employee" onclick=" checkDesignation()">Junior Employee
            <input type="radio" name="designation" id="Senior Employee" value="Senior Employee" onclick=" checkDesignation()">Senior Employee
            <input type="radio" name="designation" id="Account Manager" value="Account Manager" onclick=" checkDesignation()">Account Manager
    <p id="designation"> </p> </p>
    

    
    <p>Enter your joining date :</td> <td><input type="date" name="date2"></p>
    

    
    <p>Please choose a file :</td> <td> <input type="file" name="fileToUpload"></p>
    
    
   
    <input type="submit" name="Submisson" value="Submit">
    <input type="reset" name="Submission" value="Reset">
            

    <div class=link><a href="../view/employeelogin.php">Click Here for Login!</a></div>
    


</form>
<script src="../js/employeeregistration.js"></script>
</center>
</body>
</html>