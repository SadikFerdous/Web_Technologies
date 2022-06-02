<html>
    <head>
        <title>
            LabTask1 
        </title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <hr></hr>
<form
    action="../control/phpcode.php" method="POST">
<table>
    <tr>  
        <td> First Name : </td> <td> <input type="text" name="firstname"></td>
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
        <td>Please choose a file :</td> <td> <input type="file" name="file"></td>
    </tr>
    
    <tr>    
        <td>
            <input type="submit">
            <input type="reset" >
        </td>
    </tr>
</table>
</form>
</body>
</html>