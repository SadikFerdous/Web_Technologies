
<html>
<body>
<link rel="stylesheet" href="../css/employeecss.css">
<form action="" method="POST" class="box">
    <input type="submit" name="showall" value="Showall">        
    <input type="text" name="searchdata" placeholder="Search By Email"> 
    <input type="submit" name="search" value="Search">     
    <input type="text" name="fname" placeholder="Delete By Name"> 
    <input type="submit" name="delete" value="Delete">       
    <div class=link> <a href="../view/empolyeeprofile.php">Click Here for Profile Page!</a></div>
</form>
<form>
<?php           
    include("../control/empcusviewdeleteprocess.php") ;      
?>
</form>
</body>
</html>