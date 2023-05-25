<html>
    <head>
    <link rel="stylesheet" href="../css/admincss.css">
        <title>Check Product Availablity
</title>
</head>
<body>
<div class="box">
    <h2>Check Product Availablity</h2> <hr>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return checkProduct()"> 
    <center>
    <br>

    <select name="searchdata" id="inputtext" onchange="checkProduct()">
    <option value="">Select a product name:</option>
    <option value="5mbps">5mbps</option>
    <option value="10Mbps">10mbps</option>
    <option value="25mbps">25mbps</option>
    </select>

    <br>
    <p id="unameError"></p> </td> 
    <br>
    <div>
        
        <div class="link">
        <a href="../view/showproductavi.php">Click Here to see all product!</a> 
        </div>
        <br>

        <div class="link">
        <a href="../view/adminprofile.php">Click Here for Profile Page!</a>
        </div>
    </center>
</form>
</div>
<script src="../js/adminajax.js"></script> 
</body>
</html>
