<?php
include("../control/editprofilecontrol.php");
?>
<html>
    <form action="" method="POST" enctype="multipart/form-data">
        
        First Name :  <input type="text" name="fname" value="<?php echo $fname;?>" ><br>
        Last Name : <input type="text" name="lname" value="<?php echo $lname;?>" ><br>
        Age : <input type="number" name="age" value="<?php echo $age;?>" ><br>
        Designation : 
                <input type="radio" name="designation" value="Junior Programmer"
                <?php
                if($des=="Junior Programmer") 
                {
                        echo"checked";
                } 
                ?> 
                >Junior Programmer
                <input type="radio" name="designation" value="Senior Programmer"
                <?php
                if($des=="Senior Programmer") 
                {
                        echo"checked";
                } 
                ?> 
                >Senior Programmer
                <input type="radio" name="designation" value="Project Lead"
                <?php
                if($des=="Project") 
                {
                        echo"checked";
                } 
                ?> 
                >Project Lead<br>

        Preferred language :
                <input type="checkbox" name="java" value="JAVA"
                <?php
                if($pre=="JAVA") 
                {
                        echo"checked";
                } 
                ?> 
                >JAVA
                <input type="checkbox" name="php" value="PHP"
                <?php
                if($pre=="PHP") 
                {
                        echo"checked";
                } 
                ?> 
                >PHP
                <input type="checkbox" name="c++" value="C++"
                <?php
                if($pre=="C++") 
                {
                        echo"checked";
                } 
                ?> 
                >C++<br>
                
        E-mail :<input type="email" name="email" value="<?php echo $email;?>" readonly ><br>
        Password : <input type="password" name="pass" value="<?php echo $pass;?>"><br>

        Previous file :<a herf="../uploads/<?php echo $file;?>"> <br>
        Please choose a file :<input type="file" name="fileToUpload" value="<?php echo $file;?>"><br>
    
        <input type="submit" name="update" value="update"><br>
        <input type="reset" name="Reset" value="Reset">
        <input type="submit" name="delete" value="delete"><br>
</form>
</body>
</html>