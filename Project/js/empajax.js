function serachCus()
{
    var myxhttp= new XMLHttpRequest();
    var name= document.getElementById("inputtext5").value;

    myxhttp.onreadystatechange=function()
    {
        if(this.readyState== 4 && this.status==200)
        {
            document.getElementById("email").innerHTML=this.responseText;
        }
    }
    myxhttp.open("POST","http://localhost/Project/control/empajaxcus.php",true);
    myxhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myxhttp.send("mail="+name);
}

function myAjax()
{
    var myxhttp= new XMLHttpRequest();
    var productname= document.getElementById("inputtext").value;

    myxhttp.onreadystatechange=function()
    {
        if(this.readyState== 4 && this.status==200)
        {
            document.getElementById("pid").value=this.responseText;
            document.getElementById("pp").innerHTML=this.responseText;
        }
    }

    myxhttp.open("POST","http://localhost/Project/control/empnamesuggproduct.php",true);
    myxhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myxhttp.send("productname="+productname);
}
