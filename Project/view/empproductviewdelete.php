
<html>
<body>
<link rel="stylesheet" href="../css/employeecss.css">
<form action="" method="POST" class="box">
       <input type="submit" name="showall" value="Showall"> </td><hr>
       <input type="text" name="searchdata" placeholder="Search By Product Name"> 
       <input type="submit" name="search" value="Search"><hr>
       <input type="text" name="productname" placeholder="Delete By Name"> 
       <input type="submit" name="delete" value="Delete"> 
       <div class=link><a href="../view/empolyeeprofile.php">Click Here for Profile Page!</a></div>
</form>
<form>
<?php           
    include("../control/empproductviewdeleteprocess.php") ;      
?>
</form>
</body>
</html>