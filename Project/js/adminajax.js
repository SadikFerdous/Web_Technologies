function serachEmp()
{
    var myxhttp= new XMLHttpRequest();
    var name= document.getElementById("inputtext").value;

    myxhttp.onreadystatechange=function()
    {
        if(this.readyState== 4 && this.status==200)
        {
            document.getElementById("unameError").innerHTML=this.responseText;
        }
    }
    myxhttp.open("POST","http://localhost/Project/control/adminajaxemp.php",true);
    myxhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myxhttp.send("searchdata="+name);
}

function checkProduct()
{
    var myxhttp= new XMLHttpRequest();
    var name= document.getElementById("inputtext").value;

    myxhttp.onreadystatechange=function()
    {
        if(this.readyState== 4 && this.status==200)
        {
            document.getElementById("unameError").innerHTML=this.responseText;
        }
    }
    myxhttp.open("POST","http://localhost/Project/control/adminajaxproduct.php",true);
    myxhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myxhttp.send("searchdata="+name);
}
