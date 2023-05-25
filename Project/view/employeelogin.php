<?php
include("../control/employeeloginprocess.php")
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/employeecss.css">
        <title>Employee Login
</title>
</head>
<body>


    <form action="" method="POST"  class="box">

            <h2>Employee Login</h2> <hr>
            <input type="text" name="username" placeholder="Enter your username"> 

            <input type="password" name="pass" placeholder="Enter your password"> <br>

            <input type="submit" name="login" value="Login"> <br><br>

            <div class=link><a href="empforgetpass.php">Can’t access your account?</a><br> <br></div>
                
            <div class=link><a href="employeeregistration.php">Click Here for Register!</a><br> <br></div>

            <div class=link><a href="homepage.php">Click Here To Go Home Page!</a></div> 
                           
        </table>
    </form>

</body>
</html>