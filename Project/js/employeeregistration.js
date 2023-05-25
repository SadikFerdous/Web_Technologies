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

function getLname()
{
    var check = /^[A-Z]/;
    var check2 = /^[A-Za-z]/;
    var lastname =document.getElementById("inputtext2").value;
    if(lastname[0].match(check)  && lastname.match(check2))
    {
        document.getElementById("lname").innerHTML="Name is correct";
        return true;
    }
    else
    {
        document.getElementById("lname").innerHTML="First letter should be capital & should not contain only numerical value";
        return false;
    }
}

function getUname()
{
    var check = /^[a-z]/;
    var check2 = /^[0123456789]+[a-z]/;
    var check3 = /^[0123456789]+[a-z]+[A-Z]/;
    var check4 = /^[0123456789]+[A-Z]+[a-z]/;
    var check5 = /^[A-Z]+[0123456789]+[a-z]/;
    var check6 = /^[A-Z]/;
    var check7 = /^[a-z]+[A-Z]+[0123456789]/;
    var check8 = /^[0123456789]/;
    var check7 = /^[a-z]+[0123456789]+[A-Z]/;
    var uname =document.getElementById("inputtext3").value;
    if(uname.match(check3) || uname.match(check4) || uname.match(check5) || uname.match(check6) || uname.match(check7) || uname.match(check8))
    {
        document.getElementById("uname").innerHTML="Letters should not be capital & should not contain only numerical value";
        return false;
    }
    else if(uname.match(check) || uname.match(check2))
    {
        document.getElementById("uname").innerHTML="Name is correct";
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

function getPer()
{
    var per=document.getElementById("inputtext7").value;
    if(per=="")
    {
        document.getElementById("per").innerHTML="Permanent Address should not be empty";
        return false;
    }
    else
    {
        document.getElementById("per").innerHTML="Permanent Address is Ok";
        return true;
    }
}

function getNationality()
{
    var check = /^[A-Za-z]/;
    var check2 = /^[0123456789]+[A-Za-z]/;
    var check3 = /^[A-Za-z]+[0123456789]/;
    var nationality =document.getElementById("inputtext8").value;
    
    if(nationality.match(check3) || nationality.match(check2))
    {
        document.getElementById("nationality").innerHTML="Nationality should contain only string";
        return false;
    }
    else if(nationality.match(check))
    {
        document.getElementById("nationality").innerHTML="Nationality is correct";
        return true;
    }
}



function getNid()
{
    var check = /^[0123456789]/;
    var nid =document.getElementById("inputtext9").value;
    if((nid.length>9) &&  (nid.length<11) && nid.match(check))
    {
        document.getElementById("nid").innerHTML="NID is OK";
        return true;
    }
    else
    {
        document.getElementById("nid").innerHTML="NID should contain only number and should be 10 characters";
        return false;
    }
}

function getNumber()
{
    var check = /^[0123456789]/;
    var number =document.getElementById("inputtext10").value;
    if(number.match(check))
    {
        document.getElementById("number").innerHTML="Number is OK";
        return true;
    }
    else
    {
        document.getElementById("number").innerHTML="Number should contain only number";
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

function checkReligion() 
{    
    if(document.getElementById('Islam').checked || document.getElementById('Hinduism').checked 
    || document.getElementById('Christianity').checked || document.getElementById('Buddhism').checked) 
    {   
        document.getElementById("religion").innerHTML= "Religion button is checked"; 
        return true;  
    }     
} 

function checkBlood() 
{    
    if(document.getElementById('AB+').checked || document.getElementById('AB-').checked 
    || document.getElementById('A+').checked || document.getElementById('A-').checked
    || document.getElementById('B+').checked || document.getElementById('B-').checked
    || document.getElementById('O+').checked || document.getElementById('O-').checked) 
    {   
        document.getElementById("blood").innerHTML= "Blood Group button is checked"; 
        return true;  
    }     
} 

function checkMaritial() 
{    
    if(document.getElementById('Married').checked || document.getElementById('Unmarried').checked) 
    {   
        document.getElementById("maritial").innerHTML= "Maritial status button is checked"; 
        return true;  
    }     
}

function checkDesignation() 
{    
    if(document.getElementById('Junior Employee').checked || document.getElementById('Senior Employee').checked 
    || document.getElementById('Account Manager').checked) 
    {   
        document.getElementById("designation").innerHTML= "Designation button is checked"; 
        return true;  
    }     
}


function formResult()
{
    if(getFname()==true && getLname()==true && getUname()==true && getpassword()==true && getEmail()==true && getPre()==true 
    && getPer()==true && getNationality()==true && getNid()==true && getNumber()==true && checkGender()==true 
    && checkReligion()==true && checkBlood()==true && checkMaritial()==true && checkDesignation()==true)
    {
        return true;
    }
    else
    {
      return false;
    }
}