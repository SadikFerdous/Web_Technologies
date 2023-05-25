<?php
include("../control/adminupdateempprofileprocess.php")
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/adminempcss.css">
        <title>Update Employee's Profile
</title>
</head>
<body>
    <div class="box">
    <h2>Update Employee's Profile</h2> <hr>
    
    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return serachEmp()"> 
    
    <p> User Name : </p> 
    <input type="text" name="searchdata" id="inputtext" onkeyup="serachEmp()"> 
    <br>
    <input type="submit" name="search" class="button submit" value="Search"> 
    <br>
    <center>
    <p id="unameError"></p> 
    </center>
    <br>
    <br>
 
    <p> First Name : </p> 
    <input type="text" name="firstname" value="<?php global $firstname; echo $firstname;?>" >
    <br>
    
    <p> Last Name : </p>  
    <input type="text" name="lastname" value="<?php global $lastname; echo $lastname;?>" >
    <br>

    <p> Username : </p>  
    <input type="text" name="username" value="<?php global $username; echo $username;?>" readonly>
    <br>

    <p> Password : </p>  
    <input type="text" name="pass" value="<?php global $pass; echo $pass;?>" 
    <br>
    
    <p> E-mail : </p>
    <input type="email" name="email"  value="<?php global $email; echo $email;?>" >
    <br>
    
    <p>  Gender : </p>
    <br>  
        <input type="radio" name="gender" value="Male"
            <?php
            global $gender;
            if($gender =="Male") 
            {
                echo"checked";
            } 
            ?>>Male
            
            <input type="radio" name="gender" value="Female"
            <?php
            if($gender =="Female") 
            {
                echo"checked";
            } 
            ?>>Female
            <input type="radio" name="gender" value="Other"
            <?php
            if($gender =="Other") 
            {
                echo"checked";
            } 
            ?>>Others
    <br>
    <br>
     
    <p> Present Address: </p>  
    <input type="text" name="preaddress" value="<?php global $preaddress; echo $preaddress;?>">
    <br>
       
    <p> Permanent Address: </p>  
    <input type="text" name="peraddress" value="<?php global $peraddress; echo $peraddress;?>">
    <br>
     
    <p> Enter your date of birth : </p> 
    <input type="date" name="date" value="<?php global $date; echo $date;?>">
    <br>
    
    <p> Religion :  </p>  
    <br>
            <input type="radio" name="religion" value="Islam"
            <?php
            global $religion;
            if($religion =="Islam") 
            {
                echo"checked";
            } 
            ?>>Islam
            <input type="radio" name="religion" value="Hinduism"
            <?php
            if($religion =="Hinduism") 
            {
                echo"checked";
            } 
            ?>>Hinduism
            <input type="radio" name="religion" value="Christianity"
            <?php
            if($religion =="Christianity") 
            {
                echo"checked";
            } 
            ?>>Christianity
            <input type="radio" name="religion" value="Buddhism"
            <?php
            if($religion =="Buddhism") 
            {
                echo"checked";
            } 
            ?>>Buddhism
<br>
<br>
    <p> Select your blood group : </p> 
    <br>  
            <input type="radio" name="bloodgroup" value="AB+"
            <?php
            global $bloodgroup;
            if($bloodgroup =="AB+") 
            {
                echo"checked";
            } 
            ?>>AB+
            <input type="radio" name="bloodgroup" value="AB-"
            <?php
            if($bloodgroup =="AB-") 
            {
                echo"checked";
            } 
            ?>>AB-
            <input type="radio" name="bloodgroup" value="A+"
            <?php
            if($bloodgroup =="A+") 
            {
                echo"checked";
            } 
            ?>>A+
            <input type="radio" name="bloodgroup" value="A-"
            <?php
            if($bloodgroup =="A-") 
            {
                echo"checked";
            } 
            ?>>A-
            <input type="radio" name="bloodgroup" value="B+"
            <?php
            if($bloodgroup =="B+") 
            {
                echo"checked";
            } 
            ?>>B+
            <input type="radio" name="bloodgroup" value="B-"
            <?php
            if($bloodgroup =="B-") 
            {
                echo"checked";
            } 
            ?>>B-
            <input type="radio" name="bloodgroup" value="O+"
            <?php
            if($bloodgroup =="O+") 
            {
                echo"checked";
            } 
            ?>>O+
            <input type="radio" name="bloodgroup" value="O-"
            <?php
            if($bloodgroup =="O-") 
            {
                echo"checked";
            } 
            ?>>O-
    <br>
    <br>
    
    <p> Nationality: </p> 
    <input type="text" name="nationality" value="<?php global $nationality; echo $nationality;?>">
    <br>
    
    <p> NID Number :  </p>  
    <input type="number" name="nidnumber" value="<?php global $nidnumber; echo $nidnumber;?>">
    <br>
    
    <p> Maritial status : </p>
    <br>  
        <input type="radio" name="maritialstatus" value="Married"
        <?php
            global $maritialstatus;
            if($maritialstatus =="Married") 
            {
                echo"checked";
            } 
            ?>>Married
            <input type="radio" name="maritialstatus" value="Unmarried"
            <?php
            if($maritialstatus =="Unmarried") 
            {
                echo"checked";
            } 
            ?>>Unmarried
        <br>
        <br>
    
    <p> Phone Number : </p> 
    <input type="text" name="number" value="<?php global $number; echo $number;?>">
    <br>
    
    <p> Designation : </p> 
    <br>
    <input type="radio" name="designation" value="Junior Employee"
            <?php
            global $designation;
            if($designation =="Junior Employee") 
            {
                echo"checked";
            } 
            ?>>Junior Employee
            <input type="radio" name="designation" value="Senior Employee"
            <?php
            if($designation =="Senior Employee") 
            {
                echo"checked";
            } 
            ?>>Senior Employee
            <!-- <input type="radio" name="designation" value="Account Manager"
            <?php
            // if($designation =="Account Manager") 
            // {
            //     echo"checked";
            // } 
            ?>>Account Manager -->
    <br>
    <br>
    
    <p> Enter your joining date : </p> 
    <input type="date" name="date2" value="<?php global $date2; echo $date2;?>">
    <br>
    
    
    <p>Previous file : <a href="../uploads/<?php global $file; echo $file;?>"> <?php echo $file;?></a> <br><br></p>

    <p>Please choose a file : </td> <td> <input type="file" name="fileToUpload" ><br><p>

    

    <input type="submit" name="update" class="button submit" value="update">
    <input type="reset" name="Submission" class="button reset" value="Reset">
            

    </form>
    <script src="../js/adminajax.js"></script> 
</body>

<center>
    <div class="link"> 
<a href="../view/showemp.php">Click here to go back</a> 
<br>
<br>
<div>
    <br>
    </center>

</html>
