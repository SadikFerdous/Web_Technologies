<?php
include("../control/adminforgetpassprocess.php")
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/admincss.css">
        <title>Forget Passoword
</title>
</head>
<body>
    <div class="box">
        <h2>Forget Passoword</h2> <hr>
    <form action="" method="POST">
        <br>
        <p>  Username : </p>   
        <input type="text" name="username" placeholder="Enter your username" >
 
        <p>  Email :  </p> 
        
        <input type="text" name="email" placeholder="Enter your email"> 
        
        <br>
        <input type="submit" name="enter" class="button submit" value="Enter">       
    </form>
    </div>
</body>
</html>