function getFname()
{
    var check = /^[A-Za-z]/;
    var check2 = /^[0123456789]+[a-z]/;
    var check3 = /^[0123456789]+[A-Z]/;
    var check4 = /^[a-z]+[0123456789]/;
    var check5 = /^[A-Z]+[0123456789]/;
    var check6 = /^[a-z]/;
    var check7 = /^[A-Z]/;
    var check8 = /^[0123456789]/;
    var check9 = /^[A-Z]+[a-z]+[0123456789]/;
    var firstname =document.getElementById("inputtext").value;
    
    if(firstname.match(check5) || firstname.match(check3) || firstname.match(check9))
    {
        document.getElementById("fname").innerHTML="First letter should be capital & should not contain numerical value";
        return false;
    }
    else if(firstname.match(check2) || firstname.match(check4) || firstname.match(check6)  || firstname.match(check8))
    {
        document.getElementById("fname").innerHTML="First letter should be capital & should not contain numerical value";
        return false;
    }
    else if(firstname[0].match(check7) && firstname.match(check))
    {
        document.getElementById("fname").innerHTML="Name is correct";
        return true;
    }
}

function checkGender() 
{    
    if(document.getElementById('Male').checked || document.getElementById('Female').checked 
    || document.getElementById('Other').checked) 
    {   
        document.getElementById("gender").innerHTML= "Gender button is checked"; 
        return true;  
    }     
}

function getEmail()
{
    var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email=document.getElementById("inputtext5").value;
    if(email.match(letters))
    {
        document.getElementById("email").innerHTML="Email is correct";
        return true;
    }
    else
    {
        document.getElementById("email").innerHTML="must contain @ and .com";
        return false;
    }
}

function getPre()
{
    var pre=document.getElementById("inputtext6").value;
    if(pre=="")
    {
        document.getElementById("pre").innerHTML="Present Address should not be empty";
        return false;
    }
    else
    {
        document.getElementById("pre").innerHTML="Present Address is Ok";
        return true;
    }
}

function getpassword()
{
    var check = /^[0123456789]/;
    var check2 = /^[A-Za-z]+[0123456789]]/;
    var check3 = /^[0123456789]+[A-Za-z]/;
    var password=document.getElementById("inputtext4").value;
    if((password.length < 6))
    {
        document.getElementById("passwordError").innerHTML="Password should not be less than 6 characters and only numerical value is allowed";
        return false;
    }

    else if(password.match(check2) || password.match(check3))
    {
        document.getElementById("passwordError").innerHTML="Password should not be less than 6 characters and only numerical value is allowed";
        return false;
    }
    
    else if((password.length > 6) && (password.match(check)))
    {
        document.getElementById("passwordError").innerHTML="Password is  correct";
        return true;
    }
}

function formResult()
{
    if(getFname()==true && checkGender()==true && getEmail()==true && getPre()==true && getpassword()==true)
    {
        return true;
    }
    else
    {
      return false;
    }
}