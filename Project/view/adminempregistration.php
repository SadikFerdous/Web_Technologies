<?php
include ("../control/adminempregistrationprocess.php")
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/adminempcss.css">
        <title>
            Employee Registration
        </title>
    </head>
    <body>
    <div class="box">
        <h2>Registration </h2>
        <hr></hr>
    <form
        action="" method="POST" enctype="multipart/form-data" onsubmit="return formResult()">  
    <table>
    
    <br>
    <p> First Name : </p> 
    <input type="text" name="firstname" id="inputtext" onkeyup="getFname()">
    <br>
    <center>
    <p id="fname"> </p>
    </center>
    <br>
    <br>

      
    <p> Last Name : </p> 
    <input type="text" name="lastname" id="inputtext2" onkeyup="getLname()"> 
    <br>
    <center>
    <p id="lname"> </p>
    </center>
    <br>
    

    <p> Username : </p> 
    <input type="text" name="username" id="inputtext3" onkeyup="getUname()"> 
    <br>
    <center>
    <p id="uname"> </p>
    </center>
    <br>
    
    <p> Password : </p> 
    <input type="password" name="pass" id="inputtext4" onkeyup="getpassword()">
    <br>
    <center> 
    <p id="passwordError"> </p>
    </center>
    <br>
    
    <p> E-mail : </p> 
    <input type="email" name="email" id="inputtext5" onkeyup="getEmail()">
    <br>
    <center> 
    <p id="email"> </p>
    </center>
    <br>
    
    <p> Gender : </p> 
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
    <br>
    
    <p> Present Address: </p>  
    <input type="text" name="preaddress" id="inputtext6" onkeyup="getPre()">
    <br>
    <center> 
    <p id="pre"> </p>
    </center>
    <br>
    
    <p> Permanent Address: </p>  
    <input type="text" name="peraddress" id="inputtext7" onkeyup="getPer()">
    <br>
    <center> 
    <p id="per"> </p>
    </center>
    <br>
    
    <p> Enter your date of birth : </p> 
    <input type="date" name="date">
    
    <p> Religion :  </p> 
    <br>
        <input type="radio" name="religion" id="Islam" value="Islam" onclick=" checkReligion()">Islam
        <input type="radio" name="religion" id="Hinduism" value="Hinduism" onclick=" checkReligion()">Hinduism
        <input type="radio" name="religion" id="Christianity" value="Christianity" onclick=" checkReligion()">Christianity
        <input type="radio" name="religion" id="Buddhism" value="Buddhism" onclick=" checkReligion()">Buddhism
    <br>
    <br>
    <center>
    <p id="religion"> </p>
    </center>
    <br>
    <br>
    
    <p> Select your blood group : </p>  
    <br>
            <input type="radio" name="bloodgroup" id="AB+" value="AB+" onclick=" checkBlood()">AB+
            <input type="radio" name="bloodgroup" id="AB-" value="AB-" onclick=" checkBlood()">AB-
            <input type="radio" name="bloodgroup" id="A+" value="A+" onclick=" checkBlood()">A+
            <input type="radio" name="bloodgroup" id="A-" value="A-" onclick=" checkBlood()">A-
            <input type="radio" name="bloodgroup" id="B+" value="B+" onclick=" checkBlood()">B+
            <input type="radio" name="bloodgroup" id="B-" value="B-" onclick=" checkBlood()">B-
            <input type="radio" name="bloodgroup" id="O+" value="O+" onclick=" checkBlood()">O+
            <input type="radio" name="bloodgroup" id="O-" value="O-" onclick=" checkBlood()">O-
    <br>
    <br>
    <center>
    <p id="blood"> </p> 
    </center>
    <br>
    <br>

    <p> Nationality: </p> 
    <input type="text" name="nationality" id="inputtext8" onkeyup="getNationality()"> 
    <br>
    <center>
    <p id="nationality"> </p>
    </center>
    <br>
    
        
    <p> NID Number :  </p> 
    <input type="number" name="nidnumber" id="inputtext9" onkeyup="getNid()">
    <br>
    <center> 
    <p id="nid"> </p>
    </center>
    <br>
    
    <p> Maritial status : </p>
    <br> 
            <input type="radio" name="maritialstatus" id="Married" value="Married" onclick=" checkMaritial()">Married
            <input type="radio" name="maritialstatus" id="Unmarried" value="Unmarried" onclick=" checkMaritial()">Unmarried
    <br>
    <br>
    <center>
    <p id="maritial"> </p> 
    </center>
    <br>
    <br>
     
    <p> Phone Number : </p>
    <input type="number" name="number" id="inputtext10" onkeyup="getNumber()"> 
    <br>
    <center>
    <p id="number"> </p>
    </center>
    <br>
    
    <p> Designation : </p> 
    <br>
            <input type="radio" name="designation" id="Junior Employee" value="Junior Employee" onclick=" checkDesignation()">Junior Employee
            <input type="radio" name="designation" id="Senior Employee" value="Senior Employee" onclick=" checkDesignation()">Senior Employee
            <!-- <input type="radio" name="designation" id="Account Manager" value="Account Manager" onclick=" checkDesignation()">Account Manager -->
    <br>
    <br>
    <center>
    <p id="designation"> </p> 
    </center>
    <br>
    <br>
    
    <p> Enter your joining date : </p> 
    <br>
    <input type="date" name="date2">
    <br>
    
    <p> Please choose a file  </p> 
    <br>
    <input type="file" name="fileToUpload">
    <br>
    
        <input type="submit" name="Submisson" class="button submit" value="Submit">
        <input type="reset" name="Submission" class="button reset" value="Reset">

     <center>
    <div class="link">    
    <a href="../view/adminprofile.php">Click Here for Profile Page!</a>
    <br>
    <br>
    <br>
    <div>
    </center>

</form>
<script src="../js/adminempregistration.js"></script>
</center>
</body>
<div>
</html>
