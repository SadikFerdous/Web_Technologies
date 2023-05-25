<?php
include("../control/empcusupdateprofileprocess.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/employeeprofileupdatecss.css">
        <title>Update Customer's Profile
</title>
</head>
<body>
    <div class="cus"><h2>Update Customer's Profile</h2> </div>
    <form action="" method="POST" class="box" enctype="multipart/form-data">
    
    <p>Email : </p><input type="text" name="searchdata" placeholder="Search By Email"> <input type="submit" name="search" value="Search">
    <hr>
    <p>First Name : </p> </td> <td> <input type="text" name="fname" value="<?php global $fname; echo $fname;?>">
    <p>Password : </p><input type="text" name="pass" value="<?php global $pass; echo $pass;?>">
    <p>E-mail :</p> <input type="email" name="mail"  value="<?php global $mail; echo $mail;?>" readonly >
    <p>Gender : </p>

            <p><input type="radio" name="gender" value="Male"
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
            ?>>Others</p><br>
    <p>Present Address:  </p> <input type="text" name="adres" value="<?php global $adres; echo $adres;?>">
  
 
    <input type="submit" name="update" value="update">
    <input type="reset" name="Submission" value="Reset">
    <div class=link><<a href="../view/empolyeeprofile.php">Click here to go back</a></div> <br>        
     

    </form>
</body>
</html>





