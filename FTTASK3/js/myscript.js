function getFname()
{
    var check = /^[A-Za-z]+$/;
    var firstname =document.getElementById("inputtext").value;
    if(firstname.match(check))
    {
        document.getElementById("unameError").innerHTML="First Name is correct";
        return true;
    }
    else
    {
        document.getElementById("unameError").innerHTML="First Name must be Alphabets";
        return false;
    }
}

function getLname()
{
    var check = /^[A-Za-z]+$/;
    var lastname =document.getElementById("inputtext").value;
    if(lastname.match(check))
    {
        document.getElementById("unameError2").innerHTML="Last Name is correct";
        return true;
    }
    else
    {
        document.getElementById("unameError2").innerHTML="Last Name must be Alphabets";
        return false;
    }
}

function getAge()
{
    var check = /[0123456789]/;
    var age =document.getElementById("inputtext").value;
    if(age.match(check))
    {
        document.getElementById("unameError3").innerHTML="Age is correct";
        return false;
    }
    else
    {
        document.getElementById("unameError3").innerHTML="Age must be number";
        return true;
    }
}

function getEmail()
{
    var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email=document.getElementById("inputtext4").value;
    if(email.match(letters))
    {
        document.getElementById("unameError4").innerHTML="Email is correct";
        return true;
    }
    else
    {
        document.getElementById("unameError4").innerHTML="must contain @ and .com";
        return false;
    }
}

function getpassword()
{
    var letters = /^[A-Za-z]+[0123456789]/;
    var password=document.getElementById("password").value;
    if((password.length > 8) && password.match(letters))
    {
        document.getElementById("passwordError").innerHTML="password is  correct";
        return true;
    }
    else
    {
        document.getElementById("passwordError").innerHTML="Password must have at least one alphabet and one number and should not be less than 8 characters";
        return false;
    }
}


function formResult()
{
    if(getFname()==true && getLname()==true && getAge()==true && getEmail()==true && getpassword()==true )
    {
        return true;
    }
    else
    {
      return false;
    }

}

// function myAjax()
// {
//     var myxhttp= new XMLHttpRequest();
//     var name= document.getElementById("inputtext").value;

//     myxhttp.onreadystatechange=function()
//     {
//         if(this.readyState== 4& this.status==200)
//         {
//             document.getElementById("unameError").innerHTML=this.responseText;
//         }
//     }

//     myxhttp.open("POST","http://localhost/LabTask4/control/checknamecontrol.php",true);
//     myxhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//     myxhttp.send("firstname="+name);
// }
