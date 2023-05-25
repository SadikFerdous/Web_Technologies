function getFname()
{
    var check = /^[A-Z]/;
    var check2 = /^[A-Za-z]/;
    var firstname =document.getElementById("inputtext").value;
    if(firstname[0].match(check) && firstname.match(check2))
    {
        document.getElementById("fname").innerHTML="Name is correct";
        return true;
    }
    else
    {
        document.getElementById("fname").innerHTML="First letter should be capital & should not contain only numerical value";
        return false;
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
    var check = /^[A-Za-z0123456789]+['^£$%&*()}{@#~?><>,|=_+¬-]/;
    var check2 = /^['^£$%&*()}{@#~?><>,|=_+¬-]+[A-Za-z0123456789]/;
    var password=document.getElementById("inputtext4").value;
    if((password.length > 6) && (password.match(check) || password.match(check2)))
    {
        document.getElementById("passwordError").innerHTML="Password is  correct";
        return true;
    }
    else
    {
        document.getElementById("passwordError").innerHTML="Password must contain special character and should not be less than 6 characters";
        return false;
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