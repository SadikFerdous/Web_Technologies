<?php
include("../control/phpcode.php")

?>

<html>
    <head>
        <title>
            LabTask2 
        </title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <hr></hr>
<form
    action="" method="POST" enctype="multipart/form-data"> 
<table>
    <tr>  
        <td> First Name : </td> 
        <td> <input type="text" name="firstname">
        <?php 
             echo $unameError; 
        ?> 
        </td>
    </tr>
    
    <tr>        
        <td> Last Name : </td> <td> <input type="text" name="lastname"></td>
    </tr>

    <tr>       
        <td> Age : </td> <td> <input type="number" name="age"></td>
    </tr>

    <tr>
        <td>Designation : </td>
        <td>
            <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
            <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
            <input type="radio" name="designation" value="Project Lead">Project Lead
        </td>
    </tr>
    
    <tr>        
        <td>Preferred language :</td>
        <td> 
            <input type="checkbox" name="java" value="JAVA">JAVA
            <input type="checkbox" name="php" value="PHP">PHP
            <input type="checkbox" name="c++" value="C++">C++
        </td>
    </tr>

    <tr>        
        <td>E-mail :</td> <td> <input type="email" name="email" ></td>
    </tr>

    <tr>    
        <td>Password : </td> <td> <input type="password" name="pass"></td>
    </tr>

    <tr>   
    <td>Please choose a file :</td> <td> <input type="file" name="fileToUpload"></td>
    </tr>
    
    <tr>    
        <td>
            <input type="submit" name="Submisson" value="submit">
            <input type="reset" name="Reset" value="reset">
        </td>
    </tr>
</table>

<?php
$mydb= new db();
$conobj= $mydb->openCon();
$results=$mydb->showAll("employee",$conobj);
    if($results->num_rows > 0)
        {
            echo "<table>";
            while($myrow=$results->fetch_assoc())
            { 
                echo"<tr>";
                echo"<td>".$myrow["fname"]."<td>";
                echo"<tr>";
                echo"<td>".$myrow["lname"]."<td>";
                echo"<tr>";
                echo"<td>".$myrow["age"]."<td>";
                echo"<tr>";
                echo"<td>".$myrow["designation"]."<td>";
                echo"<tr>";
                echo"<td>".$myrow["planguage"]."<td>";
                echo"<tr>";
                echo"<td>".$myrow["email"]."<td>";
                echo"<tr>";
                echo"<td>".$myrow["password"]."<td>";
                echo"<tr>";
                echo"<td>".$myrow["picture"]."<td>";
                echo"<tr>";
            }
            echo "<table>";
            
        }
?>
</form>
</body>
</html>