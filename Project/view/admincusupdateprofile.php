<?php
include("../control/admincusupdateprofileprocess.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/admincuscss.css">
        <title>Update Customer's Profile
</title>
</head>
<body>
    <div class="boxUpdateCus">
    <h2>Update Customer's Profile</h2> <hr>
    <form action="" method="POST" enctype="multipart/form-data">
   
        <br>
        <p>  Email :  </p>
        <input type="text" name="searchdata" placeholder="Search By Email"> 
        <input type="submit" name="search" class="button submit" value="Search">

        <p>  First Name :  </p> 
        <input type="text" name="fname" value="<?php global $fname; echo $fname;?>">
        
  
        <p>  Password :  </p> 
        <input type="text" name="pass" value="<?php global $pass; echo $pass;?>">
      
        <p>  E-mail :  </p>
        <input type="mail" name="mail"  value="<?php global $mail; echo $mail;?>" readonly >

        <p> Gender : </p> 
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
        <p>  Present Address: </p> 
        <input type="text" name="adres" value="<?php global $adres; echo $adres;?>">
        <br>


        <input type="submit" name="update" class="button submit" value="update">
        <input type="reset" name="Submission" class="button reset" value="Reset">

    </form>
</body>
</html>
<center>
    <div class="linkprofile">
        <a href="../view/adminprofile.php">Click here to go back</a> </td>
    </div>
</center>

