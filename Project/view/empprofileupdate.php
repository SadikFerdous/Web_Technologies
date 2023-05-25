<?php
include("../control/empprofileprocessupdate.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="../css/employeeprofileupdatecss.css">
        <title>Update Employee's Profile
</title> 
</head>
<body>
<div class="cus"><h2>Update Employee's Profile</h2></div>

<form action="" method="POST" class="box" enctype="multipart/form-data">


    <p>First Name : <input type="text" name="firstname" value="<?php global $firstname; echo $firstname;?>" ><br>
    Last Name : <input type="text" name="lastname" value="<?php global $lastname; echo $lastname;?>" ><br>
    Username : <input type="text" name="username" value="<?php global $username; echo $username;?>" readonly><br>
    Password : <input type="text" name="pass" value="<?php global $pass; echo $pass;?>"readonly><br>
    E-mail : <input type="email" name="email"  value="<?php global $email; echo $email;?>" ><br></p>
    <p>Gender : 

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
    </p><br>
    <p>Present Address : <input type="text" name="preaddress" value="<?php global $preaddress; echo $preaddress;?>"><br>
    Permanent Address : <input type="text" name="peraddress" value="<?php global $peraddress; echo $peraddress;?>"><br>
    Enter your date of birth : <input type="date" name="date" value="<?php global $date; echo $date;?>"><br></p>


    <p>Religion : 
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
    </p>
    <br>
    <p>Select your blood group : 
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
        </p>
        <br>
        <p>Nationality : <input type="text" name="nationality" value="<?php global $nationality; echo $nationality;?>"><br>

        NID Number : <input type="number" name="nidnumber" value="<?php global $nidnumber; echo $nidnumber;?>"><br></p>

    
        <p>Maritial status : 

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
        </p>
        <br>
        <p>Phone Number : <input type="text" name="number" value="<?php global $number; echo $number;?>"><br></p>



        <p>Designation : 
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
            <input type="radio" name="designation" value="Account Manager"
            <?php
            if($designation =="Account Manager") 
            {
                echo"checked";
            } 
            ?>>Account Manager
  
       </p>
        <br>
        <p>Enter your joining date : <input type="date" name="date2" value="<?php global $date2; echo $date2;?>"><br></p>

        <p>Previous file : <div class="link"> <a href="../uploads/<?php global $file; echo $file;?>"> <?php echo $file;?> </a><br><br></p></div>

        <p>Please choose a file : <input type="file" name="fileToUpload" value="<?php echo $file;?>"><br><p>

        <input type="submit" name="update" value="Update">
        <input type="reset" name="Submission" value="Reset">
        <div class=link><a href="../view/empolyeeprofile.php">Click here to go back</a> </div> <br>  
    </form>
    
   

</body>
</html>




